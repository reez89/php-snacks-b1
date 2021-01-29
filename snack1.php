<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
$matches = array(
    ["Casa" => 'Olimpia Milano', "Ospiti" => 'Cantu'],
    ["Casa" => 'Codroipo', "Ospiti" => 'Real Madrid'],
    ["Casa" => 'Marsiglia', "Ospiti" => 'Barcellona'],
    ["Casa" => 'San Marino', "Ospiti" => 'Cleveland'],
    ["Casa" => 'Raptors', "Ospiti" => 'Lakers'],
    ["Casa" => 'Chicago Bulls', "Ospiti" => 'Sappada'],
);

// $pointsRandomHome = mt_rand(0, 150);
// $pointsRandomGuest = mt_rand(0, 150); // generati in questo modo ogni risultato è uguale .

$length = count($matches); // con la funzione count, riesco ad individuare il numero di elementi dinamicamente.

for ($i = 0; $i < $length; ++$i) {
    $partita = $matches[$i];
    echo  "<li>" . $partita["Casa"] . " - " . $partita["Ospiti"] . " / " . $pointsRandomHome = mt_rand(0, 100) . " - " . $pointsRandomGuest = mt_rand(0, 100) . "</li>";
}
?>

<!-- Non ho trovato un modo piu' rapido per poter andare a capo ad ogni ciclo,se non inserendo un li -->