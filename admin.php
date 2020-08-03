<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--BOOTSTRAP CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    

    <!-- CSS -->
    <link rel="stylesheet" href="styles/style.css" />

    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <!--FONT AWESOME -->
    <link rel="stylesheet" href="src/fontawesome-free-5.13.1-web/css/all.min.css">


</head>

<body>

    <?php

    include('config.php');

    $user = $_POST['user'];
    $pass = $_POST['pass'];


    if (isset($_POST['send'])) {


        $sql_users = "SELECT * FROM admin WHERE username=? and password=?";

        $result = $connection->prepare($sql_users);

        $result->bindParam(1, $user); // CORRESPONDÈNCIA ENTRE EL PARÀMETRE I LA VARIABLE
        $result->bindParam(2, $pass); // CORRESPONDÈNCIA ENTRE EL PARÀMETRE I LA VARIABLE

        $result->execute();
        $count = $result->rowCount();


        if ($count != 0) { // IF USERNAME AND EMAIL EXIST

            session_start(); // S´INICIA LA SESSIÓ EN LA QUAL USER ÉS IGUAL A $POST['USER']

            $_SESSION["user"] = $_POST["user"];

            echo "<div class='alert alert-success' role='alert'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  <h3 id='message'>Welcome back administrator!</h3>
                  </div>
                  <footer><i class='fas fa-copyright'></i> 2020 Sergi Sánchez </footer>";

            header("refresh:5;url=adminOptions.php");

        } else { // ELSE, USER DOESN´T EXIST OR INCORRECT DATA

            echo "<div class='alert alert-danger' role='alert'>
                 <button type='button' class='close' data-dismiss='alert'>&times;</button>
                 <h3 id='message'>Username or password incorrect !</h3>
                 </div>
                 <footer><i class='fas fa-copyright'></i> 2020 Sergi Sánchez </footer>";

            header("refresh:5;url=admin.html");
        }
    }

    ?>

    <!--BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>