<?php
include '../connection.php';

session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    // Redirect to the login page
    header('Location: index.php');
    exit();
}
?>
<html>
  <head>
    <title>Doctor Appointment System</title>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/be7d3971df.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    *{
      font-family: poppins;
    }
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" href="admin-dashboard.php">Doctor Appointment  Booking System</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
</button>

<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
<div class="input-group-append">
<button class="btn btn-primary" type="button">
<i class="fas fa-search"></i>
</button>
</div>
</div> 
</form>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">


    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="admin-profile.php">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="admin-logout.php">Logout</a>
        </div>
    </li>
</ul>

</nav>
<div id="wrapper" class=" d-flex mt-2">  
   <div class="h-screen bg-gray-100 w-52 px-2 " >
   <ul class="sidebar navbar-nav">
      <li class="nav-item active">
          <a class="nav-link" href="../admin/dashboard.php ">
              <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="../admin/patient-details.php" >
              <i class="fas fa-fw fa-users"></i>
              <span>Patients</span>
          </a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="doctor-details.php">
          <i class="fa-solid fa-user-doctor"></i>
              <span>Doctors</span>
          </a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-book"></i>
              <span>Bookings</span>
          </a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-comments"></i>
              <span>Feedbacks</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="admin-view-feedback.php">View</a>
              <a class="dropdown-item" href="admin-publish-feedback.php">Manage</a>
          </div>
      </li>
  </ul> 
   </div>
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="../inc/nav.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>

                <div class="mr-5"><span class="badge badge-danger"></span> Patients</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="patient-details.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa-solid fa-user-doctor"></i>
                </div>
                <div class="mr-5"><span class="badge badge-danger"></span> Doctors</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="doctor-details.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa fa-address-book"></i>
                </div>

                <div class="mr-5"><span class="badge badge-danger"></span> Bookings</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        <!--Bookings-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Bookings
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Booking date</th>
                    <th>Status</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Prabhat Ghimire</td>
                    <td>Bharatpur</td>
                    <td>Prabhatghimire99@gmail.com</td>
                    <td>98123456789</td>
                    <td>2080-1-20</td>
                    <td> Completed</td>

                  </tr>
                </thead>

                <tbody>


                  </tr>


                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
          </div>
        </div>

      </div>
</div>
  </body>
</html>