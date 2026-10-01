<?php

function animaisController(){
    echo "6. Controller recebeu a requisição.<br>";
    $animais = animaisService();
    echo "8. Controller recebeu os dados do Service.<br>";
    echo "Animais encontrados:<br>";
    foreach ($animais as $animal) {
        echo "- " . $animal . "<br>";
    }
}
