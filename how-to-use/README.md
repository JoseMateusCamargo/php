<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="130">

# PHP

## Manual (How to use)

#### _Let's Code!_

- **Generators.**
- **Coroutines.**
- `foreach`, uma maneira fácil de iterar sobre arrays.
- `range`, criar um array contendo um range de elementos.
- **Spaceship operators**, o operador `<=>` é utilizado para fazer comparações combinadas (_validações_).
- Como usar sintaxe `HEREDOC` e `NOWDOC`.
- Operador **null coalescing** `??`.
- [Limpar informações em cache sobre arquivos `clearstatcache`.](./clearstatcache.php)
- [`Lambda` e `Closure`, funções anonimas.](./lambda_closure.php)
- [`func_get_arg`, como retornar um item da lista de argumentos.](./func_get_arg.php)
- [`sanitize`, usando filtros php nativos.](./sanitize.php)

---

**Generators**

Numa explicação acessível, **Generators** são uma forma prática de se implementar **Iterators**. Para criar uma função
Generator, basta que ela possua a palavra reservada `yield`. O operador `yield` é uma espécie de `return`, só que com
algumas particularidades. E uma função desse tipo retorna um objeto da classe `Generator`, que é uma classe especial e
específica para esse contexto, não sendo possível utilizá-la de outra forma. Esse objeto retornado pode ser iterado.

* [Trabalhando com Generator de uma forma simples.](../generators/generators_example.php)
* [Trabalhando com Generator exemplo de uso em **memória**.](../generators/generators_example_2.php)
* [Conhecendo mais sobre Generator, criando uma <b>class</b>.](../generators/Generators.php)

---

**Coroutines**

**Coroutines** são funções interrompíveis. Em PHP eles podem ser implementados usando **Generators**.

Enquanto os _generators_ geralmente são usados para implementar _iterators_ simples e elementos de rendimento usando a
palavra chave `yield`, usadas como pontos de interrupção. Quando uma coroutine `yield` gera um valor, a execução da
_coroutine_ é temporariamente interrompida, permitindo que outras tarefas sejam executadas, como manipuladores de E/S,
temporizadores ou outras _coroutines_.

* [<b>Coroutines</b>, multitarefa cooperativa usando corrotinas.](../coroutine)

---

**[`range`](https://www.php.net/manual/en/function.range.php), criar um array contendo um range de elementos**

```PHP
$x = range(11, 1, 4);
$y = range("a", "z", 2);

print_r($y);
print_r($x);

$numbers = range(5, 10);

// use & (&$value) like pointer (pass reference, not a copy the value)
foreach ($numbers as $key => &$value) {
    $value *= 10;
    echo $value . "\n";
}

print_r($numbers);
```

**`foreach`, uma maneira fácil de iterar sobre arrays**

```PHP
$list = ["aaaa", "bbbb", "cccc"];

# foreach(<array> as <key> => <value>)
foreach ($list as $key => $value) {
    echo "$key: $value \n";
}

# foreach(<array> as <row>)
foreach ($list as $row) {
    echo "$row\n";
}
```

**[Spaceship operators](https://www.php.net/manual/en/language.operators.comparison.php), o operador `<=>` é utilizado
para fazer comparações combinadas (_validações_)**

```PHP 
// echo 1 <=> 1; // 0 Retorna 0 se os valores de ambos os lados são iguais
// echo 3 <=> 4; // -1 Retorna 1 se o valor à esquerda é maior.
// echo 4 <=> 3; // 1 Retorna -1 se o valor à direita é maior.

foreach (range(0, 9) as $row) {
    $x = random_int(0, 9);
    $rel = $row <=> $x;

    echo "<pre>" . "v=$row <=> x=$x is $rel \n" . "</pre>";
}
```

**Como usar sintaxe `HEREDOC` e `NOWDOC`**

```PHP
# Documentation: https://www.php.net/manual/pt_BR/language.types.string.php#language.types.string.syntax.heredoc
# HEREDOC == ""
$x = 50;
$ref = "https://www.php.net/manual/pt_BR/language.types.string.php#language.types.string.syntax.heredoc";
$heredoc = <<<TEST
<div>O valor da variavel x é $x</div>
<div>Reference: $ref</div>
TEST;
echo $heredoc;

echo PHP_EOL;
echo PHP_EOL;

# ref: https://www.php.net/manual/pt_BR/language.types.string.php#language.types.string.syntax.nowdoc
# NOWDOC == ''
$nowdoc = <<<'EOT'
class NowDoc{
    function __constructor ()
    ref: https://www.php.net/manual/pt_BR/language.types.string.php#language.types.string.syntax.nowdoc
}
EOT;
echo $nowdoc;
```

**Operador [null coalescing](https://www.php.net/manual/en/migration70.new-features.php) `??`**

Retorna seu primeiro operando se existe e não é null, caso contrário, ele retorna seu segundo operando.

```PHP 
$ddd = $_GET['ddd'] ?? "00";
$fone = $_GET['fone'] ?? $_GET['mobile'] ?? "0000-0000";

echo "Fone: ($ddd) $fone";

// Para teste
// http://localhost:83/snippet/null_coalescing_operator.php?ddd=47
// http://localhost:83/snippet/null_coalescing_operator.php?ddd=47&fone=1234-5678
// http://localhost:83/snippet/null_coalescing_operator.php?ddd=47&mobile=1234-5678
```