<?php

$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
$lado3 = $_POST['lado3'];

if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
    
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        $tipo = "Equilátero";
        $imagem = "equilatero.png"; 
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        $tipo = "Isósceles";
        $imagem = "isosceles.jpg"; 
    } else {
        $tipo = "Escaleno";
        $imagem = "escaleno.png";
    }

    echo "O triângulo é $tipo.";
    echo "<img src='$imagem' alt='$tipo' class='triangle-image'>";
} else {
    echo "Os valores informados não formam um triângulo.";
}

?>
