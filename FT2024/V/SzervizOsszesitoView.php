<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szerviz osszesito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
   
<body>
<?php 
include_once("elemek/navbar.php")
?>


    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <h1>Szerviz Osszesito</h1>

<div class="container my-4">
    <div class="row">
        <div class="col-12">
     <?php
                print_r($termekek);
                ?>

                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Szeriaszam</th>
                            <th>Gyarto</th>
                            <th>Tipus</th>
                            <th>LeadasDatuma</th>
                            <th>Statusz</th>
                            <th>UtolsoStatuszvaltozas</th>
                            <th>KapcsolattartoId</th>
                        </tr>
                    </thead>

                    <tbody>
<?php
           for($i=0;$i< count($termekek); $i++){
               echo("<tr>");
               echo("<td>" . $termekek[$i]->getSzeriaszam() . "(</td>)");
               echo("<td>" . $termekek[$i]->getGyarto() . "(</td>)");
               echo("<td>" . $termekek[$i]->getTipus() . "(</td>)");
               echo("<td>" . $termekek[$i]->getLeadasDatuma() . "(</td>)");
               echo("<td>" . $termekek[$i]->getUtolsoStatuszvaltozas() . "(</td>)");
               echo("<td>" . $termekek[$i]->getKapcsolattartoId() . "(</td>)");
               echo("</td>");
           }
?>

                    </tbody>
                </table>
        </div>
    </div>
</div>


<?php 
include_once("elemek/footer.php")
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>