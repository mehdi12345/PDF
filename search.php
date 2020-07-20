<?php
if(isset($_POST['submit'])){
    $word=$_POST['search'];
    header('location:showUsers.php?search='.$word);
}else{
    header('location:showUsers.php');
}