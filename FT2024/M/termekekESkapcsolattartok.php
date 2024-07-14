<?php
class Kapcsolattarto {
    private $id;
    private $nev;
    private $telefon;
    private $email;

    public function __construct($nev, $telefon, $email) {
        $this->nev = $nev;
        $this->telefon = $telefon;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function getNev() {
        return $this->nev;
    }

    public function getTelefon() {
        return $this->telefon;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNev($nev) {
        $this->nev = $nev;
    }

    public function setTelefon($telefon) {
        $this->telefon = $telefon;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}

class Termek {
    private $Szeriaszam;
    private $Gyarto;
    private $Tipus;
    private $LeadasDatuma;
    private $Statusz;
    private $UtolsoStatuszvaltozas;
    private $KapcsolattartoId;

    public function __construct($Szeriaszam, $Gyarto, $Tipus, $LeadasDatuma, $Statusz, $UtolsoStatuszvaltozas, $KapcsolattartoId) {
        $this->Szeriaszam = $Szeriaszam;
        $this->Gyarto = $Gyarto;
        $this->Tipus = $Tipus;
        $this->LeadasDatuma = $LeadasDatuma;
        $this->Statusz = $Statusz;
        $this->UtolsoStatuszvaltozas = $UtolsoStatuszvaltozas;
        $this->KapcsolattartoId = $KapcsolattartoId;
    }

    public function getSzeriaszam() {
        return $this->Szeriaszam;
    }

    public function getGyarto() {
        return $this->Gyarto;
    }

    public function getTipus() {
        return $this->Tipus;
    }

    public function getLeadasDatuma() {
        return $this->LeadasDatuma;
    }

    public function getStatusz() {
        return $this->Statusz;
    }

    public function getUtolsoStatuszvaltozas() {
        return $this->UtolsoStatuszvaltozas;
    }

    public function getKapcsolattartoId() {
        return $this->KapcsolattartoId;
    }

    public function setSzeriaszam($Szeriaszam) {
        $this->Szeriaszam = $Szeriaszam;
    }

    public function setGyarto($Gyarto) {
        $this->Gyarto = $Gyarto;
    }

    public function setTipus($Tipus) {
        $this->Tipus = $Tipus;
    }

    public function setLeadasDatuma($LeadasDatuma) {
        $this->LeadasDatuma = $LeadasDatuma;
    }

    public function setStatusz($Statusz) {
        $this->Statusz = $Statusz;
    }

    public function setUtolsoStatuszvaltozas($UtolsoStatuszvaltozas) {
        $this->UtolsoStatuszvaltozas = $UtolsoStatuszvaltozas;
    }

    public function setKapcsolattartoId($KapcsolattartoId) {
        $this->KapcsolattartoId = $KapcsolattartoId;
    }
}