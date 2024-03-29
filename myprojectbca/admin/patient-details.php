<html>
    <head>
        <title>Doctor Appointment System</title>
        <script src="https://kit.fontawesome.com/be7d3971df.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/be7d3971df.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
<style>
    *{
        font-family: poppins;
    }
    a:hover{
        text-decoration: none;
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
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
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
          <a class="nav-link" href="patient-details.php" >
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

      <li class="nav-item">
          <a class="nav-link" href="#" >
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
          <li class="breadcrumb-item active">Patients Details</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table" style="padding: 10px;;"></i>
     Patients  
  <a href="add-patient.php" class="btn btn-primary btn-block" style="width:15%; float:right; "><i class="fas fa-user-plus mr-2"></i> Add Patient</a>

          </div>

          <!-- modal -->
          <div class="modal fade" id="addPatientModal" tabindex="-1" role="dialog" aria-labelledby="addPatientModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addPatientModalLabel">Add Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Content from add-patient.php will be loaded here -->
        <div id="addPatientContent"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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
                    <th>Mobile Number</th>
                    <th>Date of Birth</th>
                    <th>Action</th>
                  </tr>
</thead>
<!--get form data into table of admin dashboard----->
 <?php
    include '../connection.php';
    $sql = "SELECT * FROM patients";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['p_id'];
            $full_name = $row['full_name'];
            $address = $row['address'];
            $email = $row['email'];
            $phone = $row['phone'];
            $dob = $row['dob'];
            $password = $row['password'];
            $confirm_password = $row['confirm_password'];

            echo '<tr>
            <th>' . $id . '.</th>
            <td>' . $full_name . '</td>
            <td>' . $address . '</td>
            <td>' . $email . '</td>
            <td>' . $phone . '</td>
            <td>' . $dob . '</td>
            <td>
          

            <a class="btn btn-primary p-1 w-14 " href="view-patients.php?id=' . $id . '" role="button">View</a>
            <a class="btn btn-secondary p-1 ml-1" href="edit-patients.php?id=' . $id . '" role="button">Update</a>
            <a class="btn btn-danger p-1 ml-1" href="delete-patients.php?id=' . $id . '" role="button">Delete</a>
          
            </td>
          </tr>';
}
}
?> 

                  </tr>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
          </div>
        </div>

      </div>
</div>
<script>
  function openAddPatientModal() {
    $('#addPatientModal').modal('show');
  }
</script>

    </body>
</html>