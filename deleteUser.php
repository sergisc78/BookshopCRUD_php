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

    include('config.php');


    $message = "Do you want to delete this user?";
    $successMessage = 'User deleted correctly';
    $errorMessage = "Error !! User couldn´t be deleted";


    $id = $_GET['id'];
    $username = $_GET['username'];
    $mail = $_GET['mail'];
    $password = $_GET['password'];

    if (isset($_POST['delete'])) {

        $sql = "DELETE FROM albums  WHERE username='$username'";

        $resultat = $connection->prepare($sql);

        $resultat->execute(array($id, $username, $mail, $password));

        if ($resultat) {
        }
    }

    ?>

    <div class="card">
        <div class="card-body">
            <h1>Bookshop</h1>
        </div>
    </div>
    <nav class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="adminOptions.php" title="Back to options"><i class="fas fa-arrow-left"></i></a>
        </li>
    </nav>

    <form action="" method="post">
        <h3>Are you sure you want to delete this user?</h3>

        <div class="form-group">
            <label for="banda">ID</label>
            <input type="text" class="form-control" id="id" name="id" readonly value="<?php echo $_GET['id']; ?>" />
        </div>
        <div class="form-group">
            <label for="user">Username</label>
            <input type="text" class="form-control" id="user" name="user" value="<?php echo $_GET['username']; ?>" />
        </div>

        <button type="submit" class="btn btn-info" name="delete" id="delete">Delete</button>

    </form>



</body>

</html>