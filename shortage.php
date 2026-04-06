<?php
include "db.php";

echo "<center>";

echo "<h2>Blood Shortage Prediction</h2>";

$groups = ["A+","A-","B+","B-","O+","O-","AB+","AB-"];

foreach($groups as $g)
{

$q=mysqli_query($conn,"SELECT COUNT(*) as total FROM donors WHERE blood_group='$g'");

$row=mysqli_fetch_assoc($q);

if($row['total'] < 2)
{
echo "⚠ Blood shortage predicted for <b>$g</b> group<br><br>";
}
else
{
echo "✔ Blood available for <b>$g</b> group<br><br>";
}

}

echo "</center>";
?>