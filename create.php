<?php
include 'connection.php';
if (isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$sql = "INSERT INTO users(fname,lname,email,password,gender) VALUES ('$fname','$lname','$email','$password','$gender')";

$result = $conn->query($sql);
if ($result == true) {
    echo 'New record created raphy';
}
else {
    echo 'Error bro correct please:'.$sql.'<br>'.$conn->error;
}
$conn->close();
}


?>
<html>
    <a class="btn btn-info" href="signup.html"><br><br>backed</a>
    <a class="btn btn-info" href="read.php"><br><br>view record from database</a>
</html>