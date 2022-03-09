<?php 

    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempus.";

    $length = strlen($paragraph);

    echo "Il paragrafo è: ";
    echo "<br>";
    echo $paragraph;
    echo "<br>";
    echo "La lunghezza è: ";
    echo "<br>";
    echo $length;
    echo "<br>";

    $censored = str_replace($_GET['badword'], '...', $paragraph);

    echo "Il paragrafo censurato è: ";
    echo "<br>";
    echo $censored;

?>