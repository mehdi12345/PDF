<?php
     
     
     
     $conn=mysqli_connect("localhost:3306","sevensea_user","azerty@987","sevensea_passport");
 /* CREATE TABLE donnees(
                     billet VARCHAR(255),
                     passport VARCHAR(255),
                     soussigne VARCHAR(255),
                     ne VARCHAR(255),
                     a VARCHAR(255),
                     citoyennete VARCHAR(255),
                     ville VARCHAR(255),
                     codeone VARCHAR(255),
                     rue VARCHAR(255),
                     nr VARCHAR(255),
                     appartement VARCHAR(255),
                     
                     route VARCHAR(255),
                     conditions VARCHAR(255),
                     trouve VARCHAR(255),
                     raisons VARCHAR(255),
                     adresse VARCHAR(255),
                     Commun VARCHAR(255),
                     code VARCHAR(255),
                     piazza VARCHAR(255),
                     n VARCHAR(255),
                     interieur VARCHAR(255),
                     
                     Aa VARCHAR(255),
                     transport VARCHAR(255),
                     type VARCHAR(255),
                     marque VARCHAR(255),
                     immatriculation VARCHAR(255),
                     nameveh VARCHAR(255),
                     fixe VARCHAR(255),
                     prive VARCHAR(255),
                     date VARCHAR(255)
                    )*/ 
                    /*<?php
require_once __DIR__ . '/vendor/autoload.php';
if(isset($_POST['submit'])){
 $BILLET = $_POST['billet'];
 $PASSPORT=$_POST['passport'];
 $soussigné=$_POST['soussigné'];
 $né=$_POST['né'];
 $a=$_POST['a'];
 $citoyenneté=$_POST['citoyenneté'];
 $résidant=$_POST['résidant'];
 $emplacement=$_POST['emplacement'];
 $transport=$_POST['transport'];
 $type=$_POST['type'];
 $immatriculation=$_POST['immatriculation'];
 $route=$_POST['route'];
 $transports=$_POST['transports'];
 $conditions=$_POST['conditions'];
 $trouve=$_POST['trouve'];
 $raisons=$_POST['raisons'];
 $séjours=$_POST['séjours'];
 $adresse=$_POST['adresse'];
 $piazza=$_POST['piazza'];
 $n=$_POST['n'];
 $intérieur=$_POST['intérieur'];
 $Commun=$_POST['Commun'];
 $code=$_POST['code'];
 $À=$_POST['À'];
 $véhicule=$_POST['véhicule'];
$fixe=$_POST['fixe'];
$privé=$_POST['privé'];
$date=$_POST['date'];
$host="localhost:3306";
$user="gnvtangermed_user";
$password="azerty@987";
$dbName="gnvtangermed_passport";
$conn=mysqli_connect($host,$user,$password,$dbName);

$sql="INSERT INTO donnees VALUES ('$BILLET','$PASSPORT','$soussigné','$né','$a','$citoyenneté','$résidant','$emplacement','$transport','$type','$immatriculation','$route','$transports','$conditions','$trouve','$raisons','$séjours','$adresse','$piazza','$n','$intérieur','$Commun','$code','$À','$véhicule','$fixe','$privé','$date');";
$query=mysqli_query($conn,$sql);

mysqli_close($conn);
$pdf=new \Mpdf\Mpdf();
if(empty($soussigné)){
    $soussigné='____________________________________';
}
if(empty($né)){
    $né='______/______/______';
}
if(empty($a)){
    $a='_____________________ (______)';
}
if(empty($citoyenneté)){
    $citoyenneté='_____________________________';
}
if(empty($résidant)){
    $résidant='________________________ (____)';
}
if(empty($emplacement)){
    $emplacement='________________________________________';
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
    $Commun='________________________________________________________(______) ';
}
if(empty($code)){
    $code='_________________ ';
}
if(empty($À)){
    $À='__________________________________________________________________________________ ';
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
    $trouve='_________________________________________________________________________________________________ _________________________________________________________________________________________________ _________________________________________________________________________________________________ ';
}
if(empty($transports)){
    $transports='____________________________________________________________________________________________________________________________________________________________________________________________________ ';
}
if(empty($séjours)){
    $séjours='_________________________________________________________________________________________________';
}
if(empty($route)){
    $route='_____________________________________________________________________________________________________________________';
}
if(empty($conditions)){
    $conditions='_____________________________________________________________________________________________________________________';
}
if($conditions=="équipe de transport"){
    $A='OUI';
}
if($conditions=="Personnel itinérant"){
    $B='OUI';
}
if($conditions=="Les citoyens et résidents de l'Union européenne"){
    $C='OUI';
}
if($conditions=="Personnel de santé"){
    $D='OUI';
}
if($conditions=="Des travailleurs frontaliers"){
    $E='OUI';
}
if($conditions=="le personnel d'entreprises"){
    $F='OUI';
}
if($conditions=="Des fonctionnaires et agents"){
    $G='OUI';
}
if($conditions=="Des élèves et étudiants"){
    $H='OUI';
}
if($conditions=="Permanence en Italie"){
    $I='OUI';
}
if($conditions=="Transit sur le territoire national"){
    $J='OUI';
}
if($conditions==" Deplacement en provenance ou à destination des États membres de l'Union européenne"){
    $K='OUI';
}
if($conditions=="aucun des cas ci-dessus"){
    $L='OUI';
}
if($trouve=="est citoyen d'un État membre de l'Union européenne "){
    $aa='OUI';
}
if($trouve=="réside dans un État membre de l'Union européenne"){
    $b='OUI';
}
if($trouve=="marié ou uni civilement ou cohabitant avec un citoyen d'un État membre de l'Union européenne"){
    $c='OUI';
}
if($trouve=="est un descendant direct"){
    $d='OUI';
}
if($trouve=="c'est une personne à charge directe descendante ou ascendante"){
    $e='OUI';
}
if($trouve=="est un membre de la famille à charge ou un partenaire cohabitant"){
    $f='OUI';
}
if($trouve=="réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay;"){
    $g='OUI';
}
if($trouve=="déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux"){
    $h='OUI';
}
$pdf->writeHTML(" Numéro Billet :$BILLET <br><br>
<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div><br><br>
<b>Il/la sottoscritto/a </b>(le soussigné)  <b style='color:blue'>".$soussigné."</b>,<b> nato/a il </b> (né le)  <b style='color:blue'>".$né."</b> <b style='color:blue'>a</b>(à) <b style='color:blue'>".$a."</b>, <b>cittadinanza </b> (citoyenneté) <b style='color:blue'>".$citoyenneté." </b>,<b> residente a </b> (résident à) <b style='color:blue'>".$résidant." </b>, <b>via </b>(rue) <b>".$emplacement." </b>, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 2 del decreto-legge 16 maggio 2020, n. 33</b><br><br>
<h3 style='text-align:center;front-size:18px'>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ </h3><br>
(conscient des sanctions prévuesencas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 2 du décret-16 Mailoi 2020, n.33)<br><br>
<h3 style='text-align:center;front-size:18px'>DÉCLARE SOUS SA RESPONSABILITÉ </h3><br>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;</b>(être au courant des mesures de  prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décretdu Premier ministre du 17 mai 2020);<br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3) <b>di entrare in Italia dalla seguente località estera <b style='color:blue'>".$citoyenneté." </b>, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacementétrangersuivant <b style='color:blue'>".$citoyenneté."</b>, atravers lemoyens de transportsuivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le casdestransportspublics, détailsduvol / trainoucourse sur route / route Maritime);<br>
".$route."<br>
4)<b> di avere effettuato negli ultimi 14 giorni soggiorni / transiti nei seguenti Paesi e territori;</b> (avoir effectué des séjours / transits dans les pays et territoires suivant saucours des 14 derniers jours): <br>
<b style='color:blue'>".$séjours." </b><br>
5) <b>il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione)</b>;(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto;</b>  (équipe de transport);<br><b style='color:blue'>".$A."</b><br>
B) <b>personale viaggiante;</b> (Personnel itinérant);<br><b style='color:blue'>".$B."</b><br>
C) <b>cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro; </b>(Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Citédu Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlandedu Nord entrant en Italie pour des raisons professionnelles avérées );<br><b style='color:blue'>".$C."</b><br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18;</b> (Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 dudécret-loidu 17 mars 2020, n. 18);<br><b style='color:blue'>".$D."</b><br>
E) <b>lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora;</b> (Des travailleurs frontaliers entrant et sortantduterritoire national pour des raisons avérées du travail et le retour qui en résultedans sa résidence, son domicile ou son logement);<br><b style='color:blue'>".$E."</b><br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une duréemaximale de 120 heures);<br><b style='color:blue'>".$F."</b><br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni;</b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employésconsulaires);<br><b style='color:blue'>".$G."</b><br>
H) <b>alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana;</b>(Des élèves et étudiants pour la poursuite d'un cycle d'étudesdans un État autre que celui de résidence, la maison ou le logement, oùilsretournenttousles jours ou au moins une fois par semaine );<br><b style='color:blue'>".$H."</b><br>
I)<b> permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b>( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br><b style='color:blue'>".$I."</b><br>
J)<b> transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: 36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br><b style='color:blue'>".$J."</b><br>
K) <b>spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia;</b> ( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume ,Royaume de Grande-Bretagne et d'Irlandedu Nord, Andorre, Monaco, République de Saint-Marin, État de la Citédu Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br><b style='color:blue'>".$K."</b><br>
L)<b> nessuno dei casi sopra indicati;Aucundescas ci-dessus. </b><br><br>

<b>Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a étéindiquée, remplissez également les entrées suivantes:</b><br><b style='color:blue'>".$L."</b><br>
<b style='color:blue'>".$conditions."</b> <br><br>

6) <b>che il dichiarante si trova in una delle seguenti condizioni;</b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b>è cittadino/a di Stato membro dell’Unione europea/Stato parte dell’accordo di Schengen/Regno Unito/Andorra/Monaco/San Marino/Vaticano; </b>(est citoyen d'un État membre de l'Union européenne / État partie à l'accord de Schengen / Royaume-Uni / Andorre / Monaco / Saint-Marin / Vatican);<br><b style='color:blue'>".$aa."</b><br>
B)<b>è residente in uno Stato membro dell'Unione europea/Stato parte dell’accordo di Schengen/Regno Unito/Andorra/Monaco/San Marino/Vaticano; </b>(réside dans un État membre de l'Union européenne / État partie à l'accord de Schengen / Royaume-Uni / Andorre / Monaco / Saint-Marin / Vatican);<br><b style='color:blue'>".$b."</b><br>
C) <b>coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato membro dell’Unione europea/Stato parte dell’accordo di Schengen/Regno Unito/Andorra/Monaco/San Marino/Vaticano;</b> (marié ou uni civilement ou cohabitant avec un citoyen d'un État membre de l'Union européenne / État partie à l'accord de Schengen / Royaume-Uni / Andorre / Monaco / Saint-Marin / Vatican);<br><b style='color:blue'>".$c."</b><br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); </b>( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));<br><b style='color:blue'>".$d."</b><br>
E)<b> è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br><b style='color:blue'>".$e."</b><br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C);</b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br><b style='color:blue'>".$f."</b><br>
G)<b> è residente in uno dei seguenti Paesi;</b> réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br><b style='color:blue'>".$g."</b><br>
H) <b>si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità);</b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons dudéménagementainsiqueleururgence et nécessité): <br><b style='color:blue'>".$h."</b><br>
<b style='color:blue'>".$trouve."</b> <br><br>
7)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) <b style='color:blue'>".$piazza."</b> <b>n</b>.(nr) <b style='color:blue'>".$n."</b> <br>
<b>interno</b>(nr d'appartement) <b style='color:blue'>".$intérieur."</b><br>
<b>Comune</b> (Ville)  <b style='color:blue'>".$Commun."</b> <br>
<b>CAP</b>(code postal) <b style='color:blue'>".$code."</b> <br>
<b>Presso</b>(chez): <b style='color:blue'>".$À."</b> <br>
8)<b> che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>
<b style='color:blue'>".$transports."</b><br>
9)<b> che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( quelesnuméros de téléphone pour recevoirdescommunications pendant toute la période de surveillance de la santé et d'isolementfiduciairesontlessuivants): <br> <br> 

<b>fisso</b>(fixe): <b style='color:blue'>".$fixe."</b> <b>mobile</b>: <b style='color:blue'>".$privé."</b>  <br> <br> 

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cettedéclaration) <b style='color:blue'> TANGER le ".$date."</b> <br><br>

<b>Firma del dichiarante;</b>(Signature dudéclarant) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;		<b>per il Vettore;</b>(pour le transporteur) 

");
$pdf->output();}
else{
    header('location:Form.html');
}
?>*/