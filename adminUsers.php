<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshop</title>

    <!--BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="styles/style.css">

    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital@1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet" />

    <!--FONT AWESOME -->
    <link rel="stylesheet" href="src/fontawesome-free-5.13.1-web/css/all.min.css" />
</head>

<body>

    <?php

    $message = "There aren´t still registers";

    try {
        include('config.php');

        $sql_consultUsers = "SELECT * FROM users";

        $resultat = $connection->prepare($sql_consultUsers);

        $resultat->execute();

        $users = $resultat->rowCount();

        if ($users != 0) {

            echo "<table>";
            echo "<tr><th>Register</th><th>ID</th><th>Username</th><th>Email</th><th>Password</th>";
            $i = 0;

            foreach ($resultat as $resultats) {
                $i++;
                echo "<tr><td>" . $i . "</td>
                <td>" . $resultats['id'] . " </td>
                <td>" . $resultats['username'] . " </td>
                <td>" . $resultats['mail'] . " </td>
                <td>" . $resultats['password'] . "</td>
                
                <td><a href='deleteUser.php?id=$resultats[id] & username=$resultats[username] & mail=$resultats[mail] & password=$resultats[password] type='button' class='btn btn-info btn-sm'>Delete user</a></td>";
            }

            echo "<nav class='nav'>
                    <li class='nav-item'>
                     <a class='nav-link active' href='adminOptions.php' title='Back to options'>
                     <i class='fas fa-arrow-left'></i></a>
                    </li>
                  </nav>";

            $resultat->closeCursor();
        } else {
            echo "<div class='alert alert-danger' role='alert'>
                 <button type='button' class='close' data-dismiss='alert'>&times;</button>
                 <h3 id='message'> $message !</h3>
                 </div>
                 <footer><i class='fas fa-copyright'></i> 2020 Sergi Sánchez </footer>";

            header("refresh:5;url=adminOptions.php");
        }
    } catch (Exception $e) {

        die("Error" . $e->getMessage());
        echo " Hi ha un error  a la línia" . $e->getLine();
    }

//& username=$resultats[username] & mail=$resultats[mail] & password=$resultats[password]'


    ?>

</body>

</html>