<?php

        $number = $_POST['numero'];

        if($number > 0)
        {
            echo "Valor Positivo";
        }

        else if($number < 0)

        {
            echo "Valor Negativo";
        }

        else 

        {
            echo "Igual a Zero";
        }

?>