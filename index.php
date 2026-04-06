<!DOCTYPE html>
<html>
<head>
<title>BloodLink Emergency System</title>

<script>
function showTime()
{
var date = new Date();
document.getElementById("time").innerHTML = date.toLocaleString();
}
setInterval(showTime,1000);
</script>

</head>

<body bgcolor="#ffe6e6" onload="showTime()">

<center>

<h1>❤️ BloodLink Emergency System ❤️</h1>

<h3>Connecting Blood Donors With Patients</h3>

<p id="time"></p>

<hr width="60%">

<h2>Dashboard</h2>

<a href="donor_register.php">
<button style="padding:10px">🩸 Register Donor</button>
</a>

<br><br>

<a href="view_donors.php">
<button style="padding:10px">👨‍⚕️ View Donors</button>
</a>

<br><br>

<a href="blood_request.php">
<button style="padding:10px">🚑 Request Blood</button>
</a>

<br><br>

<a href="view_requests.php">
<button style="padding:10px">📋 View Requests</button>
</a>

<br><br>

<h3>💡 Smart Features</h3>

<ul>

<li>✔ Smart Donor Eligibility Check</li>
<li>✔ Emergency Priority Handling</li>
<li>✔ Donor Life Score System</li>
<li>✔ Blood Shortage Prediction</li>

</ul>

</center>

</body>
</html>