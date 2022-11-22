<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= " ";
$db = "phplogin"


// Create connection

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT* FROM user WHERE username = '$username' AND password = '$password'"
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password' == $password]{
    echo "Welcome ". $username." you are successfully logged in!";
}else {
    echo "<script>alert ('Check your credentials')</script>";
    echo "<script>location.replace('login.html')</script>";

})


?>