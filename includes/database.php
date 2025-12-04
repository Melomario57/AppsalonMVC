<?php

$db = mysqli_connect('localhost', 'cloudy-gap-vat', 'V7A9vf5+Uw2M5nUn)-', 'cloudy-gap-vat');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
