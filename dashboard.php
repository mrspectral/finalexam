<?php
 require('database.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome To Dashboard</title>
<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>This is secured page.</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>


<br /><br /><br /><br />

</div>
</body>
</html>
