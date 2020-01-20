<?php

$hello = 'Hello World!';

// creo una variabile che contenga testo
$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero architecto accusamus facere culpa excepturi, ratione perspiciatis minus illum quia ipsam natus ad mollitia, asperiores aliquid quasi. Est eius ea quisquam quod, illum tempore sint? Magni dolores, enim atque, itaque ullam, sunt officia eligendi ad tempora magnam, laborum similique! Totam commodi ea vitae, rem suscipit fugit nesciunt voluptatibus mollitia quod fugiat.';

// rendo tutto in lowercase
$lower_lorem = strtolower($lorem);

// creo la varibile per il GET
$censured = $_GET['badword'];

// devo usare in sincronia str_replace e strpos
$find = strpos($lower_lorem, $censured);

// se strpos mi ritorna una posizione, ha trovato una corrispondenza, quindi risulta vera

if ($find !== false) {
    $lorem_censured = str_replace($censured, '***', $lower_lorem);
    echo $lorem_censured;
} else {
    echo $lorem;
}
/*
Creare una variabile che contiene del testo. Leggere dal parametro in GET
una badword da cercare all'interno del testo e censurarla,
ossia visualizzare a schermo un paragrafo con all'interno il testo
in cui le occorrenze della badword sono sostituite da tre "*".
*/
?>
<!-- <h1><?php echo $hello ?></h1> -->
