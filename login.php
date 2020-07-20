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
            position: absolute;
            border:1px solid black;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
        }
    </style>
    
    <div class="container">
    <div style="height: 20px;"></div>

    <center><h2>login</h2></center>
    <form action="signIn.php" method="post">
    <div class="form-group">
    <label for="username">username:</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Entrer votre username">
  </div>
    <div class="form-group">
    <label for="password">password:</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Entrer votre password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">submit</button>
    </form>
    <div style="height: 20px;"></div>
    </div>
</body>
</html>