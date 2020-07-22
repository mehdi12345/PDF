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
    <div style="height: 20px;"></div>
    <center><h2>Informations</h2></center>

    <div style="height: 50px;"></div>
    <div class="container">
  <form action="search.php" method="post">
    <div class="row">
    <div class="col-11"><input type="text" class="form-control" name="search" placeholder="entrer le numéro de billet" ></div>
    <div class="col-1"><button type="submit" name="submit" class="btn btn-primary">search</button></div>
    </div>
  </form>
  </div>
    <div style="height: 50px;"></div>

    <style>
        .col-6{
            border: 1px solid black;
        }
    </style>
<?php 
$host = "localhost:3306";
$user = "gnvtangermed_user";
$password = "azerty@987";
$dbName = "gnvtangermed_passport";
$conn = mysqli_connect($host, $user, $password, $dbName);
if(isset($_GET['search'])){
  if($_GET['search']==null){
    $sql = "SELECT * FROM donnees";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        ?>
        <div class="container">
        <table class="table table-striped" >
        <tr>
          <th scope="col">id</th>
          <th scope="col">billet</th>
          <th scope="col">passport</th>
          <th scope="col">soussigné</th>
          <th scope="col">numéro fixe</th>
          <th scope="col">numéro mobile</th>
          <th scope="col">date</th>
          <th scope="col">charger</th>
        </tr>
        <?php 
      while($row = mysqli_fetch_assoc($result)) {
          ?>
          
        <tr>
            <td scope="col"><?php echo $row['id'] ?></td>
            <td scope="col"><?php echo $row['billet'] ?></td>
            <td scope="col"><?php echo $row['passport'] ?></td>
            <td scope="col"><?php echo $row['soussigne'] ?></td>
            <td scope="col"><?php echo $row['fixe'] ?></td>
            <td scope="col"><?php echo $row['prive'] ?></td>
            <td scope="col"><?php echo $row['date'] ?></td>
            <td scope="col"><form action="PDF.php" method="post">
                <input type="hidden" value="<?php echo $row['billet'] ?>" name="billet">
                <input type="hidden" value="<?php echo $row['passport'] ?>" name="passport">
                <input type="hidden" value="<?php echo $row['soussigne'] ?>" name="soussigne">
                <input type="hidden" value="<?php echo $row['ne'] ?>" name="ne">
                <input type="hidden" value="<?php echo $row['a'] ?>" name="a">
                <input type="hidden" value="<?php echo $row['citoyennete'] ?>" name="citoyennete">
                <input type="hidden" value="<?php echo $row['ville'] ?>" name="ville">
                <input type="hidden" value="<?php echo $row['codeone'] ?>" name="codeone">
                <input type="hidden" value="<?php echo $row['rue'] ?>" name="rue">
                <input type="hidden" value="<?php echo $row['nr'] ?>" name="nr">
                <input type="hidden" value="<?php echo $row['appartement'] ?>" name="appartement">
                <input type="hidden" value="<?php echo $row['routes'] ?>" name="routes">
                <input type="hidden" value="<?php echo $row['transports'] ?>" name="transports">
                <input type="hidden" value="<?php echo $row['conditions'] ?>" name="conditions">
                <input type="hidden" value="<?php echo $row['trouve'] ?>" name="trouve">
                <input type="hidden" value="<?php echo $row['raisons'] ?>" name="raisons">
                <input type="hidden" value="<?php echo $row['adresse'] ?>" name="adresse">
                <input type="hidden" value="<?php echo $row['Commun'] ?>" name="Commun">
                <input type="hidden" value="<?php echo $row['code'] ?>" name="code">
                <input type="hidden" value="<?php echo $row['piazza'] ?>" name="piazza">
                <input type="hidden" value="<?php echo $row['n'] ?>" name="n">
                <input type="hidden" value="<?php echo $row['interieur'] ?>" name="interieur">
                
                <input type="hidden" value="<?php echo $row['Aa'] ?>" name="Aa">
                <input type="hidden" value="<?php echo $row['transport'] ?>" name="transport">
                <input type="hidden" value="<?php echo $row['type'] ?>" name="type">
                <input type="hidden" value="<?php echo $row['marque'] ?>" name="marque">
                <input type="hidden" value="<?php echo $row['immatriculation'] ?>" name="immatriculation">
                <input type="hidden" value="<?php echo $row['fixe'] ?>" name="fixe">
                <input type="hidden" value="<?php echo $row['prive'] ?>" name="prive">
                <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
                <button class="btn btn-primary" type="submit" name="submit">PDF</button>
                </form></td>
        </tr>
            
                
           
          <?php
        
      }?>
      </table>
      <?php
    } else {
      echo "0 results";
    }
    ?>
            </div>
    
    <?php
    mysqli_close($conn);}
  else{$data=$_GET['search'];
  $sql = "SELECT * FROM donnees where billet='$data'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
      ?>
      <div class="container">
      <table class="table table-striped" >
      <tr>
        <th scope="col">id</th>
        <th scope="col">billet</th>
        <th scope="col">passport</th>
        <th scope="col">soussigné</th>
        <th scope="col">numéro fixe</th>
        <th scope="col">numéro mobile</th>
        <th scope="col">date</th>
        <th scope="col">charger</th>
      </tr>
      <?php 
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        
      <tr>
          <td scope="col"><?php echo $row['id'] ?></td>
          <td scope="col"><?php echo $row['billet'] ?></td>
          <td scope="col"><?php echo $row['passport'] ?></td>
          <td scope="col"><?php echo $row['soussigne'] ?></td>
          <td scope="col"><?php echo $row['fixe'] ?></td>
          <td scope="col"><?php echo $row['prive'] ?></td>
          <td scope="col"><?php echo $row['date'] ?></td>
          <td scope="col"><form action="PDF.php" method="post">
              <input type="hidden" value="<?php echo $row['billet'] ?>" name="billet">
              <input type="hidden" value="<?php echo $row['passport'] ?>" name="passport">
              <input type="hidden" value="<?php echo $row['soussigne'] ?>" name="soussigne">
              <input type="hidden" value="<?php echo $row['ne'] ?>" name="ne">
              <input type="hidden" value="<?php echo $row['a'] ?>" name="a">
              <input type="hidden" value="<?php echo $row['citoyennete'] ?>" name="citoyennete">
              <input type="hidden" value=<?php echo $row['residant'] ?> name="residant">
              <input type="hidden" value=<?php echo $row['emplacement'] ?> name="emplacement">
              <input type="hidden" value="<?php echo $row['transport'] ?>" name="transport">
              <input type="hidden" value="<?php echo $row['type'] ?>" name="type">
              <input type="hidden" value="<?php echo $row['immatriculation'] ?>" name="immatriculation">
              <input type="hidden" value="<?php echo $row['routes'] ?>" name="routes">
              <input type="hidden" value="<?php echo $row['transports'] ?>" name="transports">
              <input type="hidden" value="<?php echo $row['conditions'] ?>" name="conditions">
              <input type="hidden" value="<?php echo $row['trouve'] ?>" name="trouve">
              <input type="hidden" value="<?php echo $row['raisons'] ?>" name="raisons">
              <input type="hidden" value=<?php echo $row['sejours'] ?> name="sejours">
              <input type="hidden" value="<?php echo $row['adresse'] ?>" name="adresse">
              <input type="hidden" value="<?php echo $row['piazza'] ?>" name="piazza">
              <input type="hidden" value="<?php echo $row['n'] ?>" name="n">
              <input type="hidden" value="<?php echo $row['interieur'] ?>" name="interieur">
              <input type="hidden" value="<?php echo $row['Commun'] ?>" name="Commun">
              <input type="hidden" value="<?php echo $row['code'] ?>" name="code">
              <input type="hidden" value="<?php echo $row['Aa'] ?>" name="Aa">
              <input type="hidden" value=<?php echo $row['vehicule'] ?> name="vehicule">
              <input type="hidden" value="<?php echo $row['fixe'] ?>" name="fixe">
              <input type="hidden" value="<?php echo $row['prive'] ?>" name="prive">
              <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
              <button class="btn btn-primary" type="submit" name="submit">PDF</button>
              </form></td>
      </tr>
          
              
         
        <?php
      
    }?>
    </table>
    <?php
  } else {
    echo "0 results";
  }
  ?>
          </div>
  
  <?php
  mysqli_close($conn);}}
else{
  $sql = "SELECT * FROM donnees";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    ?>
    <div class="container">
    <table class="table table-striped" >
    <tr>
      <th scope="col">id</th>
      <th scope="col">billet</th>
      <th scope="col">passport</th>
      <th scope="col">soussigné</th>
      <th scope="col">numéro fixe</th>
      <th scope="col">numéro mobile</th>
      <th scope="col">date</th>
      <th scope="col">modifier</th>
      <th scope="col">charger</th>
    </tr>
    <?php 
  while($row = mysqli_fetch_assoc($result)) {
      ?>
      
    <tr>
        <td scope="col"><?php echo $row['id'] ?></td>
        <td scope="col"><?php echo $row['billet'] ?></td>
        <td scope="col"><?php echo $row['passport'] ?></td>
        <td scope="col"><?php echo $row['soussigne'] ?></td>
        <td scope="col"><?php echo $row['fixe'] ?></td>
        <td scope="col"><?php echo $row['prive'] ?></td>
        <td scope="col"><?php echo $row['date'] ?></td>
        <td scope="col"><form action="modifier.php" method="post">
        <input type="hidden" value="<?php echo $row['billet'] ?>" name="billet">
            <input type="hidden" value="<?php echo $row['passport'] ?>" name="passport">
            <input type="hidden" value="<?php echo $row['soussigne'] ?>" name="soussigne">
            <input type="hidden" value="<?php echo $row['ne'] ?>" name="ne">
            <input type="hidden" value="<?php echo $row['a'] ?>" name="a">
            <input type="hidden" value="<?php echo $row['citoyennete'] ?>" name="citoyennete">
            <input type="hidden" value="<?php echo $row['ville'] ?>" name="ville">
            <input type="hidden" value="<?php echo $row['codeone'] ?>" name="codeone">
            <input type="hidden" value="<?php echo $row['rue'] ?>" name="rue">
            <input type="hidden" value="<?php echo $row['nr'] ?>" name="nr">
            <input type="hidden" value="<?php echo $row['appartement'] ?>" name="appartement">
            <input type="hidden" value="<?php echo $row['routes'] ?>" name="routes">
            <input type="hidden" value="<?php echo $row['transports'] ?>" name="transports">
            <input type="hidden" value="<?php echo $row['conditions'] ?>" name="conditions">
            <input type="hidden" value="<?php echo $row['trouve'] ?>" name="trouve">
            <input type="hidden" value="<?php echo $row['raisons'] ?>" name="raisons">
            <input type="hidden" value="<?php echo $row['adresse'] ?>" name="adresse">
            <input type="hidden" value="<?php echo $row['Commun'] ?>" name="Commun">
            <input type="hidden" value="<?php echo $row['code'] ?>" name="code">
            <input type="hidden" value="<?php echo $row['piazza'] ?>" name="piazza">
            <input type="hidden" value="<?php echo $row['n'] ?>" name="n">
            <input type="hidden" value="<?php echo $row['interieur'] ?>" name="interieur">
            <input type="hidden" value="<?php echo $row['Aa'] ?>" name="Aa">
            <input type="hidden" value="<?php echo $row['transport'] ?>" name="transport">
            <input type="hidden" value="<?php echo $row['type'] ?>" name="type">
            <input type="hidden" value="<?php echo $row['marque'] ?>" name="marque">
            <input type="hidden" value="<?php echo $row['immatriculation'] ?>" name="immatriculation">
            <input type="hidden" value=<?php echo $row['nameveh'] ?> name="nameveh">
            <input type="hidden" value="<?php echo $row['fixe'] ?>" name="fixe">
            <input type="hidden" value="<?php echo $row['prive'] ?>" name="prive">
            <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
        <button class="btn btn-primary" type="submit" name="submit">modifier</button>
</form>
        <td scope="col"><form action="PDF.php" method="post">
            <input type="hidden" value="<?php echo $row['billet'] ?>" name="billet">
            <input type="hidden" value="<?php echo $row['passport'] ?>" name="passport">
            <input type="hidden" value="<?php echo $row['soussigne'] ?>" name="soussigne">
            <input type="hidden" value="<?php echo $row['ne'] ?>" name="ne">
            <input type="hidden" value="<?php echo $row['a'] ?>" name="a">
            <input type="hidden" value="<?php echo $row['citoyennete'] ?>" name="citoyennete">
            <input type="hidden" value="<?php echo $row['ville'] ?>" name="ville">
            <input type="hidden" value="<?php echo $row['codeone'] ?>" name="codeone">
            <input type="hidden" value="<?php echo $row['rue'] ?>" name="rue">
            <input type="hidden" value="<?php echo $row['nr'] ?>" name="nr">
            <input type="hidden" value="<?php echo $row['appartement'] ?>" name="appartement">
            <input type="hidden" value="<?php echo $row['routes'] ?>" name="routes">
            <input type="hidden" value="<?php echo $row['transports'] ?>" name="transports">
            <input type="hidden" value="<?php echo $row['conditions'] ?>" name="conditions">
            <input type="hidden" value="<?php echo $row['trouve'] ?>" name="trouve">
            <input type="hidden" value="<?php echo $row['raisons'] ?>" name="raisons">
            <input type="hidden" value="<?php echo $row['adresse'] ?>" name="adresse">
            <input type="hidden" value="<?php echo $row['Commun'] ?>" name="Commun">
            <input type="hidden" value="<?php echo $row['code'] ?>" name="code">
            <input type="hidden" value="<?php echo $row['piazza'] ?>" name="piazza">
            <input type="hidden" value="<?php echo $row['n'] ?>" name="n">
            <input type="hidden" value="<?php echo $row['interieur'] ?>" name="interieur">
            <input type="hidden" value="<?php echo $row['Aa'] ?>" name="Aa">
            <input type="hidden" value="<?php echo $row['transport'] ?>" name="transport">
            <input type="hidden" value="<?php echo $row['type'] ?>" name="type">
            <input type="hidden" value="<?php echo $row['marque'] ?>" name="marque">
            <input type="hidden" value="<?php echo $row['immatriculation'] ?>" name="immatriculation">
            <input type="hidden" value=<?php echo $row['nameveh'] ?> name="nameveh">
            <input type="hidden" value="<?php echo $row['fixe'] ?>" name="fixe">
            <input type="hidden" value="<?php echo $row['prive'] ?>" name="prive">
            <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
            <button class="btn btn-primary" type="submit" name="submit">PDF</button>
            </form></td>
    </tr>
        
            
       
      <?php
    
  }?>
  </table>
  <?php
} else {
  echo "0 results";
}
?>
        </div>
<?php
mysqli_close($conn);}
?>
</body>
</html>
<?php
}
else{
  header('location:login.php');
}
?>
