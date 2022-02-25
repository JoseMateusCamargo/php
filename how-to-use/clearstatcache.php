<?php
/*
 * Documentation: https://www.php.net/manual/pt_BR/function.clearstatcache.php
 * clearstatcache — Limpa as informações em cache sobre arquivos
 *
 * Quando você chama stat(), lstat() ou qualquer uma das funções afetadas (listadas abaixo), o PHP mantém em cache as
 * informações que essas funções retornam para melhoria de performance. Entretanto, em certos casos você pode precisar
 * limpar as informações cacheadas. Por exemplo, se um mesmo arquivo é verificado várias vezes em um único script,
 * e esse arquivo corre o risco de ser apagado ou modificado durante a operação do script, você precisa limpar os dados
 * do cache. Nesses casos, você pode utilizar a função clearstatcache() para limpar todas as informações que
 * o PHP mantém sobre um arquivo.
*/

#-------------------- [Exemplo de uso]
# Check filesize
echo filesize("clearstatcache.txt");
echo "<br />";

$file = fopen("clearstatcache.txt", 'ab+');
# Truncate file
ftruncate($file, 100);
fclose($file);

# Clear cache and check filesize again
clearstatcache();
echo filesize("clearstatcache.txt");

/*
 * Output
 * First echo: 792
 * Second echo: 100
 */