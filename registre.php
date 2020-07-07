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

  include('config.php');

  $user = $_POST['user'];
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];
  $confPass = $_POST['confPass'];


  if (isset($_POST['send'])) {



    $sql_users = "SELECT * FROM users WHERE username=? and mail=?";

    $result = $connection->prepare($sql_users);

    $result->bindParam(1, $user); // CORRESPONDÈNCIA ENTRE EL PARÀMETRE I LA VARIABLE
    $result->bindParam(2, $mail); // CORRESPONDÈNCIA ENTRE EL PARÀMETRE I LA VARIABLE

    $result->execute();
    $count = $result->rowCount();


    if ($count != 0) { // IF USERNAME AND EMAIL EXIST
      echo "<div class='alert alert-danger' role='alert'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
       <h3 id='message'>There is an user with the same name or email !</h3>
      </div>
      <footer><i class='fas fa-copyright'></i> 2020 Sergi Sánchez </footer>";

      header("refresh:5;url=registre.html");
    } else { // ELSE, INSERT USER

      $sql_insert = "INSERT INTO users (username, mail, password, confPass) VALUES (?,?,?,?)";
      $result2 = $connection->prepare($sql_insert);

      $result2->bindParam(1, $user);
      $result2->bindParam(2, $mail);
      $result2->bindParam(3, $pass);
      $result2->bindParam(4, $confPass);

      $result2->execute();

      echo "<div class='alert alert-success' role='alert'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <h3 id='message'>Thank you for the registration <strong> $user </strong>. We´ll redirect you to login page soon !</h3>
      </div>
      <footer><i class='fas fa-copyright'></i> 2020 Sergi Sánchez </footer>";

      header("refresh:10;url=login.html");
    }
  }

  ?>
</body>

</html>