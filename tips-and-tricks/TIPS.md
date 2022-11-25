<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="150">

# PHP

## Tips and tricks

- Definindo valores de argumento padrão para parâmetros de função.
- Declaração tipo `Scalar` (_strict_types_).

---

**Definindo valores de argumento padrão para parâmetros de função**

```PHP
function login($user = "username", $pass = "098")
{
    echo PHP_EOL;
    echo $user . PHP_EOL;
    echo $pass . PHP_EOL;
}

login();
login('name01');
login('name01', 'master');
```

**Declaração ripo `Scalar` (_strict_types_)**

Use `strict_types` para forçar apenas o uso de int e tente declarar '100' na variável como o exemplo 2

```PHP
declare(strict_types=1);

function mean(int ...$array)
{
    $total = array_sum($array) / count($array);
    echo $total;
}

mean(5, 5, 6, 100);
echo PHP_EOL;

# Example 2
mean(5, 5, 6, '100');
```