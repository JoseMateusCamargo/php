<?php
# How to use HEREDOC and NOWDOC syntax

# ref: https://www.php.net/manual/pt_BR/language.types.string.php#language.types.string.syntax.heredoc
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