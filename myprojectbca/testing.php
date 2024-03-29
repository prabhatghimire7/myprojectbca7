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
        * {
            font-family: poppins;
        }

        a:hover {
            text-decoration: none;
        }

        .signup-box {
            margin-top: 30px;
            width: 100%;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            justify-content: center;
            align-items: center;
            padding-bottom: 10px;
            background-color: skyblue;


        }

        .label-field {
            margin-top: 5px;
            width: 80%;
            margin-bottom: 5px;
            text-align: left;
        }

        .input-field {
            border-radius: 8px;
            position: relative;
            width: 100%;
            padding: 8px;
            outline: none;
            border: 1px solid crimson;
        }

        .signup-btn {

            width: 80%;
            background-color: rgb(226, 52, 87);
            cursor: pointer;
            color: #fff;
            transition: all ease 0.5s;
            border: 1px solid crimson;
            outline: none;
            border-radius: 6px;
            padding: 8px;
        }

        span {
            color: crimson;
            font-size: 14px;
        }

        .signup-btn:hover {
            background-color: crimson;
        }

        .close-btn {
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
        }

        .close-btn:hover {
            color: red;
        }
      section{
          
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }
       center{
            position:absolute;
            top:20;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="admin-dashboard.php">Doctor Appointment Booking System</a>

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
        <div class="h-screen bg-gray-100 w-52 px-2 ">
            <ul class="sidebar navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../admin/dashboard.php ">
                        <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="patient-details.php">
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
                    <a class="nav-link" href="#">
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
                <li class="breadcrumb-item active">Doctors</li>
            </ol>




            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table" style="padding: 10px;;"></i>
                    Doctors
                    <a class="btn btn-primary btn-block" style="width:15%; float:right; "><i class="fas fa-user-plus mr-2"></i> Add Doctor</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                            <!-- <thead>
                  <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Specialist</th>
                    <th>Operation</th>

                  </tr>
                </thead> -->
                            <!-- <php
    include '../connection.php';
    $sql = "SELECT * FROM doctors";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['d_id'];
            $full_name = $row['full_name'];
            $address = $row['address'];
            $email = $row['email'];
            $phone = $row['phone'];
            $specialist = $row['specialist'];
            $doctor_password = $row['doctor_password'];
            $confirm_password = $row['confirm_password'];

            echo '<tr>
                    <th>' . $id . '.</th>
                    <td>' . $full_name . '</td>
                    <td>' . $address . '</td>
                    <td>' . $email . '</td>
                    <td>' . $phone . '</td>
                    <td>' . $specialist . '</td>
                  </tr>';
        }
    }
?> -->



                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>Specialist</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            include 'connection.php';
                            $sql = "SELECT * FROM doctors";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['d_id'];
                                    $full_name = $row['full_name'];
                                    $address = $row['address'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                    $specialist = $row['specialist'];
                                    $doctor_password = $row['doctor_password'];
                                    $confirm_password = $row['confirm_password'];
                                    $image_path = isset($row['image_path']) ? $row['image_path'] : '';
                                    $name = isset($row['name']) ? $row['name'] : '';




                                    echo '<tr>
            <th>' . $id . '.</th>
            <td>' . $full_name . '</td>
            <td>' . $address . '</td>
            <td>' . $email . '</td>
            <td>' . $phone . '</td>
            <td>' . $specialist . '</td>
            <td><img src="' . $image_path . '" alt="' . $name . '" style="max-width: 50px; max-height: 50px;"></td>
            <td>
            <a class="btn btn-primary p-1 w-14 " href="view-doctors.php?id=' . $id . '" role="button">View</a>
            <a class="btn btn-secondary p-1 ml-1" href="edit-doctors.php?id=' . $id . '" role="button">Update</a>
            <a class="btn btn-danger p-1 ml-1" href="delete-doctors.php?id=' . $id . '" role="button">Delete</a>
          


            </td>
          </tr>';
                                }
                            }
                            ?>




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
    <section>
    <center>

<div onclick="remove()" class="cursor-pointer; inner-box">&times;</div>
    <div class="signup-box">
      <form onsubmit="return validateForm()" action="add-doctor.php" method="post" enctype="multipart/form-data">
          <h2 class="header-text" style="text-align: center;">Let's Get Started</h2>
          <p class="header-subtext" style="text-align: center;">Add doctor details</p>
          <div class="label-field">
            <label for="full_name">Full Name:</label>
            <input type="text" class="input-field" placeholder="Full Name" name="full_name" id="full_name" required autocomplete="off">
            <div id="error-message"></div>
          </div>
          <div class="label-field">
            <label for="address">Address:</label>
            <input type="text" class="input-field" placeholder="Address" name="address" id="address" required autocomplete="off">
            <span id="address-error"></span>
          </div>
          <div class="label-field">
            <label for="email">Email:</label>
            <input type="email" class="input-field" placeholder="Email" name="email" id="email" required autocomplete="off">
            <span id="email-error" style="color:crimson;"></span>
          </div>
          <div class="label-field">
            <label for="phone">Mobile Number:</label>
            <input type="text" class="input-field" placeholder="Mobile Number" name="phone" id="phone" required autocomplete="off">
            <span id="phone-error"></span>
          </div>
          <div class="label-field">
            <label for="option">Speciality: </label>
              <select class="custom-select" name="specialist" style="width: 100%; padding:8px; border-radius:6px; outline:none;border:1px solid crimson;margin-top:3px;" required>
                       <option selected disabled>Speciality</option>
                       <option value="Dermatologist">Dermatologist</option>
                      <option value="Cardiologist">Cardiologist</option>
                      <option value="Infectious Disease">Infectious disease</option>
                      <option value="Psychiatrist">Psychiatrist</option>
                      <option value="Family Medicine">Family medicine</option>
                      <option value="Surgeon">Surgeon</option>
                      <option value="Radiologist">Radiologist</option>
                      <option value="Neurologist">Neurologist</option>

                         </select>
                         </div> 
     
          <div class="label-field">
            <label for="password">Create Password:</label>
            <input type="password" class="input-field" placeholder="Create Password" name="doctor_password" id="password" required>
          </div>
          <div class="label-field">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" class="input-field" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required >
            <span id="confirm-password-error"></span>
          </div>
          <div class="label-field">
            <label for="image">Upload image</label>
            <input type="file"  name="image" id="image" accept="image/*" required>
          </div>
          <button type="submit" class="signup-btn">Add Doctor</button>
          <br>
          <br>
        </form>
    </div>
  </center> 
  </section>
</body>



</html>