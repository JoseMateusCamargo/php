<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="225">

# PHP Snippets

<p>
  Material simples com exemplos em PHP.<br/>
  Simple material with PHP examples.
</p>

### Sorting algorithm

* [Types of Sorting Algorithms: <b>Quick Sort · Bubble Sort · Insertion Sort · Selection</b>.](https://github.com/JoseMateusCamargo/php/tree/main/sorting-algorithm#readme)

----

### Search algorithm

> ... Em termos gerais é um algoritmo que toma um problema como entrada e retorna a solução para o problema,
> geralmente após resolver um número possível de soluções.

* [Search algorithm in PHP.](https://github.com/JoseMateusCamargo/php/blob/main/search-algorithm/README.md)

----

### Magic Methods

> Métodos mágicos são métodos especiais que substituem a ação padrão do PHP quando certas ações são executadas
> em um objeto.

* [The __invoke() method.](https://github.com/JoseMateusCamargo/php/blob/main/magic-methods/invoke.php)

---

### Projetos e scripts

Alguns projetos e scritps _simples_ que podem ser uteis para idéias e quem sabe ainda usar em outros projetos.

* [Construindo um <b>speaker</b> - convertendo texto em fala no PHP.](https://github.com/JoseMateusCamargo/php/blob/main/projects/speaker/speaker.php)

---

### Manipulating Array

* [<b>array_filter</b> Filters elements of an array using a callback function.](https://github.com/JoseMateusCamargo/php/blob/main/array-manipulating/array_filter.php)
* [<b>array_map</b> Applies the callback to the elements of the given arrays.](https://github.com/JoseMateusCamargo/php/blob/main/array-manipulating/array_map.php)
* [<b>array_reduce</b> Iteratively reduce the array to a single value using a callback function.](https://github.com/JoseMateusCamargo/php/blob/main/array-manipulating/array_reduce.php)
* [<b>array_multisort</b> Sort multiple or multi-dimensional arrays.](https://github.com/JoseMateusCamargo/php/blob/main/array-manipulating/array_multisort.php)
* [Subtract value from two arrays with the same key.](https://github.com/JoseMateusCamargo/php/blob/main/arrays-manipulating/array_subtract.php)
* [Function that groups an array of associative arrays by some key.](https://github.com/JoseMateusCamargo/php/blob/main/arrays-manipulating/group_array_associative_by_key.php)
* [Function that groups subarray data using multiple column values and sum other values.](https://github.com/JoseMateusCamargo/php/blob/main/arrays-manipulating/group_array_multiple_column.php)

---

### Tips and tricks

* [Setting default argument values for function parameters.](https://github.com/JoseMateusCamargo/php/blob/main/tips-and-tricks/param_default.php)
* [<b>strict_types</b> Scalar type declarations.](https://github.com/JoseMateusCamargo/php/blob/main/tips-and-tricks/strict_types.php)

---

### How to use (manual)

#### Generators

Numa explicação acessível, _Generators_ são uma forma prática de se implementar _Iterators_. Para criar uma função
Generator, basta que ela possua a palavra reservada `yield`. O operador `yield` é uma espécie de `return`, só que com
algumas particularidades. E uma função desse tipo retorna um objeto da classe `Generator`, que é uma classe especial e
específica para esse contexto, não sendo possível utilizá-la de outra forma. Esse objeto retornado pode ser iterado

* [Trabalhando com <b>Generators</b> de uma forma simples.](https://github.com/JoseMateusCamargo/php/tree/main/generators/generators_example.php)
* [Trabalhando com <b>Generators</b> exemplo de uso (memória).](https://github.com/JoseMateusCamargo/php/tree/main/generators/generators_example_2.php)
* [conhecendo mais sobre <b>Generators</b>, criando uma (`class`).](https://github.com/JoseMateusCamargo/php/tree/main/generators)

#### Coroutines

Coroutines são funções interrompíveis. Em PHP eles podem ser implementados usando _generators_.

Enquanto os _generators_ geralmente são usados para implementar _iterators_ simples e elementos de rendimento usando a
palavra chave `yield`, usadas como pontos de interrupção. Quando uma coroutine `yield` gera um valor, a execução da
_coroutine_ é temporariamente interrompida, permitindo que outras tarefas sejam executadas, como manipuladores de E/S,
temporizadores ou outras _coroutines_.

* [<b>Coroutines</b> Cooperative multitasking using coroutines (in PHP!).](https://github.com/JoseMateusCamargo/php/tree/main/coroutine)

---

* [Limpar as informações em cache sobre arquivos <b>clearstatcache</b>.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/clearstatcache.php)
* [<b>Lambda & Closure</b> - <i>anonymous functions</i>.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/lambda_closure.php)
* [<b>func_get_arg</b> Return an item from the argument list.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/func_get_arg.php)
* [How to use <b>heredoc</b> and <b>nowdoc</b> syntax.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/heredoc_nowdoc_syntax.php)
* [Validating values with <b>spaceshift operator</b>.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/spaceshift_operator.php)
* [Null coalescing operator <b>(??)</b>.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/null_coalescing_operator.php)
* [<b>Foreach</b> An easy way to iterate over arrays.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/foreach.php)
* [Create an array of elements using <b>range()</b>.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/range.php)

----

### Manipulando arquivos CSV

* [Salvando <b>array</b> em arquivo CSV.](https://github.com/JoseMateusCamargo/php/blob/main/csv-manipulating/save_array_in_csv.php)
* [Salvando <b>object</b> em arquivo CSV.](https://github.com/JoseMateusCamargo/php/blob/main/csv-manipulating/save_object_to_csv.php)
* [Como gerar aquivo CSV de um array para download, `File/Download`.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/csv_array.php)

----

### Scripts

* [<b>HMAC</b>, encrypt your message by hash using a private key known only to you and the API.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/hmac-verification.php)
* [How to call <b>Python</b> file from within PHP?](https://github.com/JoseMateusCamargo/php/tree/main/scripts/run_python)
* [Get Geolocation IP Address.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/get_geolocation.php)
* [Como gerar aquivo CSV de um array para download, `File/Download`.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/csv_array.php)

---

### Types of filters

> Sanitize filters. [Documentation.](https://www.php.net/manual/en/filter.filters.sanitize.php)

* [Using native php filters, examples.](https://github.com/JoseMateusCamargo/php/blob/main/how-to-use/sanitize.php)

### Direitos de uso (Use rights)

<p>
  Você tem todo o direito de usar esse material para seu próprio aprendizado.<br/>
  You can use this material for your own learning.
</p>