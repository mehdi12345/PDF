<?php
session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $admin="admin123";
    $pass="user951";
    if($username==$admin){
        if($password==$pass){
            $_SESSION["name"] = $admin ;
            $_SESSION["password"] = $pass ;
            header('location:showUsers.php');
            exit();
        }else{
            header('location:login.php?error=usernameOrPasswordIncorrect');
            exit(); 
        }
      
        
    }
    
    else{
        header('location:login.php?error=usernameOrPasswordIncorrect');
        exit();
    }
    
