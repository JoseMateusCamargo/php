<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="225">

# Search Algorithms

Em ciência da computação, um algoritmo de pesquisa é um algoritmo (normalmente envolvendo uma infinidade de outros
algoritmos mais específicos) que resolve um problema de pesquisa. Os algoritmos de busca funcionam para recuperar
informações armazenadas dentro de alguma estrutura de dados, ou calculadas no espaço de busca de um domínio de problema,
com valores discretos ou contínuos. Em termos gerais é um algoritmo que toma um problema como entrada e retorna a
solução para o problema, geralmente após resolver um número possível de soluções.

----

#### Let's Go Code! Some types of search algorithms

[Dijkstra's Algorithm.](https://github.com/JoseMateusCamargo/php/blob/main/search-algorithm/Dijkstra.php)

O algoritmo de Dijkstra, concebido pelo cientista da computação holandês Edsger Dijkstra em 1956 e publicado em 1959,
soluciona o problema do caminho mais curto num grafo dirigido ou não dirigido com arestas de peso não negativo, em tempo
computacional `O( E+ V log V)` onde V é o número de vértices e E é o número de arestas. O algoritmo que serve para
resolver o mesmo problema em um grafo com pesos negativos é o algoritmo de Bellman-Ford, que possui maior tempo de
execução que o Dijkstra.

* Time Complexity:
    * Worst Case: `O( E+ V log V)`

![Alt text](img/Dijkstra.gif?raw=true "Dijkstra")

---

[Kruskal's Algorithm.](https://github.com/JoseMateusCamargo/php/blob/main/search-algorithm/Kruskals.php)

Outro algoritmo popular para encontrar uma árvore de abrangência mínima é o algoritmo de Kruskal. É semelhante ao de
algoritmo Prim e usa uma abordagem gananciosa para encontrar a solução.

* Time Complexity:
    * `O(E log V)`

![Alt text](img/Kruskal.gif?raw=true "Kruskal")

---

[Prim's Algorithm.](https://github.com/JoseMateusCamargo/php/blob/main/search-algorithm/Prim.php)

O algoritmo de Prim para encontrar a árvore geradora mínima se baseia em uma abordagem gananciosa. Uma abordagem
gananciosa é definido como um paradigma de algoritmo onde tentamos encontrar a solução ótima global, considerando o
solução ótima local em cada estágio.

* Time Complexity:
    * `O(V²)`

![Alt text](img/Prim.gif?raw=true "Prim")