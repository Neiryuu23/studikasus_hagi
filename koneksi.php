<?php
$server="localhost";
$user="root";
$password="";
$db="kasus";
$koneksi=mysqli_connect($server,$user,$password,$db);
if(!$koneksi){

    "Connection:Failed".mysqli_connect_error();

}
?>