<?php
/*
 * Exemplo de consumo de memória.
 * Diferença entre de consumo de memória em grandes arquivos, utilizando generator e não utilizando.
 *
 * Database com 100000 linhas:
 * Sem Generators = Used memory: ~49.87MB
 * Com Generators = Used memory: ~0.41MB
 */

/**
 * @param string $filePath
 * @return array
 */
function getLines(string $filePath): array
{
    $file = fopen($filePath, 'rb');
    $i = 0;
    $data = [];

    while ($i <= 100000) {
        $data[] = fgetcsv($file);
        $i++;
    }

    fclose($file);

    return $data;
}

$data = getLines("data_base.csv");

foreach ($data as $item) {
    printf('%s with %d cost %s', $item[0], $item[1], PHP_EOL);
}

# Used memory: ~49.87MB
echo 'Used memory: ~' . round((memory_get_peak_usage() / 1024 / 1024), 2) . 'MB';


# Usando Generators
/**
 * @param string $filePath
 * @return Generator
 */
function getLinesGenerator(string $filePath): Generator
{
    $file = fopen($filePath, 'rb');
    $i = 0;

    while ($i <= 100000) {
        yield fgetcsv($file);
        $i++;
    }

    fclose($file);
}

$lines = getLinesGenerator("data_base.csv");

foreach ($lines as $line) {
    printf('%s with %d cost %s', $line[0], $line[1], PHP_EOL);
}

# Used memory: ~0.41MB
echo PHP_EOL . 'Used memory: ~' . round((memory_get_peak_usage() / 1024 / 1024), 2) . 'MB';