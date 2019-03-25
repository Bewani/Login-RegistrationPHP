 <?php
session_start();
header('location:login.php')

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'php_practice');

$name = $_POST['user'];
$pass = $_POST['Password'];

$query = "select * from user where Username='$name' ";
$result = mysqli_query($con,$query);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "Username already taken";
}
else{
	$reg ="insert into user(Username,Password) values ('$name','$pass')";
	mysqli_query($con,$reg);
	echo "Registration successful";

}

	







 ?>