<?php

// PHP file autoloader
function autoload($class) {
    $path = "../M/";
    include $path . $class . ".php";
};

spl_autoload_register("autoload");

// View functions
function SzervizOsszesitoView() {
    $termekek = abkezelo::termekekKiolvasasa();
    return include_once("../V/SzervizOsszesitoView.php");
}

function TermekLeadasView() {
    $Szeriaszam = $_POST["Szeriaszam"];
    $Gyarto = $_POST["Gyarto"];
    $Tipus = $_POST["Tipus"];
    $LeadasDatuma = $_POST["LeadasDatuma"];
    $UtolsoStatuszvaltozas = $_POST["UtolsoStatuszvaltozas"];
    $KapcsolattartoId = $_POST["KapcsolattartoId"];
    $Statusz = $_POST["Statusz"]; // added missing variable

    $termek = new Termek($Szeriaszam, $Gyarto, $Tipus, $LeadasDatuma, $Statusz, $UtolsoStatuszvaltozas, $KapcsolattartoId);
    abkezelo::termekLeadas($termek); // call the termekLeadas function

    return include_once("../V/TermekLeadasView.php");
}

function ErrorView() {
    return include_once("../V/errorView.php");
}

// Main function
function Main() {
    if (isset($_GET["oldal"])) {
        $oldal = $_GET["oldal"];
    } else {
        $oldal = "SzervizOsszesitoView"; // default view
    }

    switch ($oldal) {
        case "SzervizOsszesitoView":
            return SzervizOsszesitoView();
        case "TermekLeadasView":
            return TermekLeadasView();
        default:
            return ErrorView();
    }
}

Main();