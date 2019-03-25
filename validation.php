 <?php
session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'php_practice');

$name = $_POST['user'];
$pass = $_POST['Password'];

$query = "select * from user where Username='$name' && Password ='$pass'";
$result = mysqli_query($con,$query);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$_SESSION['username']=$name;
	header('location:home.php');
	
}
else{
 	header('location:login.php');

}

	







 ?>