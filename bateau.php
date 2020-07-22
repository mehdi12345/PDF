<?php
if(isset($_POST['submit'])){
    $route=$_POST['route'];
    $host="localhost:3306";
$user="gnvtangermed_user";
$password="azerty@987";
$dbName="gnvtangermed_passport";
$conn=mysqli_connect($host,$user,$password,$dbName);
/*$sql="ALTER TABLE donnees DROP COLUMN routes";*/
$sql1="ALTER TABLE donnees MODIFY routes varchar(255) DEFAULT '$route';";
/*$query=mysqli_query($conn,$sql);*/
$query1=mysqli_query($conn,$sql1);
mysqli_close($conn);
header('location:modifierBateau.php');
}
else{
    header('location:modifierBateau.php');
}
?>