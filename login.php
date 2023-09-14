<?php

$server="localhost";
$user="root";
$psw="";
$db="kasus";
$email=$_POST["email"];
$password=$_POST["password"];
$koneksi=mysqli_connect($server,$user,$psw,$db);

$sql="select * from login where email= '$email' and password= '$password'";
$data=mysqli_query($koneksi,$sql);
$d=mysqli_num_rows($data);

if ($d>0)
{
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("location:dashboard.php");
}
else
{
    header("location:index.php");
}

?>