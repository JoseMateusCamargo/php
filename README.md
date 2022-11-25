<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="130">

# PHP Snippets

<p>
  Material com exemplos PHP.<br/>
</p>

- 🚀 [Manual (How to use)](./how-to-use/README.md)
    - Generators, Coroutines, foreach, HEREDOC, NOWDOC, Lambda, Closure, func_get_arg, sanitize...
- [Trabalhando com Arrays](./arrays-manipulating/README.md)
    - array_filter, array_reduce, array_map, agrupamentos, array_multisort...
- [Manipulando arquivos CSV](./csv-manipulating/README.md)
- Projetos
    - [Construindo um <b>speaker</b> - converter texto em fala.](./projects/speaker/speaker.php)
    - [Lendo arquivos `.env`.](./projects/reading-env/DotEnv.php)
- Scripts
    - [Como chamar o arquivo <b>Python</b> de dentro do PHP?](https://github.com/JoseMateusCamargo/php/tree/main/scripts/run_python)
    - [Obter endereço IP de geolocalização..](https://github.com/JoseMateusCamargo/php/blob/main/scripts/get_geolocation.php)
    - [<b>HMAC</b>, criptografar mensagem por hash usando uma chave privada conhecida apenas por você e pela API.](https://github.com/JoseMateusCamargo/php/blob/main/scripts/hmac-verification.php)
- 🚀 [Algoritmos de busca (_**Search algorithm**_)](./search-algorithm/README.md)
    - Dijkstra, Kruskal, Prim...
- 🚀 [Algoritmos de ordenação (**_Sorting algorithm_**)](./sorting-algorithm/README.md)
    - Quicksort, Bubble sort, Insertion sort, Selection sort...
- [Dicas e truques](./tips-and-tricks/README.md)
    - Valores de argumento padrão em parâmetros, Declaração tipo Scalar `strict_types`...
- Métodos mágicos (_**Magic methods**_)

---

### Métodos mágicos (Magic methods)

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