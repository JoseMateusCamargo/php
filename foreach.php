<?php
# O construtor foreach fornece uma maneira fácil de iterar sobre arrays.
# ref: https://www.php.net/manual/en/control-structures.foreach.php

$list = ["aaaa", "bbbb", "cccc"];

# foreach(<array> as <key> => <value>)
foreach ($list as $key => $value) {
    echo "$key: $value \n";
}

# foreach(<array> as <row>)
foreach ($list as $row) {
    echo "$row\n";
}