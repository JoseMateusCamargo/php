<img src="https://i.ibb.co/M6nBBb0/mascote.png" align="right" width="130">

# Algoritmos de ordenação (Sorting algorithm)

Algoritmo de ordenação em ciência da computação é um algoritmo, de manipulação de dados, que coloca os elementos de uma
dada sequência em uma certa ordem -- em outras palavras, efetua sua ordenação completa ou parcial. As ordens mais usadas
são a numérica e a lexicográfica.

![Alt text](img/ordenacao-mais-comuns.gif?raw=true "Quicksort")

#### Let's Go Code!

---

[Quicksort's Algorithm](./QuickSort.php)

O quicksort adota a estratégia de divisão e conquista. A estratégia consiste em rearranjar as chaves de modo que as
chaves "menores" precedam as chaves "maiores". Em seguida o quicksort ordena as duas sublistas de chaves menores e
maiores recursivamente até que a lista completa se encontre ordenada.

* Time Complexity:
    * Worst Case: `O(n²)`
    * Best Case: `O(n log n)`
    * Average Case: `O(n log n)`

![Alt text](img/Quicksort.gif?raw=true "Quicksort")

---

[Bubble sort's Algorithm](./BubbleSort.php)

Este algoritmo percorre a lista de itens ordenáveis do início ao fim, verificando a ordem dos elementos dois a dois, e
trocando-os de lugar se necessário. Percorre-se a lista até que nenhum elemento tenha sido trocado de lugar na passagem
anterior.

* Time Complexity:
    * Worst Case: `O(n²)`
    * Best Case: `O(n)`
    * Average Case: `O(n²)`

![Alt text](img/BubbleSort.gif?raw=true "Quicksort")

---

[Insertion sort's Algorithm](./InsertionSort.php)

Insertion Sort, ou ordenação por inserção, é um algoritmo de ordenação que, dado uma estrutura (array, lista) constrói
uma matriz final com um elemento de cada vez, uma inserção por vez.

* Time Complexity:
    * Worst Case: `O(n²)`
    * Best Case: `O(n)`
    * Average Case: `O(n²)`

![Alt text](img/InsertionSort.gif?raw=true "Quicksort")

---

[Selection sort's Algorithm](./SelectionSort.php)

A ordenação por seleção (do inglês, selection sort) é um algoritmo de ordenação baseado em se passar sempre o menor
valor do vetor para a primeira posição (ou o maior dependendo da ordem requerida), depois o de segundo menor valor para
a segunda posição, e assim é feito sucessivamente com os `n-1` elementos restantes, até os últimos dois elementos.

* Time Complexity:
    * Worst Case: `O(n²)`
    * Best Case: `O(n²)`
    * Average Case: `O(n²)`

![ ](img/SelectionSort.gif?raw=true "Quicksort")
![ ](img/SelectionSort2.gif?raw=true "Quicksort") 