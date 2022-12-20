<?php
// varibaili a cui assegno i dati di input

$badword = $_GET["badword"];
$message = $_GET["message"];

var_dump($_GET);
// visualizzo i dati 
echo "PAROLA DA CENSURARE:" . $badword . "<br><br>";
echo "MESSAGGIO:" . $message . "<br><br>";

echo strlen($message);

// funzione che sostituisce la parola "inserita" con il valore desiderato
// valore1 : parola da sotituire
// valore2: parola che sostituisce l'originale
// //valore3: punto in cui cercare e sotituire parola ricercata 

echo str_replace("$badword", "xxxx", $message);

?>