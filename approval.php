<?php

include 'connect.php';
$sql="SELECT * from `registration1`";
$result =mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $fname =$row['firstname'];
    $middle=$row['middlename'];
    $lastname =$row['lastname'];
    $course =$row['course'];
    $daterq =$row['daterequest'];
    $image =$row['image'];
    $contactperson =$row['contactperson'];
    $cnum =$row['contactnum'];
    $address =$row['address'];
    $studnum =$row['studnum'];
    $signature =$row['signature'];
  }
  
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="registraytion11.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Approval</title>

  </head>

  <body>
    <div class="menu-bar">
      <nav class="navbar navbar-expand-lg navbar-light stic">
          <a class="navbar-brand custom-brand desktop" href="#"><img src="tupc logo.png"></a>
          <a class="navbar-brand custom-brand desktopp" href="#" style="text-align: left;">TUP CAVITE</a>
          
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
              <a class="nav-link van" href="userreg.php">User Registration</a>
                <a class="nav-link van" data-toggle="modal" data-target="#exampleModalCenter">Logout</a>
              </li>          
            </ul>
            
          </div>
      </nav>
    </div>
    <div class="container-fluid">
      <h2>For Approval</h2><hr>
    </div>
    
    <div class="container-fluid">
        <div class="row p-0 p-sm-1 p-md-2 p-lg-4">
            <div class="card col-md-4 mt-2">
                <div class="card-header text-center">
                    Pending For Approval
                </div>
                <form method="GET" >
                    
                    <div class="form-group mt-1">
                      <select multiple class="form-control" name="haha" id="exampleFormControlSelect2" size="24">
                          <?php 
                          $sql1="SELECT firstname, lastname from `registration1`";
                          $result1 =mysqli_query($con,$sql1);
                          $rows =[];
                          while($row=mysqli_fetch_assoc($result1)){
                            $rows[] =$row;
                          }
                          foreach ($rows as $value){
                          ?>
                          <option><?php echo implode(" ",$value); ?></option>
                          <?php }?>
                          
                      </select>
              
                    </div>
                  </form>
            </div>
            <div class="col-md-1"></div>
            <div class="card col-md-7 mt-2" >
                <div class="card-header text-center">
                    Personal Information
                {% for ionn in doon %}
                
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label  for="fname" class="mr-sm-2">First Name</label>
                    <label class= "form-control" class="mr-sm-2">{{ionn.firstname1}}</label>
                  </div>
                
                  <div class="col-sm-6">
                    <label  for="mname" class="mr-sm-2">Middle Name</label>
                    <label class= "form-control" class="mr-sm-2">{{ionn.middlename}}</label>
                  
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label  for="mname" class="mr-sm-2">Surname</label>
                    <label class= "form-control"for="sname" class="mr-sm-2">{{ionn.lastname}}</label>
                    

                  </div>
                  <div class="col-sm-6">
                    <label  for="mname" class="mr-sm-2">Course</label>
                    <label class= "form-control" for="course" class="mr-sm-2">{{ionn.course}}</label>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label  for="mname" class="mr-sm-2">Date Requested</label>
                    <label class= "form-control"for="pwd" class="mr-sm-2">{{ionn.daterequest}}</label>
                    
                  </div>
                  <div class="col-sm-6">
                    <label  for="mname" class="mr-sm-2">Image Upload</label>
                    <label class= "form-control" for="imageup" class="mr-sm-2">{{ionn.imagee}}</label>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <h4 style="text-align: center">IN CASE OF EMERGENCY</h4>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label  for="mname" class="mr-sm-2">Contact Person</label>
                    <label class= "form-control" for="contactper" class="mr-sm-2">{{ionn.conterpersonn}}</label>
                    
                  </div>
                  <div class="col-sm-6">
                    <label  for="mname" class="mr-sm-2">Contact Number</label>
                    <label class= "form-control" for="contactno" class="mr-sm-2">{{ionn.contactnum}}</label>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <label  for="mname" class="mr-sm-2">Address</label>
                    <label class= "form-control"for="address" class="mr-sm-2">{{ionn.address}}</label>
                    
                    <label class="mb6-sm-2">  </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label  for="mname" class="mr-sm-2">Student Number</label>
                    <label class= "form-control" for="studentno" class="mb-6-sm-2">{{ionn.studnum}}</label>
                    
                  </div>
                  <div class="col-sm-6">
                    <label  for="mname" class="mr-sm-2">Signature</label>
                    <label class= "form-control" for="signature" class="mr-sm-2">{{ionn.signature}}</label>
                  
    
                  </div>
                  
                    
                </div>
                
              </div>
              
            </div>
            
        </div>
        
      </div>
      
    <div class="container-fluid text-right mt-3 mb-3">
      <div class="text-right">
        <a href="'Creation Of ID.html"btn btn-danger" role="button">Approve</a>
        <a class="btn btn-secondary" role="button" onclick="declinereq()">Decline</a>
      </div>
    </div>
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
            <a href="login.php" class="btn btn-d anger" role="button">Logout</a>
            </div>
        </div>
        </div>
    </div>
    <footer class="site-footer" style="background-color: gray;">
      <div class="container-fluid">
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

  <script src="Approval.js?$$REVISION$$"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  

</html>
{% endblock %}