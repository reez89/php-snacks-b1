<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
var_dump($matches);
$matches = [
    'Casa' => [
        'Squadra' => 'Olimpia MIlano',
        'Punteggio' => 55
    ],
    'Ospiti' => [
        'Squadra' => 'Cantu',
        'Punteggio' => 60
    ]
];
echo  $matches['Casa']['Squadra'] . " - " . $matches['Ospiti']['Squadra'] . " / " .  $matches['Casa']['Punteggio'] . " - " . $matches['Ospiti']['Punteggio'];
?>