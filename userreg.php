<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $ufname=$_POST['ufname'];
    $usname=$_POST['usname'];
    $uuname=$_POST['username'];
    $upassw=$_POST['password'];

    $sql="insert into `useraccount` (user_firstname,user_lastname,user_username,user_password)
    values('$ufname','$usname','$uuname','$upassw')";
    $result=mysqli_query($con,$sql);
    if(!$result){
        die(mysqli_error($con));
    }

}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Account Registration</title>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="registraytion11.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
  </head>

  <body>
    <div class="menu-bar">
      <nav class="navbar navbar-expand-lg navbar-light stic">
          <a class="navbar-brand" href="#"><img src="tupc logo.png"></a>
          <a class="navbar-brand custom-brand desktopp" href="#" style="text-align: left;">TUP CAVITE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link van" href="approval.php">Approval</a>
                <a class="nav-link van" data-toggle="modal" data-target="#exampleModalCenter">Logout</a>
              </li>          
            </ul>
            
          </div>
      </nav>
    </div>
    <div class="container-fluid">
      <h2>User Account Registration</h2><hr>
    </div>
    <form class="container-fluid" method="POST">
      <div class="row p-0 p-sm-1 p-md-2 p-lg-4">
        <div class="card col-md-12 mt-2" id="stcard">
          <div class="card-header text-center">
            Personal Information
          </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="ufname" class="mr-sm-2">First Name:</label>
                <input
                  type="text"
                  name="ufname"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="Enter your name"
                  id="ufname"
                  required
                  autofocus
                />
              </div>
              <div class="form-group col-sm-6">
                <label for="usname" class="mr-sm-2">Surname:</label>
                <input
                  type="text"
                  name="usname"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="Enter your Surname"
                  id="usname"
                  required
                />
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-12">
                <label for="uuname" class="mr-sm-2">Username:</label>
                <input
                  type="text"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="TUPC-**-****"
                  id="username"
                  name="username"
                  required
                />
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="password" class="mr-sm-2">Password:</label>
                <input
                  type="text"
                  name="password"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="Enter your Password"
                  id="password"
                  required
                />
              </div>
              <div class="form-group col-sm-6">
                <label for="uconpassw" class="mr-sm-2">Confirm Password</label>
                <input
                  type="text"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="Confirm Your Password"
                  id="uconpassw"
                  name="uconpassw"
                  required
                />
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-danger">Create</button>
        </div>
      </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Are You Sure You Want To Logout Your Account?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="login.php" class="btn btn-danger" role="button">Logout</a>
            </div>
        </div>
      </div>
    </div>

    
  </body>
  <footer class="sticky-footer" style="background-color: gray;">
    <div class="container-fluid">
      <div class="row"></div>
      <div class="row">
        <div class="col-sm-3 mt-4"></div>
        <div class="col-sm-6 mb-4 mt-4" style="text-align: center;">
          <img src="tupc logo.png" width="100"><br>
          <b>TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES <br>
            CAVITE CAMPUS</b><br>
        Carlos Q. Trinidad Avenue, Salawag, Dasmariñas City, Cavite,
        Philippines<br>
        Telefax: (046) 416-4920 <br>
        Email: <a class="email" href="mailto:cavite@tup.edu.ph">cavite@tup.edu.ph</a> │ Website:
        <a class="link" href="https://www.tup.edu.ph/" target="_blank">www.tup.edu.ph</a>
        </div>
        <div class="col-sm-3 mt-4"></div>
      </div>
    </div>
  </footer>
  
  
  <!-- <script src="{% static 'js/useracc.js' %}"></script>-->
  
  <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
</html>
