<?php

/* 
Creare una variabile con un paragrafo di testo a vostra scelta.

Stampare a schermo il paragrafo e la sua lunghezza.

Una parola da censurare viene passata dall'utente tramite parametro GET.

Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$name = "Andrea";
//creo la variabile
$variabile = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi sed ex esse delectus dicta quas nisi, doloribus velit neque maxime autem. Saepe esse ipsum, repellendus voluptates dolore consequuntur neque ullam.';

//estrapolo la lunghezza
$variabileLenght = strlen($variabile);

//echo '<p>' . $variabile . '<p/>';
//echo '<p>' . $variabileLenght . '<p>';

//presa la parola da censurare
$parolaDaCensurare = $_GET['badword'];

//sostituita la parola selezionata
$variabileCensurata = str_replace($parolaDaCensurare, '***', $variabile)
?>

<h1>Ciao mi chiamo <?php echo $name ?></h1>
<!-- STAMPO I RISULTATI -->
<div>
    <h2>Variabile originale</h2>
    <ul>
        <li>Parola da stampare: <strong><?= $variabile ?></strong> </li>
        <li>Lunghezza della parola: <strong><?= $variabileLenght ?></strong> </li>
    </ul>
</div>

<div>
    <h2>Variabile censurata</h2>
    <ul>
        <li>Parola da stampare: <strong><?= $variabileCensurata ?></strong> </li>
        <li>Lunghezza della parola: <strong><?= strlen($variabileCensurata) ?></strong> </li>
    </ul>
</div>
