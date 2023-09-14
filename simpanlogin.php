<?php
$server="localhost";
$user="root";
$password="";
$db="kasus";
$koneksi=mysqli_connect($server,$user,$password,$db);

$email=$_POST['email'];
$password=$_POST['password'];


$sql="insert into login (email,password) values ('$email','$password')";
$simpan= mysqli_query($koneksi,$sql);
if($simpan){
    header('location: dashboard.php');

}else{
    echo mysqli_error($koneksi);
}
?>
