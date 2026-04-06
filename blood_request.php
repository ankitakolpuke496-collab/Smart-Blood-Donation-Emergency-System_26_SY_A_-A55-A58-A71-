<?php
include "db.php";

if(isset($_POST['submit']))
{

$name=$_POST['patient_name'];
$bg=$_POST['blood_group'];
$city=$_POST['city'];
$area=$_POST['area'];
$level=$_POST['emergency_level'];
$date=$_POST['request_date'];

$sql="INSERT INTO blood_requests(patient_name,blood_group,city,area,emergency_level,request_date)
VALUES('$name','$bg','$city','$area','$level','$date')";

mysqli_query($conn,$sql);

echo "Blood Request Added";

}
?>

<h2>Blood Request</h2>

<form method="post">

Patient Name:<br>
<input type="text" name="patient_name"><br>

Blood Group:<br>
<input type="text" name="blood_group"><br>

City:<br>
<input type="text" name="city"><br>

Area:<br>
<input type="text" name="area"><br>

Emergency Level:<br>

<select name="emergency_level">

<option value="LOW">LOW</option>

<option value="MEDIUM">MEDIUM</option>

<option value="HIGH">HIGH</option>

<option value="CRITICAL">CRITICAL</option>

</select>

<br><br>

Date:<br>

<input type="date" name="request_date">

<br><br>

<input type="submit" name="submit" value="Submit Request">

</form>