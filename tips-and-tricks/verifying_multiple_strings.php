<?php
$item = "candy";

if (in_array($item, ["candy", "toy"])) {
    echo true;
}

echo false;

# Or
echo in_array($item, ["candy", "toy"]);