<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termek leadas</title>
    <style>
        body{
            background-color: <?php echo($_SESSION["bg"]) ?>;
            color: <?php echo($_SESSION["fg"]) ?>;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<bodytyle="background-color: <?php echo($_SESSION['bg']) ?>; color: <?php echo($_SESSION['fg']) ?>;">
    <form method="GET">
        <label for="bg">Hatterszin</label><br>
        <input type="color" name="bg" id="bg" value="<?php echo($_SESSION['bg']) ?>"><br><br>

        <label for="fg">Betuszin</label><br>
        <input type="color" name="fg" id="fg" value="<?php echo($_SESSION['fg']) ?>"><br><br>

        <button>Szinezes</button>
    </form>

<?php 
include_once("elemek/navbar.php")
?>

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <h2>Termek leadasi lap</h2>

                <?php
        if(array_key_exists("bg", $_GET) && array_key_exists("fg", $_GET)){
            if(isset($_GET["bg"]) && isset($_GET["fg"])){
                $_SESSION["bg"] = $_GET["bg"];
                $_SESSION["fg"] = $_GET["fg"];
            }
        }
    ?>

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
<script>
        document.getElementById("bg").addEventListener("change", Szinvaltas);
        document.getElementById("fg").addEventListener("change", Szinvaltas)

        function Szinvaltas(){
            var bg = document.getElementById("bg").value;
            var fg = document.getElementById("fg").value;
            document.getElementsByTagName("body")[0].setAttribute("style", "background-color: " + bg + "; color: " + fg + ";");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</bodytyle=>

</html>
