<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">


    <title>Fixed top navbar example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="home.css">
    </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-white fixed-top bg-light">
      <a class="navbar-brand" href="#">Cognizant</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="event.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Blog</a>
          </li>
        </ul>
        <span class="navbar inline mt-0 mt-md-0">
            <div class="btn-toolbar" role="toolbar">
                <div class="bt-group mr-2" role="group">
                    <button type="button" class="btn btn-outline-primary my-3 my-sm-0">Sign_UP</button>
                    <!-- <button class="btn btn-outline-success my-1 my-sm-0" onclick="login()">LOGIN</button> -->
                    <button class="btn btn-outline-success my-1 my-sm-0" onclick="login()"><a href="#login">LOGIN</a></button>
                </div>
            </div>
        </span>
        
      </div>
    </nav>