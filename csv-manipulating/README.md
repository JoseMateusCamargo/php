<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="130">

# PHP

## Manipulando arquivos CSV

#### _Let's Code!_

- Salvando **array** em arquivo .csv.
- Salvando **object** em arquivo .csv.
- Gerar aquivo .csv de um array e realizar **download**, `File/Download`.

---

**Salvando array em arquivo .csv**

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

**Salvando object em arquivo .csv**

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

**Gerar aquivo .csv de um array e realizar download, `File/Download`**

```PHP
<?php
// Generate CSV File/Download from Array

$results = [
    0 => ["name" => "name one", "email" => "one@br", "gender" => "Male"],
    1 => ["name" => "name second", "email" => "second@br", "gender" => "Female"],
    2 => ["name" => "name third", "email" => "third@br", "gender" => "Female"],
];

$file = 'data.csv';

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=$file");

$output = fopen("php://output", 'wb');
$header = array_keys($results[0]);

fputcsv($output, $header);

foreach ($results as $row) {
    fputcsv($output, $row);
}

fclose($output);
```