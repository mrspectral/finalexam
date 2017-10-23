<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<?php
	require('database.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$first_name = stripslashes($_REQUEST['first_name']);
		$first_name = mysqli_real_escape_string($con,$first_name);
		$last_name = stripslashes($_REQUEST['last_name']);
		$last_name = mysqli_real_escape_string($con,$last_name);
		

		$created_at = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, first_name, last_name, created_at) VALUES ('$username', '".sha1($password)."', '$first_name', '$last_name', '$created_at')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input type="text" name="first_name" placeholder="Firstname" required />
<input type="text" name="last_name" placeholder="Lastname" required />
<input type="submit" name="submit" value="Register" />
</form>
<br /><br />
<a href="/">Github Code Link</a> <br /><br />
</div>
<?php } ?>
</body>
</html>
