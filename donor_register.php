<?php
include "db.php";

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$bg=$_POST['blood_group'];
$city=$_POST['city'];
$area=$_POST['area'];
$last=$_POST['last_donation'];

$today=date("Y-m-d");

/* calculate days */

$days=(strtotime($today)-strtotime($last))/(60*60*24);

if($days < 90)
{
echo "❌ Donor Not Eligible (Must wait 90 days)";
}
else
{

$sql="INSERT INTO donors(name,age,gender,blood_group,city,area,last_donation)
VALUES('$name','$age','$gender','$bg','$city','$area','$last')";

mysqli_query($conn,$sql);

echo "✅ Donor Registered Successfully";

}

}
?>

<h2>Register Donor</h2>

<form method="post">

Name:<br>
<input type="text" name="name"><br>

Age:<br>
<input type="number" name="age"><br>

Gender:<br>
<input type="text" name="gender"><br>

Blood Group:<br>
<input type="text" name="blood_group"><br>

City:<br>
<input type="text" name="city"><br>

Area:<br>
<input type="text" name="area"><br>

Last Donation Date:<br>
<input type="date" name="last_donation"><br><br>

<input type="submit" name="submit" value="Register Donor">

</form>