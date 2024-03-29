<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Creation Of ID</title>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />

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
      <h2>Creation Of ID</h2><hr>
    </div>
    <div class="container-fluid">
      <div class="row p-0 p-sm-1 p-md-2 p-lg-4">
          <div class="card col-md-12 mt-2">
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
                  readonly
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
                  readonly
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
                  readonly
                />
              </div>
              <div class="col-sm-6">
                <label for="course" class="mr-sm-2">Course:</label>
                <input
                  type="text"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="Enter your course"
                  id="course"
                  readonly
                />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for="pwd" class="mr-sm-2">Date Requested:</label>
                <input
                  type="date"
                  class="form-control mb-4 mr-sm-2"
                  placeholder="Enter the date requested"
                  id=""
                  readonly
                />
              </div>
              <div class="col-sm-6">
                <label for="imageup" class="mr-sm-2">Image Upload:</label>
                <input
                  type="file"
                  class="form-control-file mb-4 mr-sm-2"
                  id="imageup"
                  disabled
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
                <label for="contactper" class="mr-sm-2">Contact Person:</label>
                <input
                  type="text"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="Enter your contact person"
                  id="contactper"
                  readonly
                />
              </div>
              <div class="col-sm-6">
                <label for="contactno" class="mr-sm-2">Contact Number:</label>
                <input
                  type="text"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="Enter your contact number"
                  id="contactno"
                  readonly
                />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <label for="address" class="mr-sm-2">Address:</label>
                <input
                  type="text"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="Enter your address"
                  id="address"
                  readonly
                />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for="studentno" class="mr-sm-2">Student Number:</label>
                <input
                  type="text"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="Enter your Student no."
                  id="studentno"
                  readonly
                />
              </div>
              <div class="col-sm-6">
                <label for="signature" class="mr-sm-2">Signature:</label>
                <input
                  type="text"
                  class="form-control mb-2 mr-sm-2"
                  placeholder="Enter your signature"
                  id="signature"
                  readonly
                />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for="drelease" class="mr-sm-2">Date Released:</label>
                <input
                  type="date"
                  class="form-control mb-4 mr-sm-2"
                  placeholder="Enter the date released"
                  id="drelease" required
                />
              </div>
              <div class="col-sm-6">
                <label for="prby" class="mr-sm-2">Printed By:</label>
                <input
                  type="text"
                  class="form-control mb-4 mr-sm-2"
                  placeholder="Printed by:"
                  id="prby" required
                />
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container-fluid text-right mt-3 mb-3">
        <div class="text-right">
          <a href="pdf.php" class="btn btn-danger" role="button">Proceed</a>
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
