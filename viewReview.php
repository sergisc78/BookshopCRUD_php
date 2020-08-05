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

    $id = $_GET['id'];
    $author = $_GET['author'];
    $title = $_GET['title'];
    $year = $_GET['year'];
    $rating = $_GET['rating'];
    $review = $_GET['review'];

    ?>

    <div class="card">
        <div class="card-body">
            <h1>Bookshop</h1>
        </div>
    </div>
    <nav class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="opcions.php" title="Back to options"><i class="fas fa-arrow-left"></i></a>
        </li>
    </nav>

    <h3>Review of the book</h3>

    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" name="id" readonly value="<?php echo $_GET['id']; ?>" />
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" id="author" name="author" value="<?php echo $_GET['author']; ?>" />
    </div>
    <div class="form-group">
        <label for="titol">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $_GET['title']; ?>" />
    </div>

    <div class=" form-group">
        <label for="text">Release year</label>
        <input type="text" class="form-control" id="year" name="year" value="<?php echo $_GET['year']; ?>" />
    </div>

    <div class=" form-group">
        <label for="text">Rating (from 1 to 10)</label>
        <input type="text" class="form-control" id="rating" name="rating" value="<?php echo $_GET['rating']; ?>" />
    </div>

    <div class=" form-group">
        <label for="text">Review</label>
        <input type="text" class="form-control" id="review" name="review" value="<?php echo $_GET['review']; ?>" />
    </div>

    <footer><i class="fas fa-copyright"></i> 2020 Sergi Sánchez</footer>

</body>

</html>