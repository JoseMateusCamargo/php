<?php
# Null coalescing operator
# ref: https://www.php.net/manual/en/migration70.new-features.php


# Retorna seu primeiro operando se existe e não é null; caso contrário, ele retorna seu segundo operando.
$ddd = $_GET['ddd'] ?? "00";
$fone = $_GET['fone'] ?? $_GET['mobile'] ?? "0000-0000";

echo "Fone: ($ddd) $fone";

/*
http://localhost:83/snippet/null_coalescing_operator.php?ddd=47
http://localhost:83/snippet/null_coalescing_operator.php?ddd=47&fone=1234-5678
http://localhost:83/snippet/null_coalescing_operator.php?ddd=47&mobile=1234-5678
*/