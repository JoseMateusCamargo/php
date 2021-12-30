<?php

/*
 * Com o HMAC , sua mensagem é criptografada por hash usando uma chave privada conhecida apenas por você e pela API.
 * É definido no nível da conta. A chave hash resultante é incluída no cabeçalho da mensagem de notificação.
 * Quando a mensagem é recebida, seu aplicativo repete a operação de hash e compara o resultado com a assinatura HMAC
 * incluída no cabeçalho. O HMAC garante que a mensagem é da API e não foi alterada no caminho por terceiros.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_POST)) {
    try {
        $payload = file_get_contents('php://input'); // Request body
        $headers = getDsHeaders();

        /*
         * O hash HMAC deve ser verificado antes que o corpo da solicitação seja analisado.
         * O corpo da solicitação não é confiável até que o hash HMAC seja verificado.
         */

        if (array_key_exists("Signature", $headers)) {
            $secret_key = "hmac-test"; // Secret key

            $signature = $headers["Signature"]; // The HMAC hash key in the HTTP header > '$computed_hash'
            $result = hashIsValid($secret_key, $payload, $signature);

            response($signature, $payload, $result);
        }
    } catch (Exception $e) {
        logger(PHP_EOL . "Exception: " . $e->getMessage() . PHP_EOL);
    }
    header("HTTP/1.1 200 OK");
}


/**
 * @return array
 */
function getDsHeaders(): array
{
    foreach ($_SERVER as $key => $value) {
        if (strpos($key, 'HTTP_') === 0) {
            $headers[str_replace(' ', '', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))))] = $value;
        }
    }
    return $headers ?? [];
}


/**
 * @param $secret_key
 * @param $payload
 * @return string
 */
function computeHash($secret_key, $payload): string
{
    // hash_hmac — Generate a keyed hash value using the HMAC method
    // ref: https://www.php.net/manual/pt_BR/function.hash-hmac.php
    $hexHash = hash_hmac('sha256', $payload, utf8_encode($secret_key));
    return base64_encode(hex2bin($hexHash));
}


/**
 * @param $secret_key
 * @param $payload
 * @param $signature
 * @return bool
 */
function hashIsValid($secret_key, $payload, $signature): bool
{
    $computed_hash = computeHash($secret_key, $payload);
    return hash_equals($signature, $computed_hash);
}


/**
 * @throws JsonException
 */
function response($signature, $payload, $result)
{
    $hmac_status = $result === True ? "pass" : "fail";

    if ($result) {
        try {
            $json = json_decode($payload, False, 512, JSON_THROW_ON_ERROR);
            $id = $json->id;
            $message = $json->message;
        } catch (Exception $e) {
            logger(PHP_EOL . "Exception: " . $e->getMessage() . PHP_EOL);
        }

        logger(PHP_EOL);
        logger("Id: " . $id);
        logger("Signature: " . $signature);
        logger("HMAC check status: " . $hmac_status);
        logger("Message: " . $message);
    } else {
        logger(PHP_EOL);
        logger("HMAC check status: " . $hmac_status);
        logger("Generated at: " . date('Y-m-d H:i:s'));
    }

    echo json_encode(["hmacStatus" => $hmac_status], JSON_THROW_ON_ERROR);
}


/**
 * @param $txt
 */
function logger($txt)
{
    $file = fopen("log.txt", 'ab') or die("Unable to open file!");
    fwrite($file, PHP_EOL . $txt);
    fclose($file);
}