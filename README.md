<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="130">

# PHP Snippets

<p>
  Material com exemplos PHP.<br/>
</p>

- [Manual (How to use)](./how-to-use/README.md)
    - Generators, Coroutines, foreach, HEREDOC, NOWDOC, Lambda, Closure, func_get_arg, sanitize...
- [Dicas e truques](./tips-and-tricks/TIPS.md)
    - Valores de argumento padrão em parâmetros, Declaração tipo `Scalar`...
- Algoritmos de ordenação (Sorting algorithm)
- Algoritmos de busca (Search algorithm)
- Métodos magicos (Magic methods)
- Projetos
    - [Construindo um <b>speaker</b> - convertendo texto em fala.](https://github.com/JoseMateusCamargo/php/blob/main/projects/speaker/speaker.php)
- Scripts
    - [Lendo arquivos `.env`.](https://github.com/JoseMateusCamargo/php/blob/main/projects/reading-env/DotEnv.php)
    - [<b>HMAC</b>, encrypt your message by hash using a private key known only to you and the API.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/hmac-verification.php)
    - [How to call <b>Python</b> file from within PHP?](https://github.com/JoseMateusCamargo/php/tree/main/scripts/run_python)
    - [Get Geolocation IP Address.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/get_geolocation.php)
    - [Como gerar aquivo CSV de um array para download, `File/Download`.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/csv_array.php)
- [Trabalhando com Arrays ](./arrays-manipulating/README.md)
    - array_filter, array_reduce, array_map, agrupamentos, array_multisort...
- [Manipulando arquivos CSV](./csv-manipulating/README.md)

---

### Algoritmos de ordenação (Sorting algorithm)

... Algoritmo de ordenação em ciência da computação é um algoritmo, de manipulação de dados, que coloca os elementos
de uma dada sequência em uma certa ordem -- em outras palavras, efetua sua ordenação completa ou parcial.

* [Types of Sorting Algorithms: <b>Quick Sort · Bubble Sort · Insertion Sort · Selection</b>.](https://github.com/JoseMateusCamargo/php/tree/main/sorting-algorithm#readme)

----

### [Algoritmos de busca (Search algorithm)](https://github.com/JoseMateusCamargo/php/blob/main/search-algorithm/README.md)

... Em termos gerais é um algoritmo que toma um problema como entrada e retorna a solução para o problema,
geralmente após resolver um número possível de soluções.

----

### Métodos magicos (Magic methods)

Métodos mágicos são métodos especiais que substituem a ação padrão do PHP quando certas ações são executadas
em um objeto.

- Método __invoke()

**[__invoke](https://www.php.net/manual/pt_BR/language.oop5.magic.php#object.invoke)**

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

### Direitos de uso (Use rights)

<p>
  Você tem todo o direito de usar esse material para seu próprio aprendizado.<br/>
  You can use this material for your own learning.
</p>