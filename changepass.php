<?php
include 'connect.php';
session_start();
if(isset($_POST['submit'])){
  $curpass=$_POST['curpass'];
  $newpass=$_POST['newpass'];
  $conpass=$_POST['conpass'];
  $profile=$_POST['username'];

  if($newpass <> $conpass)
  {
    echo"Password not Match";
  }
  else{
    $sql="SELECT * from useraccount WHERE user_username='$profile' AND user_password='$curpass'";
    $result=$con->query($sql);
    $sql1="SELECT * from useraccount WHERE user_username='$profile'";
    $result1=$con->query($sql1);
    if (mysqli_num_rows($result1)>0){
      if(mysqli_num_rows($result)>0){
        $sql="UPDATE useraccount SET user_password='$newpass' WHERE user_username='$profile' AND user_password='$curpass'";
        if($con->query($sql)){
          echo"Password has been Changed";
        }
        else{
          echo"Invalid Current Password";
        }
      }
      else{
        echo"Invalid Current Password";
      }
    }
    else{
      echo("Invalid User");
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <link rel="stylesheet" href="changepass.css">
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
                <a class="nav-link van" href="login.php">Login</a>
              </li>          
            </ul>
            
          </div>
      </nav>
    </div>

  <div class="container-fluid">
    <div class="row p-0 p-sm-1 p-md-2 p-lg-4">
      <div class="col-sm-3 mt-4">
      </div>
      <div class="col-sm-6 dc">
        <form method="POST">
          <div class="form-floating mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="TUPC-XX-XXXX"  name="username" id="username"required>
          </div>
          <div class="form-floating mb-3">
            <label for="curpass">Current Password</label>
            <input type="text" class="form-control" placeholder="name@example.com"  name="curpass" id="curpass"required>
            
          </div>
          <div class="form-floating">
            <label for="newpass">New Password</label>
            <input type="text" class="mb-3 form-control" name="newpass" id="newpass" placeholder="Password" required>
          </div>
          <div class="form-floating">
            <label for="conpass">Confirm Password</label>
            <input type="text" class="mb-3 form-control" name="conpass" id="conpass" placeholder="Confirm Password" required>
          </div>
          <div class="form-floating">
            <button type="submit" name="submit" class="btn btn-primary btn-block" class="mb-3 form-control" onclick="login()">Change Password</button>
          </div>
        </form>
      </div>
      <div class="col-sm-3">

      
      </div>
    </div>
    </div>
  </div>
</body>
<!--<script src="{% static 'js/Login.js'%}"></script>-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>