<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="130">

# PHP Snippets

<p>
  Material simples com exemplos em PHP.<br/>
  Simple material with PHP examples.
</p>

### [How to use (manual)](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/HTU.md)

- **Generators.**
- **Coroutines.**
- Utilizando `foreach`, uma maneira fácil de iterar sobre arrays.
- `range`, crie um array contendo um range de elementos.
- `Spaceship operators`, o operador` <=>` é utilizado para fazer comparações combinadas (_validações_).
- Como usar sintaxe `HEREDOC` e/ ou `NOWDOC`.
- Operador `Null coalescing`.
- [Limpar as informações em cache sobre arquivos `clearstatcache`.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/clearstatcache.php)
- [`Lambda` e `Closure`, funções anonimas.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/lambda_closure.php)
- [`func_get_arg`, como retornar um item da lista de argumentos.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/func_get_arg.php)
- [Usando filtros php nativos (`sanitize`)](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/sanitize.php)

---

### [Tips and tricks](https://github.com/JoseMateusCamargo/php/blob/main/tips-and-tricks/TIPS.md)

- Definindo valores de argumento padrão para parâmetros de função.
- Declaração ripo `Scalar`.

---

### Sorting algorithm

> ... Algoritmo de ordenação em ciência da computação é um algoritmo, de manipulação de dados, que coloca os elementos
> de uma dada sequência em uma certa ordem -- em outras palavras, efetua sua ordenação completa ou parcial.

* [Types of Sorting Algorithms: <b>Quick Sort · Bubble Sort · Insertion Sort · Selection</b>.](https://github.com/JoseMateusCamargo/php/tree/main/sorting-algorithm#readme)

----

### [Search algorithm](https://github.com/JoseMateusCamargo/php/blob/main/search-algorithm/README.md)

> ... Em termos gerais é um algoritmo que toma um problema como entrada e retorna a solução para o problema,
> geralmente após resolver um número possível de soluções.

----

### Magic Methods

Métodos mágicos são métodos especiais que substituem a ação padrão do PHP quando certas ações são executadas
em um objeto.

**Método [__invoke](https://www.php.net/manual/pt_BR/language.oop5.magic.php#object.invoke)**

O método __invoke() é chamado quando um script tenta chamar um objeto como uma função.

```PHP
class Logger
{
    public function __invoke($message)
    {
        echo strtoupper($message);
    }
}

$log = new Logger();
$log('Hello World'); // HELLO WORLD
```

---

### Projetos e scripts

Alguns projetos e scritps _simples_ que podem ser uteis para idéias e quem sabe ainda usar em outros projetos.

* [Construindo um <b>speaker</b> - convertendo texto em fala no PHP.](https://github.com/JoseMateusCamargo/php/blob/main/projects/speaker/speaker.php)

---

### [Trabalhando com Arrays ]()

- `array_filter`, filtrar elementos de um array utilizando uma função `callback`.
- `array_reduce`, reduzindo um array para um único valor através de um processo iterativo via função `callback`.
- `array_map`, aplica uma função em todos os elementos do array.
- Função simples para subtrair valor de duas matrizes com a mesma chave.
- [Função que agrupa um array de arrays associativos por alguma chave.](https://github.com/JoseMateusCamargo/php/blob/main/arrays-manipulating/group_array_associative_by_key.php)
- [Função que agrupa dados de `subarray` usando valores de várias colunas e soma outros valores.](https://github.com/JoseMateusCamargo/php/blob/main/arrays-manipulating/group_array_multiple_column.php)
- [`array_multisort`, classifique arrays múltiplos ou multidimensionais.](https://github.com/JoseMateusCamargo/php/blob/main/array-manipulating/array_multisort.php)

---

* [Limpar as informações em cache sobre arquivos <b>clearstatcache</b>.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/clearstatcache.php)
* [<b>Lambda & Closure</b> - <i>anonymous functions</i>.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/lambda_closure.php)
* [<b>func_get_arg</b> Return an item from the argument list.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/func_get_arg.php)
* [How to use <b>heredoc</b> and <b>nowdoc</b> syntax.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/heredoc_nowdoc_syntax.php)
* [Validating values with <b>spaceshift operator</b>.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/spaceshift_operator.php)
* [Null coalescing operator <b>(??)</b>.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/null_coalescing_operator.php)
* [<b>Foreach</b> An easy way to iterate over arrays.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/foreach.php)
* [Create an array of elements using <b>range()</b>.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/range.php)

---

### Manipulando arquivos CSV

- Salvando `array` em arquivo CSV.
- Salvando `object` em arquivo CSV.
- [Como gerar aquivo CSV de um array para download, `File/Download`.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/csv_array.php)

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

---

### Scripts

* [<b>HMAC</b>, encrypt your message by hash using a private key known only to you and the API.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/hmac-verification.php)
* [How to call <b>Python</b> file from within PHP?](https://github.com/JoseMateusCamargo/php/tree/main/scripts/run_python)
* [Get Geolocation IP Address.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/get_geolocation.php)
* [Como gerar aquivo CSV de um array para download, `File/Download`.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/csv_array.php)

---

### Direitos de uso (Use rights)

<p>
  Você tem todo o direito de usar esse material para seu próprio aprendizado.<br/>
  You can use this material for your own learning.
</p>