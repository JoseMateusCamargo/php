<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="130">

# PHP

## Trabalhando com Arrays

#### _Let's Code!_

- `array_filter`, filtrar elementos de um array utilizando uma função `callback`.
- `array_reduce`, reduzindo um array para um único valor através de um processo iterativo via função `callback`.
- `array_map`, aplica uma função em todos os elementos do array.
- Função simples para subtrair valor de duas matrizes com a mesma chave.
- [Função que agrupa um array de arrays associativos por alguma chave.](https://github.com/JoseMateusCamargo/php/blob/main/arrays-manipulating/group_array_associative_by_key.php)
- [Função que agrupa dados de `subarray` usando valores de várias colunas e soma outros valores.](https://github.com/JoseMateusCamargo/php/blob/main/arrays-manipulating/group_array_multiple_column.php)
- [`array_multisort`, classifique arrays múltiplos ou multidimensionais.](https://github.com/JoseMateusCamargo/php/blob/main/array-manipulating/array_multisort.php)

---

**[`array_filter`](https://www.php.net/manual/pt_BR/function.array-filter.php), filtrar elementos de um array utilizando
uma função `callback`**

```PHP
$list = [1, 2, 3, 4, 5];

$f = static function ($x) {
    return $x < 3;
};

$list_proc = array_filter($list, $f);

print_r($list_proc);
```

**[`array_reduce`](https://www.php.net/manual/pt_BR/function.array-reduce.php), reduzindo um array para um único valor
através de um processo iterativo via função `callback`**

```PHP
$prod = [
    ['id' => 1, 'name' => 'name 01', 'value' => 129.99],
    ['id' => 2, 'name' => 'name 02', 'value' => 122.90],
    ['id' => 3, 'name' => 'name 03', 'value' => 242.20]
];

$total = array_reduce($prod, static function ($value, $prod) {
    $value += $prod['value'];
    return $value;
}, 0); // Inicial 0

echo $total;
```

**Função simples para subtrair valor de duas matrizes com a mesma chave**

```PHP
function sub_array($arr1, $arr2)
{
    foreach ($arr2 as $key => $value) {
        if (array_key_exists($key, $arr1)) {
            $arr1[$key] -= $value;
        } else {
            $arr1[$key] = $value;
        }
    }
    return $arr1;
}

$a1 = ['one' => 3, 'second' => 2, 'third' => 1, 'fourth' => 3];
$a2 = ['one' => 2, 'second' => 2, 'fifth' => 1];

print_r(sub_array($a1, $a2));
```

**[`array_map`](https://www.php.net/manual/pt_BR/function.array-map.php), aplica uma função em todos os elementos do
array**

```PHP
$list = [1, 2, 3, 4, 5];

$cube = static function ($x) {
    return $x * $x * $x;
};

$result = array_map($cube, $list);
print_r($result);


// using map to make new array
$prods = [
    ['id' => 1, 'name' => 'name 01', 'value' => 129.99],
    ['id' => 2, 'name' => 'name 02', 'value' => 122.90],
    ['id' => 3, 'name' => 'name 03', 'value' => 242.20]
];

$prod_map = array_map(static function ($prod) {
    if ($prod['value'] > 150) {
        $prod['value'] -= $prod['value'] * 0.5;
    }

    return $prod;
}, $prods);

var_dump($prod_map);
```