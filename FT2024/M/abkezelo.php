<?php

class abkezelo
{


    /* public static function termekekKiolvasasa():array{
        try{
        $con = new mysqli("127.0.0.1", "root", "", "FT2024");
        $stmt = $con->prepare("SELECT*FROM `Termekek`");
        $stmt->execute();
        $stmt->bind_result($Szeriaszam, $Gyarto, $Tipus, $LeadasDatuma, $Statusz, $UtolsoStatuszvaltozas, $KapcsolattartoId );

        $tomb=[];
        while ($stmt->fetch()) {
            $tomb[]= new Termek(
                $Szeriaszam, //szoveg
                $Gyarto, //szoveg
                $Tipus, //szoveg
                $LeadasDatuma, //datum
                $Statusz, //enum vagy lehet szöveg? vagy szám és úgy kiválasz... switch ha 0-piros, ha 1 bla bla
                $UtolsoStatuszvaltozas, //date
                $KapcsolattartoId //szam
            );
            
        }

        $con ->close();
        $stmt ->close();

        return $tomb;
    } */


    public static function termekekKiolvasasa(): array {
        try {
            $con = new mysqli("127.0.0.1", "root", "", "FT2024");
            $stmt = $con->prepare("SELECT * FROM `Termekek`");
            $stmt->execute();
            $result = $stmt->get_result();

            $tomb = [];
            while ($row = $result->fetch_assoc()) {
                $tomb[] = new Termek(
                    $row['Szeriaszam'], 
                    $row['Gyarto'], 
                    $row['Tipus'], 
                    $row['LeadasDatuma'], 
                    $row['Statusz'], 
                    $row['UtolsoStatuszvaltozas'], 
                    $row['KapcsolattartoId']
                );
            }

            $con->close();
            $stmt->close();

            return $tomb;
        } catch (mysqli_sql_exception $e) {
            return [null];
        }
    }

    public static function termekLeadas(Termek $termek): void
    {
        try {
            $con = new mysqli("127.0.0.1", "root", "", "FT2024");
            $stmt = $con->prepare("INSERT INTO `Termekek` VALUES (?,?,?,?,?,?,?) ");

            $Szeriaszam = $termek->getSzeriaszam();
            $Gyarto = $termek->getGyarto();
            $Tipus = $termek->getTipus();
            $LeadasDatuma = $termek->getLeadasDatuma();
            $Statusz = $termek->getStatusz();
            $UtolsoStatuszvaltozas = $termek->getUtolsoStatuszvaltozas();
            $KapcsolattartoId = $termek->getKapcsolattartoId();

            $stmt->bind_param("sssssiis", $Szeriaszam, $Gyarto, $Tipus, $LeadasDatuma, $Statusz, $UtolsoStatuszvaltozas, $KapcsolattartoId);
            $stmt->execute();

            $stmt->close();
            $con->close();
        } catch (mysqli_sql_exception $e) {
            return;
        }
    }
}