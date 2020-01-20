<?php

$hello = 'Hello World!';

// creo una variabile che contenga testo
$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero architecto accusamus facere culpa excepturi, ratione perspiciatis minus illum quia ipsam natus ad mollitia, asperiores aliquid quasi. Est eius ea quisquam quod, illum tempore sint? Magni dolores, enim atque, itaque ullam, sunt officia eligendi ad tempora magnam, laborum similique! Totam commodi ea vitae, rem suscipit fugit nesciunt voluptatibus mollitia quod fugiat.';

// creo la variabile per il GET
$censured = $_GET['badword'];

// devo usare in sincronia str_replace e strpos

// quella 'i' in stripos sta per 'Insensitive', quello che ci serviva
$find = stripos($lorem, $censured);

// se strpos mi ritorna una posizione, ha trovato una corrispondenza, quindi risulta vera
if ($find !== false) {
    // stesso discorso per str_ireplace --> così diventa case-insensitive
    $lorem = str_ireplace($censured, '***', $lorem);
    echo $lorem;
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
