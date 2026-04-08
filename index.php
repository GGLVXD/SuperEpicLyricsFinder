<?php
include 'php/fetch.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELM</title>
    <!-- Header css -->
    <link rel="stylesheet" href="css/header.css">
    <!-- pats content -->
    <link rel="stylesheet" href="css/content.css">
    <!-- global things -->
    <link rel="stylesheet" href="css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <!-- Header container -->
    <div class="header">
        <div class="title">
            <h1 class="title-text"> SuperEpisksLyricsMeklētajs </h1>
        </div>
        <div class="pfp">
        <img src="assets/avatar.png" height="50" width="75">
     </div>
    </div>
     <!-- Content container -->
    <div class="content">
        <div class="search-bar">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Ievadi dziesmas vārdu" aria-label="Search">
                <button class="btn btn-outline-secondary" type="button" id="submit">
                        <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="lyrics-text">
<p class="lyrics-text"><?php echo $lyrics["message"]["lyrics"]; ?></p>
    </div>
    </div>
    <!-- Footer container -->
    <div class="footer">
        <p>© 2026 <br> SuperEpisksLyricsMeklētajs</p>
</div>
</body>
</html>
