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
    $successMessage = 'deleted successfully';
    $errorMessage = "Error !! User can´t be deleted";



    if (isset($_POST['delete'])) {

        $id = $_GET['id'];
        $author = $_GET['author'];
        $title = $_GET['title'];
        $year = $_GET['year'];
        $rating = $_GET['rating'];
        $review = $_GET['review'];


        $sql = "DELETE FROM reviews  WHERE id='$id'";

        $resultat = $connection->prepare($sql);

        $resultat->execute(array($id, $author, $title, $year, $rating, $review));

        if ($resultat) {

            echo " <div class='alert alert-danger' role='alert'>
                 <button type='button' class='close' data-dismiss='alert'>&times;</button>
                 <h3 id='message'> $title $successMessage !</h3>
                 </div>
                 <footer><i class='fas fa-copyright'></i> 2020 Sergi Sánchez </footer>";

            header("refresh:10;url=adminOptions.php");
        } else {
            echo " <div class='alert alert-danger' role='alert'>
                 <button type='button' class='close' data-dismiss='alert'>&times;</button>
                 <h3 id='message'> $errorMessage !</h3>
                 </div>
                 <footer><i class='fas fa-copyright'></i> 2020 Sergi Sánchez </footer>";

            header("refresh:5;url=adminOptions.php");
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
        <h3>Are you sure you want to delete this review?</h3>

        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" readonly value="<?php echo $_GET['id']; ?>" />
            <br>

            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="<?php echo $_GET['author']; ?>" />
            <br>

            <label for="titol">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $_GET['title']; ?>" />

            <br>

            <label for="text">Release year</label>
            <input type="text" class="form-control" id="year" name="year" value="<?php echo $_GET['year']; ?>" />

            <br>

            <label for="text">Rating (from 1 to 10)</label>
            <input type="text" class="form-control" id="rating" name="rating" value="<?php echo $_GET['rating']; ?>" />

            <br>

            <label for="text">Review</label>
            <input type="text" class="form-control" id="review" name="review" value="<?php echo $_GET['review']; ?>" />
        </div><br>

        <button type="submit" class="btn btn-info" name="delete" id="erase">Delete</button>


    </form>


    <!--BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>

</html>