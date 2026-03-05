<?php
    // ***protseduuriline***
    // sinu andmed
    $db_server = 'localhost';
    $db_andmebaas = 'autorent';
    $db_kasutaja = 'Simon';
    $db_salasona = 'Uy45YoeMns';

    // ühendus andmebaasiga
    $yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

    // ühenduse kontroll
    if (!$yhendus) {
        die('Ei saa ühendust andmebaasiga');
}
?>