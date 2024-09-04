<?php

$numero = $_POST['numero'];

if ($numero % 2 != 0) {
    echo "Número ímpar";
} else {
    echo "Número par";
}

?>
