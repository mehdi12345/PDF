<?php
require_once __DIR__ . '/vendor/autoload.php';
if(isset($_POST['submit'])){
 $BILLET = $_POST['billet'];
 $PASSPORT=$_POST['passport'];
 $soussigné=$_POST['soussigne'];
 $né=$_POST['ne'];
 $a=$_POST['a'];
 $citoyenneté=$_POST['citoyennete'];
 $ville=$_POST['ville'];
 $codeone=$_POST['codeone'];
 $rue=$_POST['rue'];
 $nr=$_POST['nr'];
 $appartement=$_POST['appartement'];
 $routes=$_POST['routes'];
 $transports=$_POST['transports'];
 $conditions=$_POST['conditions'];
 $trouve=$_POST['trouve'];
 $raisons=$_POST['raisons'];
 $adresse=$_POST['adresse'];
 $Commun=$_POST['Commun'];
 $code=$_POST['code'];
 $piazza=$_POST['piazza'];
 $n=$_POST['n'];
 $intérieur=$_POST['interieur'];
 $À=$_POST['Aa'];
 $transport=$_POST['transport'];
 $type=$_POST['type'];
 $marque=$_POST['marque'];
 $immatriculation=$_POST['immatriculation'];
 $NameVehicule=$_POST['nameveh'];
$fixe=$_POST['fixe'];
$privé=$_POST['prive'];
$date=$_POST['date'];
$pdf=new \Mpdf\Mpdf();
if(empty($soussigné)){
    $soussigné='____________________________________';
}
if(empty($né)){
    $né='______/______/______';
}
if(empty($a)){
    $a='_______________________';
}
if(empty($citoyenneté)){
    $citoyenneté='_____________________________';
}
if(empty($ville)){
    $ville='_________________________';
}
if(empty($rue)){
    $rue='________________________________________';
}
if(empty($transport)){
    $transport='___________';
}
if(empty($raisons)){
    $raisons='___________';
}
if(empty($piazza)){
    $piazza='______________________________________________________';
}
if(empty($n)){
    $n='___________ ';
}
if(empty($intérieur)){
    $intérieur='_______ ';
}
if(empty($Commun)){
    $Commun='________________________________________________________ ';
}
if(empty($code)){
    $code='_________________ ';
}
if(empty($À)){
    $À='___________________ ';
}

if(empty($fixe)){
    $fixe='_______________________';
}
if(empty($privé)){
    $privé='__________________ ';
}
if(empty($date)){
    $date='_________________________ ';
}
if(empty($trouve)){
    $trouve='________________________________________________________________________________________';
}
if(empty($type)){
    $type='__________________ ';
}
if(empty($marque)){
    $marque='__________________ ';
}
if(empty($immatriculation)){
    $immatriculation='__________________ ';
}
if(empty($séjours)){
    $séjours='_____________________';
}
if(empty($route)){
    $route='___________________________________________';
}
if(empty($conditions)){
    $conditions='_______________________________________________________';
}
if($conditions=="A"){
    $A="<b style='color:red;font-width:bolder'>-----></b> <b style='color:green'> ";
}
if($conditions=="B"){
    $B="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($conditions=="C"){
    $C="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($conditions=="D"){
    $D="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($conditions=="E"){
    $E="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($conditions=="F"){
    $F="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($conditions=="G"){
    $G="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($conditions=="H"){
    $H="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($conditions=="I"){
    $I="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($conditions=="J"){
    $J="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($conditions=="K"){
    $K="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($conditions=="L"){
    $L="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($trouve=="a"){
    $aa="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($trouve=="b"){
    $b="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($trouve=="c"){
    $c="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($trouve=="d"){
    $d="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($trouve=="e"){
    $e="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($trouve=="f"){
    $f="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($trouve=="g"){
    $g="<b style='color:red'>-----></b> <b style='color:green'> ";
}
if($trouve=="h"){
    $h="<b style='color:red'>-----></b> <b style='color:green'> ";
}
$pdf->writeHTML(" <h4>GN-".$BILLET."</h4>
<div style='text-align:center;font-size:11px'><b><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</b></u></div>
<div style='text-align:center;font-size:16px'><b><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger</b> </u></div>
<div style='text-align:center;font-size:17px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div><br><br>
<p style='font-size:12px'>Il/la sottoscritto/a   <b style='color:blue'>".$soussigné."</b>, nato/a il    <b style='color:blue'>".$né."</b> a <b style='color:blue'>".$a."</b>, cittadinanza   <b style='color:blue'>".$citoyenneté." </b>, residente a   <b style='color:blue'>".$ville." </b>, via  <b style='color:blue'>".$rue." ".$nr." ". $appartement." </b>, consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 2 del decreto-legge 16 maggio 2020, n. 33<br><br>
<h3 style='text-align:center;front-size:18px'>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ </h3>
<p style='font-size:12px'>(conscient des sanctions prévuesencas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 2 du décret-16 Mailoi 2020, n.33)<br><br></p>
<h3 style='text-align:center;front-size:18px'>DÉCLARE SOUS SA RESPONSABILITÉ </h3>
<p style='font-size:12px'>1) di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;<br><br>
2) di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;<br><br>
3) di entrare in Italia dalla seguente località estera <b style='color:blue'>".$citoyenneté." </b>, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);<br>
<b style='color:blue'>".$routes."</b><br><br>
4)di avere effettuato negli ultimi 14 giorni soggiorni / transiti nei seguenti Paesi e territori: <br>
<b style='color:blue'>".$adresse." </b><br><br>
5) il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);<br><br>
".$A."A) equipaggio dei mezzi di trasporto;</b>  <br><br>
".$B."B) personale viaggiante;</b> <br><br>
".$C."C) cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro; </b><br><br>
".$D."D) personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18;</b><br><br>
".$E."E) lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora;</b><br><br>
".$F."F) personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> <br><br>
".$G."G) funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b><br><br>
".$H."H) alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana;</b><br><br></p>
<h4>GN-".$BILLET."</h4>
<p style='font-size:12px'>".$I."I) permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b><br><br>
".$J."J) transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: 36 ore);</b> <br><br>
".$K."K) spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia;</b><br><br>
".$L."L) nessuno dei casi sopra indicati;Aucundescas ci-dessus. <br><br>

Se è stata indicata la lettera L), compilare anche le voci seguenti:</b><br><br>

6) che il dichiarante si trova in una delle seguenti condizioni:<br><br>
".$aa."A) è cittadino/a di Stato membro dell’Unione europea/Stato parte dell’accordo di Schengen/Regno Unito/Andorra/Monaco/San Marino/Vaticano; </b><br><br>
".$b."B)è residente in uno Stato membro dell'Unione europea/Stato parte dell’accordo di Schengen/Regno Unito/Andorra/Monaco/San Marino/Vaticano; </b><br><br>
".$c."C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato membro dell’Unione europea/Stato parte dell’accordo di Schengen/Regno Unito/Andorra/Monaco/San Marino/Vaticano;</b><br><br>
".$d."D) è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); </b><br><br>
".$e."E) è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b><br><br>
".$f."F) è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C);</b><br><br>
".$g."G) è residente in uno dei seguenti Paesi: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; </b><br><br>
".$h."H) si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità):</b> <br>
<b style='color:blue'>".$raisons."</b>
<br><br>
7) che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;<br>
piazza/via<b style='color:blue'>".$piazza."</b> n. <b style='color:blue'>".$n."</b> <br>
interno <b style='color:blue'>".$intérieur."</b><br>
Comune   <b style='color:blue'>".$Commun."</b> <br>
CAP <b style='color:blue'>".$code."</b> <br>
Presso: <b style='color:blue'>".$À."</b> <br><br> 
8) che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio: <br>
mezzi di trasporto : <b style='color:blue'> ".$transport."</b> tipo di veicolo: <b style='color:blue'>".$type."</b> marca : <b style='color:blue'>".$marque."</b> targa : <b style='color:blue'>".$immatriculation."</b> Nome della proprietà del veicolo:  <b style='color:blue'>".$NameVehicule."</b><br><br>
9) che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti: <br> <br> 

fisso: <b style='color:blue'>".$fixe."</b> mobile: <b style='color:blue'>".$privé."</b>  <br> <br> 

Luogo, data e ora della presente dichiarazione;<b style='color:blue'> TANGER le ".$date."</b> <br><br>
<b style='color:blue'>".$PASSPORT."</b>
<br>

Firma del dichiarante; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;		per il Vettore;
</p>
");
$pdf->output();}
else{
    header('location:Form.html');
}
?>