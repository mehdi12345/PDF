<?php
require_once __DIR__ . '/vendor/autoload.php';
if(isset($_POST['submit'])){
 $BILLET1 = $_POST['billet1'];
 $BILLET = $_POST['billet'];
 $PASSPORT=$_POST['passport'];
 $soussigné=$_POST['soussigné'];
 $jour=$_POST['jour'];
 $mois=$_POST['mois'];
 $annee=$_POST['annee'];
 $né=$annee."-".$mois."-".$jour;
 $a=$_POST['a'];
 $citoyenneté=$_POST['citoyenneté'];
 $ville=$_POST['ville'];
 $codeone=$_POST['codeone'];
 $rue=$_POST['rue'];
 $nr=$_POST['nr'];
 $appartement=$_POST['appartement'];
 $route=$_POST['route'];
 $transports=$_POST['transports'];
 $conditions=$_POST['conditions'];
 $trouve=$_POST['trouve'];
 $raisons=$_POST['raisons'];
 $adresse=$_POST['adresse'];
 $Commun=$_POST['Commun'];
 $code=$_POST['code'];
 $piazza=$_POST['piazza'];
 $n=$_POST['n'];
 $intérieur=$_POST['intérieur'];
 $À=$_POST['À'];
 $transport=$_POST['transport'];
 $type=$_POST['type'];
 $marque=$_POST['marque'];
 $immatriculation=$_POST['immatriculation'];
 $NameVehicule=$_POST['véhiculeName'];
$fixe=$_POST['fixe'];
$privé=$_POST['privé'];
$date=$_POST['date'];
$host="localhost:3306";
$user="gnvtangermed_user";
$password="azerty@987";
$dbName="gnvtangermed_passport";
$conn=mysqli_connect($host,$user,$password,$dbName);

$sql="UPDATE donnees SET billet='$BILLET',passport='$PASSPORT',soussigne='$soussigné',ne='$né',a='$a',citoyennete='$citoyenneté',ville='$ville',codeone='$codeone',rue='$rue',nr='$nr',appartement='$appartement',route='$route',conditions='$conditions',trouve='$trouve',raisons='$raisons',adresse='$adresse',Commun='$Commun',code='$code',piazza='$piazza',n='$n',interieur='$intérieur',Aa='$À',transport='$transport',type='$type',marque='$marque',immatriculation='$immatriculation',nameveh='$NameVehicule',fixe='$fixe',prive='$privé',date='$date' WHERE billet='$BILLET1'";
$query=mysqli_query($conn,$sql);

mysqli_close($conn);
header('location:showUsers.php');
}
else{
    header('location:showUsers.php');
}