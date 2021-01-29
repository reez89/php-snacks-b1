<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = (int)$_GET[('age')];
if (
    strpos($email, '@') !== false
    && strpos($email, '.') !== false
    && is_int($age)
    && strlen($name) > 3
) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}
?>