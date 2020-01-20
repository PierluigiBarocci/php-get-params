<?php

$hello = 'Hello World!';

// creo una variabile che contenga testo
$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero architecto accusamus facere culpa excepturi, ratione perspiciatis minus illum quia ipsam natus ad mollitia, asperiores aliquid quasi. Est eius ea quisquam quod, illum tempore sint? Magni dolores, enim atque, itaque ullam, sunt officia eligendi ad tempora magnam, laborum similique! Totam commodi ea vitae, rem suscipit fugit nesciunt voluptatibus mollitia quod fugiat.';

// creo la variabile per il GET

// una volta inserito il form, basta dare all'input che desideriamo in get un name=""
// e quel nome lo diamo in pasto a $_GET, nel nostro caso censored,
// naturalmente il method del form va impostato in GET e la action nel nostro caso è index.php perchè stiamo lavorando
// esclusivamente su questa pagina
$censured = $_GET['censored'];

// devo usare in sincronia str_replace e strpos

// quella 'i' in stripos sta per 'Insensitive', quello che ci serviva
$find = stripos($lorem, $censured);

// se strpos mi ritorna una posizione, ha trovato una corrispondenza, quindi risulta vera
if ($find !== false) {
    // stesso discorso per str_ireplace --> così diventa case-insensitive
    $lorem = str_ireplace($censured, "<span class='red'>***</span>", $lorem);
}
/*
Creare una variabile che contiene del testo. Leggere dal parametro in GET
una badword da cercare all'interno del testo e censurarla,
ossia visualizzare a schermo un paragrafo con all'interno il testo
in cui le occorrenze della badword sono sostituite da tre "*".
*/
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Censuratore</title>
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Censuratore</h1>
            </div>
        </header>

        <main>
            <div class="container">
                <form class="" action="index.php" method="get">
                    <input id="user_input" type="text" name="censored" value="" placeholder="Inserisci la parola da censurare...">
                    <input id="button" type="submit">
                </form>
                <p><?php echo $lorem ?></p>
            </div>
        </main>
    </body>
</html>
