<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termek leadas</title>
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
                <h2>Termek leadasi lap</h2>

                <form class="my-4" method="GET">
                    <div class="form-group my-2">
                        <label class="form-label" for="Szeriaszam">Szeriaszam</label>
                        <input class="form-control" type="text" name="Szeriaszam" id="Szeriaszam">
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label" for="Gyarto">Gyarto</label>
                        <input class="form-control" type="text" name="Gyarto" id="Gyarto">
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label" for="Tipus">Tipus</label>
                        <input class="form-control" type="text" name="Tipus" id="Tipus">
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label" for="Nev">Nev</label>
                        <input class="form-control" type="text" name="Nev" id="Nev">
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label" for="Telefon">Telefon</label>
                        <input class="form-control" type="text" name="Telefon" id="Telefon">
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label" for="Email">E-mail</label>
                        <input class="form-control" type="text" name="Email" id="Email">
                    </div>

                    <button type="submit" class="btn btn-success my-2">Felvitel</button>
                </form>
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