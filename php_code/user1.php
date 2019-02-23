<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
      .text-center {
       text-align: none; 
     }
}
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>cts</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="user1.js"></script>

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar  sticky-top  flex-md-nowrap p-0"style="background-color: #10e828" >
      <strong><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#" style="color: white">CTS</a></strong>
           <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="home.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
               
              <!--  <?php 
                    echo $_SESSION["TEAMNAME"];
               ?> -->

                 <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar"style="margin-right: 120px;size: 80%;">
        <h6>Upload a different photo...</h6>
       <input type="file" class="text-center center-block file-upload">
      </div></hr>
                
                  
                  
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link active" href="user1.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">
                  <span data-feather="users"></span>
                  PROFILE
                </a>
              </li
              <li class="nav-item">
                <a class="nav-link" href="event1.php">
                  <span data-feather="activity"></span>
                  EVENTS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  TASKS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.php">
                  <span data-feather="layers"></span>
                  NEWS
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Previous tasks
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  ALL PROJECTS
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">



              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
         <!--  <main>
<div class="container my-5">
       <div class="card-body text-center"> -->
    <!-- <h4 class="card-title">Activity onBoard</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
    <div class="card">
        <button id="add__new__list" type="button" class="btn btn-success position-absolute" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add </button>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Activity Name</th>
                <th scope="col">Deadline</th>
                <th scope="col">Edit activity </th>
                <th scope="col">activity info</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="#"><i class="far fa-edit"></i> edit</a>
                    <a class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> delete</a>    
                </td>
                <td><a class="btn btn-sm btn-info" href="#"><i class="fas fa-info-circle"></i> Details</a> </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="#"><i class="far fa-edit"></i> edit</a>
                    <a class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> delete</a>    
                </td>
                <td><a class="btn btn-sm btn-info" href="#"><i class="fas fa-info-circle"></i> Details</a> </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>       
                    <a class="btn btn-sm btn-primary" href="#"><i class="far fa-edit"></i> edit</a>
                    <a class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> delete</a> 
                </td>
                <td><a class="btn btn-sm btn-info" href="#"><i class="fas fa-info-circle"></i> Details</a> </td>
              </tr>
            </tbody>
          </table>
    </div>
 -->
    <div class="container">
      <div class="title">
        <h3>Leader Board</h3>
      </div>
      <div class="row">
            <div class="col-md-12">
                
            </div>
            <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        
                <div class="table-responsive">
                <table class="table">
                    <thead style="background-color: #10e828">
                        <tr>
                            <th class="text-center">Number</th>
                            <th>College_Name</th>
                            <th>Task</th>
                            <th class="text-right">Score</th>
                            
                        </tr>
                    </thead>

                    <?php
$db = 'hacathon';
$user = 'root';
$pass= '';
// Create connection
$con = new mysqli('localhost',$user,$pass , $db) or die("Unable to connect");

$sql=$con->query("select * from leader order by score desc");
if($sql->num_rows>0){
  while($row=$sql->fetch_assoc()){
        echo"<tbody><tr>
                  <td
                  >".$row['numb']."</td>
                  <td>".$row['clg name']."</td>
                  <td>".$row['task']."</td>
                  <td>".$row['score']."</td>
                </tr>";
    }
}
echo"</tbody></table>";


?>
                    
                       
                </div
          
         
        </main>
      </div>
    </div>
   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
