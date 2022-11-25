<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="130">

# PHP

## Manipulando arquivos CSV

#### _Let's Code!_

- Salvando `array` em arquivo CSV.
- Salvando `object` em arquivo CSV.
- [Como gerar aquivo CSV de um array para download, `File/Download`.](./csv_array.php)

---

**Salvando `array` em arquivo CSV**

```PHP
function saveArrayCsv(array $data, string $filename)
{
    $f = fopen($filename, 'wb');
    $fields = array_keys((array)$data[0]); // Headers

    fputcsv($f, $fields, ',');

    foreach ($data as $key) {
        fputcsv($f, (array)$key, ',');
    }

    fclose($f);
}
```

**Salvando `object` em arquivo CSV**

```PHP
function saveObjectCsv(object $data, string $filename)
{
    $fp = fopen($filename, 'wb');

    foreach ($data as $fields) {
        fputcsv($fp, get_object_vars($fields));
    }

    fclose($fp);
}
```