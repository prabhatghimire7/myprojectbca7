<?php
$server="localhost";
$username="root";
$password=" ";
$dbname="myprojectbca";

//Create a connection
$con=mysqli_connect($server,$username,$password,$dbname); 

//check connection
if(!$con)
{
    echo "Connection Unsucessfull";
}

$sql="CREATE TABLE patients (
  full_name VARCHAR(255),
  address VARCHAR(255),
  email VARCHAR(255) UNIQUE,
phone VARCHAR(20),
 dob DATE,
  password VARCHAR(255),
  confirm_password VARCHAR(255)

)";

// Step 3: Execute the SQL query
if (mysqli_query($con, $sql)) {
    echo "Table patients created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}


// Step 4: Close the database connection
mysqli_close($con);
?>

