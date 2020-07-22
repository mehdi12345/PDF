<?php
session_start();
if($_SESSION["password"]=="user951" && $_SESSION["name"]=="admin123"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <style>
        .container{
            transform: translate(-50%,-50%);
            position: absolute;
            top: 50%;
            left: 50%;
            border: 1px solid black;
        }
    </style>
<div class="container">
    <div style="height: 20px;"></div>
    <form action="bateau.php" method="post">
    <div class="form-group" >
            <label for="route">Route maritime:</label>
            <input type="text" class="form-control" id="route" name="route" placeholder="route maritime"> <br>
            <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
            
          </div></form>
        </div>
</body>
</html>
<?php
}
else{
  header('location:login.php');
}
?>