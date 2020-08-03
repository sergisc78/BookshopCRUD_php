<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshop</title>

    <!--BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

   


    <!-- CSS -->
    <link rel="stylesheet" href="styles/style.css" />

    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital@1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet" />

    <!--FONT AWESOME -->
    <link rel="stylesheet" href="src/fontawesome-free-5.13.1-web/css/all.min.css" />
</head>

<body>

    <?php

    session_start();

      if (!isset($_SESSION['user'])) { // SINO HA FET LOGIN NO ES POT ENTRAR A L´APLICACIÓ

        header("location:login.html");
    }

    ?>

    <div class="card">
        <div class="card-body">
            <h1>Bookshop</h1>
        </div>
    </div>


    <div class="dropdown">
        <button type="button" class="btn btn-info dropdown-toggle" id="sessio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo " " . $_SESSION["user"]; ?><span class="caret"></span>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="index.html">Exit</a>

        </div>

        <section>
            <h1 id="opcions">What do you want to do?</h1>
            <div class="opcions">
                <div class="row">
                    <div class="mx-auto">
                        <a href="insertar.html" type="button" id="botoOpcions" class="btn btn-link btn-lg">Consult users</a>
                        <a href="consulta.html" type="button" id="botoOpcions" class="btn btn-link btn-lg">Consult reviews</a>
                    </div>
                </div>
            </div>

        </section>

        <footer><i class="fas fa-copyright"></i> 2020 Sergi Sánchez </footer>




        <!--BOOTSTRAP JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>