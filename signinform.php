<?php
session_start();
echo $email=$_POST['inputEmail'];
echo $password=$_POST['inputPassword'];
$config_array  = parse_ini_file('/database/DBConfig.ini',true);
$host = $config_array['host'];
$userID = $config_array['userID'];
$pwd = $config_array['password'];
$db = $config_array['db'];
$connection=mysqli_connect($host,$userID,$pwd,$db);
if(!$connection){
echo "not connected";
}
else{
echo "connected";
$query="select password from userdetail where email='".$email."'";
echo $query;
$result = mysqli_query($connection,$query);
$pas=mysqli_fetch_object($result);
echo $pas->password;
if($pas->password==$password){
echo "welcome to mobile store";
$_SESSION['email']=$email;
header("Location: ./index.php");
}
else{
echo "please enter valid password";
header("Location: ./signin.php?action=delete");
}
}
?>