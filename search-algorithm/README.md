## Search algorithm

Em ciência da computação, um algoritmo de busca, em termos gerais é um algoritmo que toma um problema como entrada e
retorna a solução para o problema, geralmente após resolver um número possível de soluções.

### Dijkstra's Algorithm

> O algoritmo de Dijkstra, concebido pelo cientista da computação holandês Edsger Dijkstra em 1956 e publicado em 1959,
> soluciona o problema do caminho mais curto num grafo dirigido ou não dirigido com arestas de peso não negativo,
> em tempo computacional `O( E+ V log V)` onde V é o número de vértices e E é o número de arestas. O algoritmo que serve
> para resolver o mesmo problema em um grafo com pesos negativos é o algoritmo de Bellman-Ford, que possui maior tempo
> de execução que o Dijkstra.
> [Dijkstra in PHP](https://github.com/JoseMateusCamargo/php/blob/main/search-algorithm/Dijkstra.php)

* Time Complexity:
    * Worst Case: `O( E+ V log V)`

![Alt text](img/Dijkstra.gif?raw=true "Dijkstra")

---

### Kruskal's Algorithm

> Outro algoritmo popular para encontrar uma árvore de abrangência mínima é o algoritmo de Kruskal.
> É semelhante ao de algoritmo Prim e usa uma abordagem gananciosa para encontrar a solução.
> [Kruskal in PHP](https://github.com/JoseMateusCamargo/php/blob/main/search-algorithm/Kruskals.php)

* Time Complexity:
    * `O(E log V)`

![Alt text](img/kruskal.gif?raw=true "Kruskal")