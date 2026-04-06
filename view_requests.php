<?php
include "db.php";

$sql="SELECT * FROM blood_requests ORDER BY request_id DESC";

$result=mysqli_query($conn,$sql);
?>

<center>

<h2>🚨 Blood Request List</h2>

<table border="1" cellpadding="10">

<tr bgcolor="lightgray">

<th>ID</th>
<th>Patient</th>
<th>Blood Group</th>
<th>City</th>
<th>Area</th>
<th>Emergency</th>
<th>Date</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

if($row['emergency_level']=="CRITICAL")
{
echo "<tr bgcolor='red'>";
}
else if($row['emergency_level']=="HIGH")
{
echo "<tr bgcolor='orange'>";
}
else
{
echo "<tr>";
}

?>

<td><?php echo $row['request_id']; ?></td>
<td><?php echo $row['patient_name']; ?></td>
<td><?php echo $row['blood_group']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['area']; ?></td>
<td><?php echo $row['emergency_level']; ?></td>
<td><?php echo $row['request_date']; ?></td>

</tr>

<?php
}
?>

</table>

</center>