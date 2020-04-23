<?php

use Entity\User;
use Entity\Post;

require '../vendor/autoload.php';

$firstUser = new User();
$firstUser->id = 1;
$firstUser->username = "Layla";
$firstUser->password = "azerty";

$secondUser = new User();
$secondUser->id = 2;
$secondUser->username = "Val";
$secondUser->password = "azerty2";

$firstPost = new Post();
$firstPost->id = 1;
$firstPost->title = "Zane Alexander - D i v i s i o n";
$firstPost->genre = "Synthwave";
$firstPost->content = "Music Content";
$firstPost->link = "https://soundcloud.com/thezanealexander/d-i-v-i-s-i-o-n";
$firstPost->creationDate = time();
$firstPost->user = $firstUser;

$secondPost = new Post();
$secondPost->id = 2;
$secondPost->title = "Kendrick Lamar - Money Tree";
$secondPost->genre = "Rap";
$secondPost->content = "Music Content";
$secondPost->link = "https://www.youtube.com/watch?v=smqhSl0u_sI";
$secondPost->creationDate = time();
$secondPost->user = $secondUser;

$items = array($firstPost, $secondPost);

?>

<!doctype html>
<html lang="FR-fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>soundShare</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">soundShare</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Genres</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->

    <div class="card text-center mt-5">
        <div class="card-header">
            {{Author}}

        </div>
        <div class="card-body">
            <h5 class="card-title">{{Artist}} - {{songName}}</h5>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/5zB9wyq7lI4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="http://"></a>
            <a href="#" class="btn btn-primary">View post</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>

    <div class="card text-center mt-5">
        <div class="card-header">
            {{Author}}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{Artist}} - {{songName}}</h5>

            <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/758438482&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>

            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="http://"></a>
            <a href="#" class="btn btn-primary">View post</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="script/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>