<?php
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
 $route=$_POST['route'];
 $transports=$_POST['transports'];
 $conditions=$_POST['conditions'];
 $trouve=$_POST['trouve'];
 $raisons=$_POST['raisons'];
 $adresse=$_POST['adresse'];
 $piazza=$_POST['piazza'];
 $n=$_POST['n'];
 $intérieur=$_POST['intérieur'];
 $Commun=$_POST['Commun'];
 $code=$_POST['code'];
 $À=$_POST['À'];
 $véhicule=$_POST['véhicule'];
$propre=$_POST['propre'];
$fixe=$_POST['fixe'];
$privé=$_POST['privé'];
$date=$_POST['date'];
$host='localhost';
$user='root';
$password='';
$dbName='passport';
$conn=mysqli_connect($host,$user,$password,$dbName);
$sql="INSERT INTO donnees(billet,passport,soussigné,né,a,citoyenneté,résidant,emplacement,transport,route,transports,conditions,trouve,raisons,adresse,piazza,n,intérieur,Commun,code,À,véhicule,propre,fixe,privé,date) VALUES('$BILLET','$PASSPORT','$soussigné','$né','$a','$citoyenneté','$résidant','$emplacement','$transport','$route','$transports','$conditions','$trouve','$raisons','$adresse','$piazza','$n','$intérieur','$Commun','$code','$À','$véhicule','$propre','$fixe','$privé','$date');";
if(mysqli_query($conn,$sql)){
    echo 'iyughiuhd';
}

$pdf=new \Mpdf\Mpdf();
if(!empty($soussigné) && !empty($né) && !empty($a) && !empty($citoyenneté) && !empty($résidant) && !empty($emplacement) && !empty($transport) && !empty($raisons) && !empty($adresse) && !empty($piazza) && !empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("
<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné)  ".$soussigné.", <b>nato/a il</b> (né le) ".$né." <b>a</b> (à)".$a."(______), cittadinanza (citoyenneté)".$citoyenneté.", <b>residente a</b> (résident à) ".$résidant." (____), <b>via</b>(rue) ".$emplacement.", <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
".$transport."<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
".$raisons."<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) ".$piazza."<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>".$adresse."<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé."  <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($né) && !empty($a) && !empty($citoyenneté) && !empty($résidant) && !empty($emplacement) && !empty($transport) && !empty($raisons) && !empty($adresse) && !empty($piazza) && !empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) ".$né." <b>a</b> (à)".$a."(______), cittadinanza (citoyenneté)".$citoyenneté.", <b>residente a</b> (résident à) ".$résidant." (____), <b>via</b>(rue) ".$emplacement.", <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
".$transport."<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
".$raisons."<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) ".$piazza."<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>".$adresse."<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($a) && !empty($citoyenneté) && !empty($résidant) && !empty($emplacement) && !empty($transport) && !empty($raisons) && !empty($adresse) && !empty($piazza) && !empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à)".$a."(______), cittadinanza (citoyenneté)".$citoyenneté.", <b>residente a</b> (résident à) ".$résidant." (____), <b>via</b>(rue) ".$emplacement.", <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
".$transport."<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
".$raisons."<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) ".$piazza."<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>".$adresse."<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($citoyenneté) && !empty($résidant) && !empty($emplacement) && !empty($transport) && !empty($raisons) && !empty($adresse) && !empty($piazza) && !empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté)".$citoyenneté.", <b>residente a</b> (résident à) ".$résidant." (____), <b>via</b>(rue) ".$emplacement.", <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
".$transport."<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
".$raisons."<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) ".$piazza."<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>".$adresse."<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($résidant) && !empty($emplacement) && !empty($transport) && !empty($raisons) && !empty($adresse) && !empty($piazza) && !empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) ".$résidant." (____), <b>via</b>(rue) ".$emplacement.", <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
".$transport."<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
".$raisons."<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) ".$piazza."<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>".$adresse."<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($emplacement) && !empty($transport) && !empty($raisons) && !empty($adresse) && !empty($piazza) && !empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ".$emplacement.", <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
".$transport."<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
".$raisons."<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) ".$piazza."<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>".$adresse."<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($transport) && !empty($raisons) && !empty($adresse) && !empty($piazza) && !empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
".$transport."<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
".$raisons."<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) ".$piazza."<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>".$adresse."<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($raisons) && !empty($adresse) && !empty($piazza) && !empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
".$raisons."<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) ".$piazza."<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>".$adresse."<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($adresse) && !empty($piazza) && !empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) ".$piazza."<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>".$adresse."<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($piazza) && !empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) ".$piazza."<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>_________________________<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($n) && !empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) _____________________<b> n</b>.(nr) ".$n." <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>_________________________<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($intérieur) && !empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) _____________________<b> n</b>.(nr) _____________________ <br>
<b>interno</b>(nr d'appartement)".$intérieur." <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>_________________________<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($Commun) && !empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) _____________________<b> n</b>.(nr) _____________________ <br>
<b>interno</b>(nr d'appartement)___________________________ <br>
<b>Comune</b> (Ville)  ".$Commun."(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>_________________________<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($code) && !empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) _____________________<b> n</b>.(nr) _____________________ <br>
<b>interno</b>(nr d'appartement)___________________________ <br>
<b>Comune</b> (Ville) ____________________________(______) <br>
<b>CAP</b>(code postal) ".$code." <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>_________________________<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($À) && !empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) _____________________<b> n</b>.(nr) _____________________ <br>
<b>interno</b>(nr d'appartement)___________________________ <br>
<b>Comune</b> (Ville) ____________________________(______) <br>
<b>CAP</b>(code postal) _____________________ <br>
<b>Presso</b>(chez): ".$À." <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>_________________________<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($fixe) && !empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) _____________________<b> n</b>.(nr) _____________________ <br>
<b>interno</b>(nr d'appartement)___________________________ <br>
<b>Comune</b> (Ville) ____________________________(______) <br>
<b>CAP</b>(code postal) _____________________ <br>
<b>Presso</b>(chez): __________________________ <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>_________________________<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ".$fixe."<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($privé) && !empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) _____________________<b> n</b>.(nr) _____________________ <br>
<b>interno</b>(nr d'appartement)___________________________ <br>
<b>Comune</b> (Ville) ____________________________(______) <br>
<b>CAP</b>(code postal) _____________________ <br>
<b>Presso</b>(chez): __________________________ <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>_________________________<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ________________________<b> mobile</b>: ".$privé." <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
elseif(!empty($date)){
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) _____________________<b> n</b>.(nr) _____________________ <br>
<b>interno</b>(nr d'appartement)___________________________ <br>
<b>Comune</b> (Ville) ____________________________(______) <br>
<b>CAP</b>(code postal) _____________________ <br>
<b>Presso</b>(chez): __________________________ <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>_________________________<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ________________________<b> mobile</b>: ______________________________ <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

".$date." <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}
else{
$pdf->writeHTML("<div style='text-align:center;font-size:25px'><u>AUTODICHIARAZIONE GIUSTIFICATIVA DELLO SPOSTAMENTO IN CASO DI ENTRATA IN ITALIA DALL’ESTERO</u></div>
<div style='text-align:center;font-size:19px'><u>Auto-déclaration justificatif dudéplacement en cas d'entrée en Italie de l'étranger </u></div>
<div style='text-align:center;font-size:19px'><u>(traduction de Courtoisie)</u></div>
<div style='text-align:center;font-size:19px'><b>(da consegnare al vettore in caso di utilizzo di mezzo pubblico di trasporto)</b></div>
<b>Il/la sottoscritto/a</b> (le soussigné) ________________________, <b>nato/a il</b> (né le) __/__/____ <b>a</b> (à) _________(______), cittadinanza (citoyenneté) ____________________, <b>residente a</b> (résident à) _____________________ (____), <b>via</b>(rue) ___________________________, <b>consapevole delle sanzioni penali previste in caso di dichiarazioni mendaci e di formazione o uso di atti falsi, nonché delle sanzioni previste dall’articolo 4 del decreto-legge 25 marzo 2020, n. 19</b>
<div style='text-align:center;font-size:18px'><b>DICHIARA SOTTO LA PROPRIA RESPONSABILITÀ</b></div>
(conscient des sanctions prévues en cas de fausses déclarations ou en utilisant de faux documents, ainsi que les sanctions prévues à l'article 4 du décret-25 Mars loi 2020, n.19)
<div style='text-align:center;font-size:18px'><i>DÉCLARE SOUS SA RESPONSABILITÉ</i></div>
1) <b>di essere a conoscenza delle misure di contenimento del contagio da Covid-19 vigenti in Italia e, in particolare, delle prescrizioni contenute nel decreto del Presidente del Consiglio dei Ministri 17 maggio 2020;(être au courant des mesures de prévention de l'infection Covid-19 en vigueur en Italie et, en particulier, des dispositions contenues dans le décret du Premier ministre du 17 mai 2020);</b><br>
2)<b> di non essere sottoposto alla misura della quarantena e di non essere risultato positivo al Covid-19;</b>(ne pas être objet aux mesures de la quarantaine et ne pas avoir été testé positif pour Covid-19);<br>
3)<b> di entrare in Italia dalla seguente località estera ____TUNISIA____, tramite il seguente mezzo di trasporto (in caso di mezzo privato indicare tipo di veicolo e targa; in caso di mezzo pubblico estremi del volo / corsa ferroviaria o stradale / tratta marittima);</b>(D’entrer en Italie à partir de l'emplacement étranger suivant ____TUNISIE____, atravers le moyens de transport suivant (dans le cas d'un transport privé, indiquer le type de véhicule et la plaque d'immatriculation; dans le cas des transports publics, détails du vol / train ou course sur route / route Maritime);<br>
__________________________<br>
4)<b> il/la sottoscritto/a si trova in una delle seguenti condizioni (indicare una opzione);</b>(Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option);<br>
A) <b>equipaggio dei mezzi di trasporto; </b> (équipe de transport);<br>
B)<b> personale viaggiante; </b>(Personnel itinérant);<br>
C)<b> cittadini e residenti nell'Unione Europea, negli Stati parte dell'accordo di Schengen, in Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Citta' del Vaticano e nel Regno Unito di Gran Bretagna e Irlanda del nord che fanno ingresso in Italia per comprovati motivi di lavoro;</b> (Les citoyens et résidents de l'Union européenne, les États parties à l'accord de Schengen, en Andorre, Principauté de Monaco, République de Saint-Marin, État de la Cité du Vatican et Royaume-Uni de La Grande-Bretagne et l'Irlande du Nord entrant en Italie pour des raisons professionnelles avérées );<br>
D) <b>personale sanitario in ingresso in Italia per l'esercizio di qualifiche professionali sanitarie, incluso l'esercizio temporaneo di cui all'art. 13 del decreto-legge 17 marzo 2020, n. 18; </b>(Personnel de santé entrant en Italie pour l'exercice de qualifications professionnelles en santé, inclus l'exercice temporaire conformément à l'art. 13 du décret-loi du 17 mars 2020, n. 18);<br>
E)<b> lavoratori transfrontalieri in ingresso e in uscita dal territorio nazionale per comprovati motivi di lavoro e per il conseguente rientro nella propria residenza, abitazione o dimora; </b>(Des travailleurs frontaliers entrant et sortant du territoire national pour des raisons avérées du travail et le retour qui en résulte dans sa résidence, son domicile ou son logement);<br>
F) <b>personale di imprese aventi sede legale o secondaria in Italia per spostamenti all'estero per comprovate esigenze lavorative di durata non superiore a 120 ore;</b> (le personnel d'entreprises ayant un siège social ou un siège secondaire en Italie pour des voyages à l'étranger, pour des besoins professionnels avérés, d'une durée maximale de 120 heures);<br>
G)<b> funzionari e agenti, comunque denominati, dell'Unione europea o di organizzazioni internazionali, agenti diplomatici, personale amministrativo e tecnico delle missioni diplomatiche, funzionari e impiegati consolari, personale militare nell’esercizio delle loro funzioni; </b> (Des fonctionnaires et agents, quel que soit leur nom, de l'Union européenne ou des organisations internationales, agents Diplomatiques, personnel administratif et technique des missions diplomatiques, fonctionnaires et employés consulaires);<br>
H)<b> alunni e studenti per la frequenza di un corso di studi in uno Stato diverso da quello di residenza, abitazione o dimora, nel quale ritornano ogni giorno o almeno una volta la settimana; </b>(Des élèves et étudiants pour la poursuite d'un cycle d'études dans un État autre que celui de résidence, la maison ou le logement, où ils retournent tous les jours ou au moins une fois par semaine );<br>
I) <b>permanenza in Italia per lavoro, salute o urgenza assoluta di durata massima pari a 120 ore; </b> ( Permanence en Italie pour le travail, la santé ou l'urgence absolue d'une durée maximale de 120 heures );<br>
J) <b>transito sul territorio nazionale per fare rientro nel proprio Paese di residenza, abitazione o dimora (durata massima della permanenza in Italia: c36 ore);</b> ( Transit sur le territoire national pour retourner dans son pays de résidence, domicile ou résidence (durée maximale de séjour en Italie: 36 heures);<br>
K)<b> spostamento da o per Stati membri dell’Unione Europea, Stati parte dell’accordo di Schengen, Regno Unito di Gran Bretagna e Irlanda del nord, Andorra, Principato di Monaco, Repubblica di San Marino, Stato della Città del Vaticano, senza soggiorni in Stati o territori diversi nei 14 giorni anteriori all’ingresso in Italia; </b>( Deplacement en provenance ou à destination des États membres de l'Union européenne, États parties à l'accord de Schengen, Royaume Royaume de Grande-Bretagne et d'Irlande du Nord, Andorre, Monaco, République de Saint-Marin, État de la Cité du Vatican, sans séjour dans différents États ou territoires au cours des 14 derniers jours en entrant en Italie );<br>
L)<b> nessuno dei casi sopra indicati;Aucun des cas ci-dessus.

Se è stata indicata la lettera L), compilare anche le voci seguenti;Si la lettre L) a été indiquée, remplissez également les entrées suivantes:</b><br>
5) <b>che il dichiarante si trova in una delle seguenti condizioni; </b>( que l'inscrit est dans l'une des conditions suivantes ):<br>
A) <b> è cittadino/a di uno Stato dell’Unione europea; </b>(est citoyen d'un État de l'Union européenne );<br>
B) <b>è residente in uno Stato dell’Unione europea;</b> ( réside dans un État de l'Union européenne );<br>
C) coniugato/a o unito/a civilmente o convivente di fatto con un cittadino di uno Stato dell’Unione europea; ( marié ou uni civilement ou cohabitant avec un citoyen d'un État de l'Union européenne);<br>
D)<b> è discendente diretto di età inferiore di anni 21 di una delle persone indiate alle lettere A), B) o C); ( est un descendant direct de moins de 21 ans d'une des personnes indiquées aux lettres A), B) ou C));</b><br>
E) <b>è discendente o ascendente diretto a carico di persone indicate alle lettere A), B) o C);</b> (c'est une personne à charge directe descendante ou ascendante des personnes indiquées aux lettres A), B) ou C));<br>
F) <b>è familiare a carico o convivente con una delle persone indicate alle lettere A, B) o C); </b> ( est un membre de la famille à charge ou un partenaire cohabitant avec l'une des personnes indiquées aux lettres A, B) ou C));<br>
G)<b> è residente in uno dei seguenti Paesi; </b>réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay; <br>
H)<b> si sposta per motivi di salute, lavoro, studio o di assoluta urgenza o per il rientro al proprio domicilio, abitazione o residenza (indicare in modo specifico, concreto e verificabile i motivi dello spostamento e la loro urgenza e necessità); </b> (déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux, à domicile ou à domicile (indiquer de manière spécifique, concrète et vérifiable les raisons du déménagement ainsi que leur urgence et nécessité):<br>
________________________<br>
6)<b> che svolgerà il periodo di 14 giorni di sorveglianza sanitaria e l’isolamento fiduciario nell’abitazione/dimora situata al seguente indirizzo;</b>( qui effectuera la période de 14 jours de surveillance de la santé et d'isolement fiduciaire dans le domicile / demeure situé à l'adresse suivante);<br>
<b>piazza/via</b> (Place/Rue) _____________________<b> n</b>.(nr) _____________________ <br>
<b>interno</b>(nr d'appartement)___________________________ <br>
<b>Comune</b> (Ville) ____________________________(______) <br>
<b>CAP</b>(code postal) _____________________ <br>
<b>Presso</b>(chez): __________________________ <br>
7) <b>che, una volta giunto/a in Italia, raggiungerà direttamente e nel minore tempo possibile l’indirizzo indicato al punto precedente tramite il seguente mezzo privato o proprio;</b>( qui, une fois arrivé en Italie, atteindra directement et dans les plus brefs délais l'adresse indiquée au point précédent par les moyens privés ou propres suivants): <br>_________________________<br>
8) <b>che i recapiti telefonici presso cui ricevere le comunicazioni durante l’intero periodo di sorveglianza sanitaria e isolamento fiduciario sono i seguenti;</b>( que les numéros de téléphone pour recevoir des communications pendant toute la période de surveillance de la santé et d'isolement fiduciaire sont les suivants):<br>

<b>fisso</b>(fixe): ________________________<b> mobile</b>: ______________________________ <br>
9)<b> di non aver soggiornato o transitato nei quattordici (14) giorni antecedenti alla data di compilazione della presente dichiarazione in nessuno dei seguenti Paesi: Armenia, Bahrein, Bangladesh, Brasile, Bosnia Erzegovina, Cile, Kwait, Macedonia del Nord, Moldova, Oman, Panama, Perù, Repubblica Dominicana;</b>(traduzione francese …………………………………………………..)<br>

<b>Luogo, data e ora della presente dichiarazione;</b>(Lieu, date et heure de cette déclaration)<br>

_______________________________ <br>

<b>Firma del dichiarante;</b>(Signature du déclarant)<br>		<b>per il Vettore;</b>(pour le transporteur) <br>

______________________________________	<br>				  ______________________________
");
$pdf->output();}}
else{
    header('location:Form.html');
}