<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="130">

# PHP Snippets

<p>
  Material com exemplos PHP.<br/>
</p>

- [Manual (How to use)](./how-to-use/README.md)
    - Generators, Coroutines, foreach, HEREDOC, NOWDOC, Lambda, Closure, func_get_arg, sanitize...
- [Dicas e truques](./tips-and-tricks/README.md)
    - Valores de argumento padrão em parâmetros, Declaração tipo Scalar `strict_types`...
- [Algoritmos de ordenação (**_Sorting algorithm_**)](./sorting-algorithm/README.md)
- [Algoritmos de busca (_**Search algorithm**_)](./search-algorithm/README.md)
- Métodos magicos (_**Magic methods**_)
- Projetos
    - [Construindo um <b>speaker</b> - convertendo texto em fala.](./projects/speaker/speaker.php)
    - [Lendo arquivos `.env`.](./projects/reading-env/DotEnv.php)

- Scripts
    - [<b>HMAC</b>, encrypt your message by hash using a private key known only to you and the API.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/hmac-verification.php)
    - [How to call <b>Python</b> file from within PHP?](https://github.com/JoseMateusCamargo/php/tree/main/scripts/run_python)
    - [Get Geolocation IP Address.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/get_geolocation.php)
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

### Direitos de uso (Use rights)

<p>
  Você tem todo o direito de usar esse material para seu próprio aprendizado.<br/>
  You can use this material for your own learning.
</p>