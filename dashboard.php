<?php
include "db.php";

/* Check critical requests */

$check = mysqli_query($conn,"SELECT * FROM blood_requests WHERE emergency_level='CRITICAL'");

if(mysqli_num_rows($check) > 0)
{
echo "<script>alert('🚨 Emergency Blood Request Found! Please Check Immediately');</script>";
}

/* Count donors */

$d=mysqli_query($conn,"SELECT COUNT(*) AS total FROM donors");
$donor=mysqli_fetch_assoc($d);

/* Count requests */

$r=mysqli_query($conn,"SELECT COUNT(*) AS total FROM blood_requests");
$request=mysqli_fetch_assoc($r);
?>

<center>

<h1>❤️ BloodLink Admin Dashboard ❤️</h1>

<h2>Total Donors: <?php echo $donor['total']; ?></h2>

<h2>Total Requests: <?php echo $request['total']; ?></h2>

<br>

<a href="donor_register.php">Register Donor</a><br><br>

<a href="view_donors.php">View Donors</a><br><br>

<a href="blood_request.php">Add Blood Request</a><br><br>

<a href="view_requests.php">View Blood Requests</a><br><br>

<a href="shortage.php">Check Blood Shortage</a>

</center>