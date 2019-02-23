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
    <script type="text/javascript">
    	function login()
    	{
    		document.getElementById('login').style.display="block";
    	}
    </script>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-white fixed-top bg-light">
     <strong><a class="navbar-brand" href="#" style="color: #10e828">Cognizant</a></strong>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link disabled" href="#news">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="blog.php">Blog</a>
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
     
   <header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image:url('car_pic1.jpg')" >
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">First Slide</h3>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('car_pic1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Second Slide</h3>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('car_pic2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Third Slide</h3>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->
<!--<section class="py-5">
  <div class="container">
    <h1 class="font-weight-light">Half Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>!</p>
  </div>
</section>-->
<div id="login" class="container" style="display: none;">
<div class="login-wrap" >
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="name" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="pw" type="password" class="input" data-type="password">
        </div>
        
        <div class="group">
          <input type="submit" name="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="./api/user/signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<!--news-->


        <div id=news class="top-head left">
    <div class="container">
            <div class="row">
        <div class="col-md-6 col-lg-4">
                <h1>CTS Student Club News<small>Get the latest News</small></h1>
              </div>
        
      </div>
          </div>
  </div>
      </header>
<section class="top-nav">
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav ">
        
        <li class="nav-item"> <a class="nav-link" href="#">Star performer</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">Monthy Activity</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">Leader Board</a> </li>
        
      </ul>
            <form class="ml-auto">
        <div class="search">
                <input type="text" class="form-control" maxlength="64" placeholder="Search" />
                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
              </div>
      </form>
          </div>
  </div>
      </nav>
</section>
<section class="banner-sec">
        <div class="container">
    <div class="row">
            <div class="col-md-3">
        <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/politics.jpg" alt="">
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">News</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a href="#">Syria war: Why the battle for Aleppo matters</a></h2>
                  </div>
            <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
          </div>
              </div>
        <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/travel.jpg" alt="">
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Politics</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a href="#">Key Republicans sign letter warning against</a></h2>
                  </div>
            <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
          </div>
              </div>
      </div>
            <div class="col-md-3">
        <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/business1.jpg" alt="">
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Travel</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a href="#">Obamacare Appears to Be Making People Healthier</a></h2>
                  </div>
            <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
          </div>
              </div>
        <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/food.jpg" alt="">
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">News</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a href="#">‘S.N.L.’ to Lose Two Longtime Cast Members</a></h2>
                  </div>
            <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
          </div>
              </div>
      </div>
            <div class="col-md-6 top-slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->
                <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                    <div class="news-block">
                <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/politics1.jpg" alt=""></div>
                <div class="news-title">
                        <h2 class=" title-large"><a href="#">Ray madison may struggle to get best from Paul in a 4-2-3-1 formation</a></h2>
                      </div>
                <div class="news-des">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                <div class="time-text"><strong>2h ago</strong></div>
                <div></div>
              </div>
                  </div>
            <div class="carousel-item">
                    <div class="news-block">
                <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/sport1.jpg" alt=""></div>
                <div class="news-title">
                        <h2 class=" title-large"><a href="#">An Alternative Form of Mental Health Care Gains a Foothold</a></h2>
                      </div>
                <div class="news-des">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                <div class="time-text"><strong>2h ago</strong></div>
                <div></div>
              </div>
                  </div>
            <div class="carousel-item">
                    <div class="news-block">
                <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/health.jpg" alt=""></div>
                <div class="news-title">
                        <h2 class=" title-large"><a href="#">Key Republican Senator Says She Will Not Vote for former president!</a></h2>
                      </div>
                <div class="news-des">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                <div class="time-text"><strong>2h ago</strong></div>
                <div></div>
              </div>
                  </div>
          </div>
              </div>
      </div>
          </div>
  </div>
      </section>
<section class="section-01">
        <div class="container">
    <div class="row">
            <div class="col-lg-8 col-md-12">
        <h3 class="heading-large">Politics</h3>
        <div class="">
                <div class="col-lg-6 card">
            <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/war.jpg" alt="">
                    <div class="card-body">
                <div class="news-title"><a href="#">
                  <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
                <div class="col-lg-6 card">
            <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/politics.jpg" alt="">
                    <div class="card-body">
                <div class="news-title"><a href="#">
                  <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
                <div class="col-lg-6 card">
            <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/movie.jpg" alt="">
                    <div class="card-body">
                <div class="news-title"><a href="#">
                  <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
                <div class="col-lg-6 card">
            <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/travel1.jpg" alt="">
                    <div class="card-body">
                <div class="news-title"><a href="#">
                  <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
              </div>
      </div>
            <aside class="col-lg-4 side-bar col-md-12">
        <ul class="nav nav-tabs" role="tablist" id="myTab">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Latest</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Top</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Featured</a> </li>
              </ul>
        
        <!-- Tab panes -->
        <div class="tab-content sidebar-tabing" id="nav-tabContent">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="media"> <a href="#"> <img class="d-flex mr-3" src="http://grafreez.com/wp-content/temp_demos/river/img/sport2.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <div class="news-title">
                            <h2 class="title-small"><a href="#">Key Republicans sign letter warning against candidate</a></h2>
                        </div>
                        <div class="news-auther"><span class="time">1h ago</span></div>
                    </div>
                  </div>
            <div class="media"> <a href="#"> <img class="d-flex mr-3" src="http://grafreez.com/wp-content/temp_demos/river/img/lifestyle.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                <div class="news-title">
                        <h2 class="title-small"><a href="#">Obamacare Appears to Be Making People Healthier</a></h2>
                      </div>
                <div class="news-auther"><span class="time">1h ago</span></div>
              </div>
                  </div>
            <div class="media"> <a href="#"> <img class="d-flex mr-3" src="http://grafreez.com/wp-content/temp_demos/river/img/food1.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                <div class="news-title">
                        <h2 class="title-small"><a href="#">Key Republicans sign letter warning against candidate</a></h2>
                      </div>
                <div class="news-auther"><span class="time">1h ago</span></div>
              </div>
                  </div>
          </div>
                <div class="tab-pane" id="profile" role="tabpanel">
            <div class="media"> <a href="#"> <img class="d-flex mr-3" src="http://grafreez.com/wp-content/temp_demos/river/img/movie.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                <div class="news-title">
                        <h2 class="title-small"><a href="#">Key Republicans sign letter warning against candidate</a></h2>
                      </div>
                <div class="news-auther"><span class="time">1h ago</span></div>
              </div>
                  </div>
            <div class="media"> <a href="#"> <img class="d-flex mr-3" src="http://grafreez.com/wp-content/temp_demos/river/img/auto.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                <div class="news-title">
                        <h2 class="title-small"><a href="#">‘S.N.L.’ to Lose Two Longtime Cast Members</a></h2>
                      </div>
                <div class="news-auther"><span class="time">1h ago</span></div>
              </div>
                  </div>
            <div class="media"> <a href="#"> <img class="d-flex mr-3" src="http://grafreez.com/wp-content/temp_demos/river/img/business1.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                <div class="news-title">
                        <h2 class="title-small"><a href="#">Obamacare Appears to Be Making People Healthier</a></h2>
                      </div>
                <div class="news-auther"><span class="time">1h ago</span></div>
              </div>
                  </div>
          </div>
                <div class="tab-pane" id="messages" role="tabpanel">
            <div class="media"> <a href="#"> <img class="d-flex mr-3" src="http://grafreez.com/wp-content/temp_demos/river/img/food.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                <div class="news-title">
                        <h2 class="title-small"><a href="#">Key Republicans sign letter warning against candidate</a></h2>
                      </div>
                <div class="news-auther"><span class="time">1h ago</span></div>
              </div>
                  </div>
            <div class="media"> <a href="#"> <img class="d-flex mr-3" src="http://grafreez.com/wp-content/temp_demos/river/img/business.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                <div class="news-title">
                        <h2 class="title-small"><a href="#">‘S.N.L.’ to Lose Two Longtime Cast Members</a></h2>
                      </div>
                <div class="news-auther"><span class="time">1h ago</span></div>
              </div>
                  </div>
            <div class="media"> <a href="#"> <img class="d-flex mr-3" src="http://grafreez.com/wp-content/temp_demos/river/img/sport1.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                <div class="news-title">
                        <h2 class="title-small"><a href="#">Key Republicans sign letter warning against candidate</a></h2>
                      </div>
                <div class="news-auther"><span class="time">1h ago</span></div>
              </div>
                  </div>
          </div>
              </div>
        <div class="video-sec">
                <h4 class="heading-small">Featured Video</h4>
                <div class="video-block">
            <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                  </div>
          </div>
              </div>
      </aside>
          </div>
  </div>
      </section>
      <script id="gs-sdk" src='//www.buildquickbots.com/botwidget/v3/demo/static/js/sdk.js?v=3' key="11ad8f1a-ba64-4209-86e0-65555df1b464" ></script>

    <!--<main role="main" class="container">
      <div class="jumbotron">
        <h1></h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
        <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
      </div>
    </main>-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./assets/js/vendor/popper.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>

  </body>
</html>
<?php
$db = 'hacathon';
$user = 'root';
$pass= '';
// Create connection
$con = new mysqli('localhost',$user,$pass , $db) or die("Unable to connect");
$uname=$_POST['name'];
$password=$_POST['pw'];

$_SESSION["TEAMNAME"] = $uname;

$sql=$con->query("select * from users where name='$uname' and password='$password'");

if($sql->num_rows>0){
	 echo"<script>window.location.href = 'user1.php'</script>";
	// header('Location: user1.php');
	// exit();
}




?>