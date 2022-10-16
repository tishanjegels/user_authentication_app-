<?php
if ($_POST)
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="auth";
    $usernam=$_POST['username'];
    $password=$_POST['password']


}
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h1>Sign-In</h1>

<div>
    <label>Username:</label>
    <input type="text" name="username" required>
</div>

<div>
    <label>Password:</label>
    <input type="text" name="password" required>
</div>

<div>
    <input type="submit" value="login">
</div>

</body>
</html> 