<?php
/**
Sukurkite HTML dokumenta su įvedimo forma. Forma turėtu turėti laukus: 3x tekstiniai laukai: Prekės gamintojas, prekės pavadinimas, prekės kaina, 1x radio pasirinkimas (tipas): maistas, apranga, indai. Forma turi būti nusiųsta į backend PHP failą metodu POST. Backend faile  pridėkite įrašą į sesiją ir redirektinkite vartotoją atgal į įvedimo formos HTML dokumentą.
 */
session_start();

if (!isset($_SESSION['prekes'])) $_SESSION['prekes'] = [];

$_SESSION['prekes'][] = $_POST;

//var_dump($_SESSION);

header('location: 11.html');