<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['fname'];
    $middlename=$_POST['mname'];
    $lastname=$_POST['sname'];
    $course=$_POST['course'];
    $image=$_POST['stimageup'];
    $contakperson=$_POST['contactper'];
    $contaknum=$_POST['contactno'];
    $address=$_POST['address'];
    $studnum=$_POST['studnum'];
    $signature=$_POST['signature'];

    $sql="insert into `registration1` (firstname,middlename,lastname,course,image,
    contactperson, contactnum, address, studnum, signature)
    values ('$name','$middlename','$lastname','$course','$image','$contakperson','$contaknum',
    '$address','$studnum','$signature')";
    $result=mysqli_query($con,$sql);
    if(!$result){
       
      die(mysqli_error($con));
    }
}
else if(isset($_POST['optradio'])){

    $ffirst=$_POST['ffname1'];
    $fmiddle=$_POST['faculfmname1'];
    $fsurname=$_POST['fsname1'];
    $femployeenum=$_POST['femployeeno1'];
    $fdaterequest=$_POST['fdrequest1'];
    $fimageup=$_POST['fimageup1'];
    $fgsis=$_POST['fgsis1'];
    $ftin=$_POST['ftin1'];
    $fphilh=$_POST['fphilh1'];
    $fgsisno=$_POST['fgsispol1'];
    $fpagibigno=$_POST['flablayf1'];
    $fothers=$_POST['fothers1'];
    $fcontactper=$_POST['fcontactper1'];
    $faddress=$_POST['faddress1'];
    $fsignature=$_POST['fsignature1'];
    $fcontactno=$_POST['fcontactno1'];
    
    $sql="INSERT INTO `registration2` (f_first,f_middle,f_surname,f_employeenum,f_daterequest,
    f_imageup,f_gsis,f_tin,f_philh,f_gsisno,f_pagibigno,f_others,f_contactper,
    f_address,f_signature,f_contactno)
    VALUES ('$ffirst','$fmiddle','$fsurname','$femployeenum','$fdaterequest','$fimageup',
    '$fgsis','$ftin','$fphilh','$fgsisno','$fpagibigno','$fothers','$fcontactper',
    '$faddress','$fsignature','$fcontactno')";
    $result=mysqli_query($con,$sql);
    if(!$result){
      die(mysqli_error($con));
    }
  }



?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ID Request Registration</title>
    <meta charset="UTF-8" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <script src="reg.js" type='text/javascript'></script>
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
                <a class="nav-link van" data-toggle="modal" data-target="#exampleModalCenter">Logout</a>
              </li>          
            </ul>
            
          </div>
      </nav>
    </div>

    <div class="container-fluid">
      <h2>ID Registration</h2><hr>
    </div>

    <form method="POST" name="hakdog">

      
      <div class="container-fluid">
        <div class="form-check">
          <label for="yes" class="form-check-label" id="forrad" style="font-size: 17px; font-weight: 600;">
            <input type="radio" class="form-check-input" id="stodent" name="optradio1" style="font-size:11px;" onclick="opt(0)">For Student ID Form
          </label>
        </div>
        <div class="row p-0 p-sm-1 p-md-2 p-lg-4">
            <div class="card col-md-12 mt-2" id="stcard">
              <div class="card-header text-center">
                Personal Information
            </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label for="fname" class="mr-sm-2">First Name:</label>
                    <input
                      type="text"
                      name="fname"
                      class="form-control mb-2 mr-sm-2"
                      placeholder="Enter your name"
                      id="fname"
                      disabled="disabled"
                      required
                      autofocus
                    />
                  </div>
                  <div class="col-sm-6">
                    <label for="mname" class="mr-sm-2">Middle Name </label>
                    <input
                      type="text"
                      name="mname"
                      class="form-control mb-2 mr-sm-2"
                      placeholder="Enter your middle name"
                      id="mname"
                      disabled="disabled"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label for="sname" class="mr-sm-2">Surname:</label>
                    <input
                      type="text"
                      name="sname"
                      class="form-control mb-2 mr-sm-2"
                      placeholder="Enter your Surname"
                      id="sname"
                      required
                      disabled="disabled"
                    />
                  </div>
                  <div class="col-sm-6">
                    <label for="course" class="mr-sm-2">Course:</label>
                    <input
                      name="course"
                      type="text"
                      class="form-control mb-2 mr-sm-2"
                      placeholder="Enter your course"
                      id="course"
                      required
                      disabled="disabled"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label for="stimageup" class="mr-sm-2">Image Upload:</label>
                    <input
                      name="stimageup"
                      type="file"
                      class="form-control-file mb-4 mr-sm-2"
                      id="stimageup" accept="image/*"
                      required
                      disabled="disabled"
                    />
                    <div id="display_image1"></div>
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
                    <label for="contactper" class="mr-sm-2">Contact Person:</label>
                    <input
                      name="contactper"
                      type="text"
                      class="form-control mb-2 mr-sm-2"
                      placeholder="Enter your contact person"
                      id="contactper"
                      required
                      disabled="disabled"
                    />
                  </div>
                  <div class="col-sm-6">
                    <label for="contactno" class="mr-sm-2">Contact Number:</label>
                    <input
                      name="contactno"
                      type="number"
                      class="form-control mb-2 mr-sm-2"
                      placeholder="Enter your contact number"
                      id="contactno"
                      required
                      disabled="disabled"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <label for="address" class="mr-sm-2">Address:</label>
                    <input
                      name="address"
                      type="text"
                      class="form-control mb-2 mr-sm-2"
                      placeholder="Enter your address"
                      id="address"
                      required
                      disabled="disabled"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label for="studentno" class="mr-sm-2">Student Number:</label>
                    <input
                      name="studnum"
                      type="text"
                      class="form-control mb-4 mr-sm-2"
                      placeholder="Enter your Student no."
                      id="studentno"
                      required
                      disabled="disabled"
                    />
                  </div>
                  <div class="col-sm-6">
                    <label for="signature" class="mr-sm-2">Signature:</label>
                    <input
                      name="signature"
                      type="file"
                      class="form-control mb-4 mr-sm-2"
                      placeholder="Enter your signature"
                      id="signature"
                      required
                      disabled="disabled"
                    />
                  </div>
                </div>
                <div class="container-fluid text-right mt-3 mb-3">
                    <div class="text-right">
                    <button class="btn btn-danger"  role="button" name="submit" type="submit" onclick="sub()" id="subbut" disabled="disabled" >Submit</button>
                    </div>
                </div>

</form>
            </div>
          </div>
      </div>
      
    

    <form method="POST">
    </div>
    <!-----------------------------------------FACULTY-------------------------------------------------->
    <div class="container-fluid">
      <div class="form-check">
        <label for="no" class="form-check-label mt-3" style="font-size: 17px; font-weight: 600;">
          <input type="radio" class="form-check-input" id="titser" name="optradio" onclick="opt(1)">For Faculty ID Form
        </label>
      </div>
      
      <div class="row p-0 p-sm-1 p-md-2 p-lg-4">
          <div class="card col-md-12 mt-2" id="fcard">
            <div class="card-header text-center">
              Personal Information
          </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="ffname" class="mr-sm-2">First Name:</label>
                  <input
                    type="text"
                    name="ffname1"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your First Name"
                    id="ffname"
                    required
                    disabled="disabled"
                    autofocus
                  />
                </div>
                <div class="col-sm-6">
                  <label for="faculfmname" class="mr-sm-2">Middle Name </label>
                  <input
                    type="text"
                    name="faculfmname1"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your Middle Name"
                    id="faculfmname"
                    disabled="disabled"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="fsname" class="mr-sm-2">Surname </label>
                  <input
                    type="text"
                    name="fsname1"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your Surname"
                    id="fsname"
                    disabled="disabled"
                  />
                </div>
                <div class="col-sm-6">
                  <label for="femployeeno" class="mr-sm-2">Employee Number:</label>
                  <input
                    name="femployeeno1"
                    type="text"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your Employee Number"
                    id="femployeeno"
                    required
                    disabled="disabled"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="fdrequest" class="mr-sm-2">Date requested:</label>
                  <input
                    name="fdrequest1"
                    type="date"
                    class="form-control mb-4 mr-sm-2"
                    placeholder="Enter the date requested"
                    id="fdrequest"
                    required
                    disabled="disabled"
                  />
                </div>
                <div class="col-sm-6">
                  <label for="fimageup" class="mr-sm-2">Image Upload:</label>
                  <input
                    name="fimageup1"
                    type="file"
                    class="form-control-file mb-4 mr-sm-2"
                    id="fimageup" accept="image/*"
                    required
                    disabled="disabled"
                  />
                  <div id="display_image2"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="fgsis" class="mr-sm-2">GSIS:</label>
                  <input
                    name="fgsis1"
                    type="text"
                    class="form-control mb-2 mr-sm-2"
                    id="fgsis"
                    disabled="disabled"
                  />
                </div>
                <div class="col-sm-6">
                  <label for="gsispol" class="mr-sm-2">GSIS Policy no.:</label>
                  <input
                    name="fgsispol1"
                    type="number"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your GSIG Policy No."
                    id="fgsispol"
                    disabled="disabled"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="ftin" class="mr-sm-2">TIN:</label>
                  <input
                    name="ftin1"
                    type="number"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your TIN No."
                    id="ftin"
                    required
                    disabled="disabled"
                  />
                </div>
                <div class="col-sm-6">
                  <label for="flovelife" class="mr-sm-2">PAG-IBIG No.:</label>
                  <input
                    name="flablayf1"
                    type="number"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your PAG-IBIG No."
                    id="flovelife"
                    required
                    disabled="disabled"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="fphealth" class="mr-sm-2">Philhealth:</label>
                  <input
                    name="fphilh1"
                    type="number"
                    class="form-control mb-4 mr-sm-2"
                    placeholder="Enter your Philhealth No."
                    id="fphealth"
                    required
                    disabled="disabled"
                  />
                </div>
                <div class="col-sm-6">
                  <label for="fothers" class="mr-sm-2">Others:</label>
                  <input
                    name="fothers1"
                    type="text"
                    class="form-control mb-4 mr-sm-2"
                    id="fothers"
                    disabled="disabled"
                  />
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
                  <label for="fcontactper" class="mr-sm-2">Contact Person:</label>
                  <input
                    name="fcontactper1"
                    type="text"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your Contact Person"
                    id="fcontactper"
                    required
                    disabled="disabled"
                  />
                </div>
                <div class="col-sm-6">
                  <label for="fcontactno" class="mr-sm-2">Contact No.:</label>
                  <input
                    name="fcontactno1"
                    type="number"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your Contact Number"
                    id="fcontactno"
                    required
                    disabled="disabled"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label for="faddress" class="mr-sm-2">Address:</label>
                  <input
                    name="faddress1"
                    type="text"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your Address"
                    id="faddress"
                    required
                    disabled="disabled"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="fsignature" class="mr-sm-2">Signature:</label>
                  <input
                    name="fsignature1"
                    type="file"
                    class="form-control mb-2 mr-sm-2"
                    placeholder="Enter your Signature"
                    id="fsignature"
                    required
                    disabled="disabled"
                  />
                </div>
              </div>
                <div class="container-fluid text-right mt-3 mb-3">
                    <div class="text-right">
                        <button class="btn btn-danger"  role="button" name="submit1" type="submit" onclick="sub()" id="subbut1" disabled="disabled">Submit</button>
                    </div>
                </div>
      </form> 
          </div>
        </div>
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
            <a href="login.php" class="btn btn-danger" role="button">Logout</a>
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
  </body>

  
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
