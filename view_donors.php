<?php
include "db.php";

$sql="SELECT * FROM donors";
$result=mysqli_query($conn,$sql);
?>

<h2>Donor List</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>Blood Group</th>
<th>City</th>
<th>Area</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['blood_group']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['area']; ?></td>
</tr>

<?php
}
?>

</table>