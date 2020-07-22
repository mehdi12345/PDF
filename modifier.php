<?php
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


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <title>Form</title>
</head>
<body  ng-app="">
  <style>
    .borders{
      margin-left: 5%;
      margin-right: 5%;
      border: 1px solid black;
    }
  </style>
  <div style="height:50px"></div>
  <div class="borders">
    <div style="height:20px"></div>
  <center><h1>Document GNV</h1></center>
  <div style="height:50px"></div>

    <div class="container">
    <form action="modify.php" method="post">
    <input type="hidden" class="form-control" id="billet" name="billet1" placeholder="entrer votre numéro de billet" required value="<?php echo $BILLET ?>">
        <div class="form-group"> 
            <label for="billet">Numéro de billet:</label>
            
            <input type="text" class="form-control" id="billet" name="billet" placeholder="entrer votre numéro de billet" required value="<?php echo $BILLET ?>">
          </div>
       <div class="form-group">
            <label for="passport">Numéro de passport:</label>
            <input type="text" class="form-control" id="passport" name="passport" placeholder="entrer votre numéro de passport" value="<?php echo $PASSPORT ?>">
          </div>
        <div class="form-group">
            <label for="soussigné">Nom complet:</label>
            <input type="text" class="form-control" id="soussigné" name="soussigné" placeholder="entrer votre nom complet" value="<?php echo $soussigné ?>">
          </div>
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="jour">Né le:</label>
                <div class="row">
                    <div class="col-md-4">
            <input type="number" class="form-control" id="jour" name="jour" placeholder='jour'> <br>
            </div>
            <div class="col-md-4">
            <input type="number" class="form-control" id="mois" name="mois" placeholder='mois'> <br>
            </div>
            <div class="col-md-4">
            <input type="number" class="form-control" id="annee" name="annee" placeholder='annee'> <br>
            </div>
            </div>
            </div>
            <div class="col-md-6">
              <label for="a">À:</label>
              <input type="text" class="form-control" id="a" name="a" placeholder="entrer le lieu de naissance " value="<?php echo $a ?>">
            </div>
          </div>
          </div>
        <div class="form-group">
            <label for="citoyenneté">Citoyenneté:</label>
            <select type="text" class="form-control" id="citoyenneté" name="citoyenneté" placeholder="entrer la citoyenneté de soussigné" >
              <option value="<?php echo $citoyenneté ?>" selected="selected"><?php echo $citoyenneté ?> </option>
<option value="Afghanistan">Afghanistan </option>
<option value="Afrique_Centrale">Afrique_Centrale </option>
<option value="Afrique_du_sud">Afrique_du_Sud </option>
<option value="Albanie">Albanie </option>
<option value="Algerie">Algerie </option>
<option value="Allemagne">Allemagne </option>
<option value="Andorre">Andorre </option>
<option value="Angola">Angola </option>
<option value="Anguilla">Anguilla </option>
<option value="Arabie_Saoudite">Arabie_Saoudite </option>
<option value="Argentine">Argentine </option>
<option value="Armenie">Armenie </option>
<option value="Australie">Australie </option>
<option value="Autriche">Autriche </option>
<option value="Azerbaidjan">Azerbaidjan </option>

<option value="Bahamas">Bahamas </option>
<option value="Bangladesh">Bangladesh </option>
<option value="Barbade">Barbade </option>
<option value="Bahrein">Bahrein </option>
<option value="Belgique">Belgique </option>
<option value="Belize">Belize </option>
<option value="Benin">Benin </option>
<option value="Bermudes">Bermudes </option>
<option value="Bielorussie">Bielorussie </option>
<option value="Bolivie">Bolivie </option>
<option value="Botswana">Botswana </option>
<option value="Bhoutan">Bhoutan </option>
<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
<option value="Bresil">Bresil </option>
<option value="Brunei">Brunei </option>
<option value="Bulgarie">Bulgarie </option>
<option value="Burkina_Faso">Burkina_Faso </option>
<option value="Burundi">Burundi </option>

<option value="Caiman">Caiman </option>
<option value="Cambodge">Cambodge </option>
<option value="Cameroun">Cameroun </option>
<option value="Canada">Canada </option>
<option value="Canaries">Canaries </option>
<option value="Cap_vert">Cap_Vert </option>
<option value="Chili">Chili </option>
<option value="Chine">Chine </option>
<option value="Chypre">Chypre </option>
<option value="Colombie">Colombie </option>
<option value="Comores">Colombie </option>
<option value="Congo">Congo </option>
<option value="Congo_democratique">Congo_democratique </option>
<option value="Cook">Cook </option>
<option value="Coree_du_Nord">Coree_du_Nord </option>
<option value="Coree_du_Sud">Coree_du_Sud </option>
<option value="Costa_Rica">Costa_Rica </option>
<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
<option value="Croatie">Croatie </option>
<option value="Cuba">Cuba </option>

<option value="Danemark">Danemark </option>
<option value="Djibouti">Djibouti </option>
<option value="Dominique">Dominique </option>

<option value="Egypte">Egypte </option>
<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
<option value="Equateur">Equateur </option>
<option value="Erythree">Erythree </option>
<option value="Espagne">Espagne </option>
<option value="Estonie">Estonie </option>
<option value="Etats_Unis">Etats_Unis </option>
<option value="Ethiopie">Ethiopie </option>

<option value="Falkland">Falkland </option>
<option value="Feroe">Feroe </option>
<option value="Fidji">Fidji </option>
<option value="Finlande">Finlande </option>
<option value="France">France </option>

<option value="Gabon">Gabon </option>
<option value="Gambie">Gambie </option>
<option value="Georgie">Georgie </option>
<option value="Ghana">Ghana </option>
<option value="Gibraltar">Gibraltar </option>
<option value="Grece">Grece </option>
<option value="Grenade">Grenade </option>
<option value="Groenland">Groenland </option>
<option value="Guadeloupe">Guadeloupe </option>
<option value="Guam">Guam </option>
<option value="Guatemala">Guatemala</option>
<option value="Guernesey">Guernesey </option>
<option value="Guinee">Guinee </option>
<option value="Guinee_Bissau">Guinee_Bissau </option>
<option value="Guinee equatoriale">Guinee_Equatoriale </option>
<option value="Guyana">Guyana </option>
<option value="Guyane_Francaise ">Guyane_Francaise </option>

<option value="Haiti">Haiti </option>
<option value="Hawaii">Hawaii </option>
<option value="Honduras">Honduras </option>
<option value="Hong_Kong">Hong_Kong </option>
<option value="Hongrie">Hongrie </option>

<option value="Inde">Inde </option>
<option value="Indonesie">Indonesie </option>
<option value="Iran">Iran </option>
<option value="Iraq">Iraq </option>
<option value="Irlande">Irlande </option>
<option value="Islande">Islande </option>
<option value="Israel">Israel </option>
<option value="Italie">italie </option>

<option value="Jamaique">Jamaique </option>
<option value="Jan Mayen">Jan Mayen </option>
<option value="Japon">Japon </option>
<option value="Jersey">Jersey </option>
<option value="Jordanie">Jordanie </option>

<option value="Kazakhstan">Kazakhstan </option>
<option value="Kenya">Kenya </option>
<option value="Kirghizstan">Kirghizistan </option>
<option value="Kiribati">Kiribati </option>
<option value="Koweit">Koweit </option>

<option value="Laos">Laos </option>
<option value="Lesotho">Lesotho </option>
<option value="Lettonie">Lettonie </option>
<option value="Liban">Liban </option>
<option value="Liberia">Liberia </option>
<option value="Liechtenstein">Liechtenstein </option>
<option value="Lituanie">Lituanie </option>
<option value="Luxembourg">Luxembourg </option>
<option value="Lybie">Lybie </option>

<option value="Macao">Macao </option>
<option value="Macedoine">Macedoine </option>
<option value="Madagascar">Madagascar </option>
<option value="Madère">Madère </option>
<option value="Malaisie">Malaisie </option>
<option value="Malawi">Malawi </option>
<option value="Maldives">Maldives </option>
<option value="Mali">Mali </option>
<option value="Malte">Malte </option>
<option value="Man">Man </option>
<option value="Mariannes du Nord">Mariannes du Nord </option>
<option value="Maroc">Maroc </option>
<option value="Marshall">Marshall </option>
<option value="Martinique">Martinique </option>
<option value="Maurice">Maurice </option>
<option value="Mauritanie">Mauritanie </option>
<option value="Mayotte">Mayotte </option>
<option value="Mexique">Mexique </option>
<option value="Micronesie">Micronesie </option>
<option value="Midway">Midway </option>
<option value="Moldavie">Moldavie </option>
<option value="Monaco">Monaco </option>
<option value="Mongolie">Mongolie </option>
<option value="Montserrat">Montserrat </option>
<option value="Mozambique">Mozambique </option>

<option value="Namibie">Namibie </option>
<option value="Nauru">Nauru </option>
<option value="Nepal">Nepal </option>
<option value="Nicaragua">Nicaragua </option>
<option value="Niger">Niger </option>
<option value="Nigeria">Nigeria </option>
<option value="Niue">Niue </option>
<option value="Norfolk">Norfolk </option>
<option value="Norvege">Norvege </option>
<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

<option value="Oman">Oman </option>
<option value="Ouganda">Ouganda </option>
<option value="Ouzbekistan">Ouzbekistan </option>

<option value="Pakistan">Pakistan </option>
<option value="Palau">Palau </option>
<option value="Palestine">Palestine </option>
<option value="Panama">Panama </option>
<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
<option value="Paraguay">Paraguay </option>
<option value="Pays_Bas">Pays_Bas </option>
<option value="Perou">Perou </option>
<option value="Philippines">Philippines </option>
<option value="Pologne">Pologne </option>
<option value="Polynesie">Polynesie </option>
<option value="Porto_Rico">Porto_Rico </option>
<option value="Portugal">Portugal </option>

<option value="Qatar">Qatar </option>

<option value="Republique_Dominicaine">Republique_Dominicaine </option>
<option value="Republique_Tcheque">Republique_Tcheque </option>
<option value="Reunion">Reunion </option>
<option value="Roumanie">Roumanie </option>
<option value="Royaume_Uni">Royaume_Uni </option>
<option value="Russie">Russie </option>
<option value="Rwanda">Rwanda </option>

<option value="Sahara Occidental">Sahara Occidental </option>
<option value="Sainte_Lucie">Sainte_Lucie </option>
<option value="Saint_Marin">Saint_Marin </option>
<option value="Salomon">Salomon </option>
<option value="Salvador">Salvador </option>
<option value="Samoa_Occidentales">Samoa_Occidentales</option>
<option value="Samoa_Americaine">Samoa_Americaine </option>
<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
<option value="Senegal">Senegal </option>
<option value="Seychelles">Seychelles </option>
<option value="Sierra Leone">Sierra Leone </option>
<option value="Singapour">Singapour </option>
<option value="Slovaquie">Slovaquie </option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie </option>
<option value="Soudan">Soudan </option>
<option value="Sri_Lanka">Sri_Lanka </option>
<option value="Suede">Suede </option>
<option value="Suisse">Suisse </option>
<option value="Surinam">Surinam </option>
<option value="Swaziland">Swaziland </option>
<option value="Syrie">Syrie </option>

<option value="Tadjikistan">Tadjikistan </option>
<option value="Taiwan">Taiwan </option>
<option value="Tonga">Tonga </option>
<option value="Tanzanie">Tanzanie </option>
<option value="Tchad">Tchad </option>
<option value="Thailande">Thailande </option>
<option value="Tibet">Tibet </option>
<option value="Timor_Oriental">Timor_Oriental </option>
<option value="Togo">Togo </option>
<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
<option value="Tristan da cunha">Tristan de cuncha </option>
<option value="Tunisie">Tunisie </option>
<option value="Turkmenistan">Turmenistan </option>
<option value="Turquie">Turquie </option>

<option value="Ukraine">Ukraine </option>
<option value="Uruguay">Uruguay </option>

<option value="Vanuatu">Vanuatu </option>
<option value="Vatican">Vatican </option>
<option value="Venezuela">Venezuela </option>
<option value="Vierges_Americaines">Vierges_Americaines </option>
<option value="Vierges_Britanniques">Vierges_Britanniques </option>
<option value="Vietnam">Vietnam </option>

<option value="Wake">Wake </option>
<option value="Wallis et Futuma">Wallis et Futuma </option>

<option value="Yemen">Yemen </option>
<option value="Yougoslavie">Yougoslavie </option>

<option value="Zambie">Zambie </option>
<option value="Zimbabwe">Zimbabwe </option>
            </select>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
            <label for="ville">Ville:</label>
            <input type="text" class="form-control" id="ville" name="ville" ng-model="ville" placeholder="entrer votre ville" value="<?php echo $ville ?>"></div>
            <div class="col-md-6">
            <label for="codeone">Code postal:</label>
            <input type="text" class="form-control" id="codeone" name="codeone" ng-model="code" placeholder="entrer votre code postal" value="<?php echo $codeone ?>"></div>
          </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
            <label for="rue">Rue:</label>
            <input type="text" class="form-control" id="rue" name="rue" ng-model="rue" placeholder="entrer votre rue" value="<?php echo $rue ?>"></div>
            <div class="col-md-4">
            <label for="nr">Nr:</label>
            <input type="text" class="form-control" id="nr" name="nr" ng-model="nr" placeholder="entrer votre numéro de rue" value="<?php echo $nr ?>"></div>
            <div class="col-md-4">
            <label for="appartement">Nr d'appartement:</label>
            <input type="text" class="form-control" id="appartement" ng-model="appartement" name="appartement" placeholder="entrer votre numéro d'appartement" value="<?php echo $appartement ?>"></div>
          </div>
          </div>
        
        
       <div class="form-group" >
            <label for="route">Route maritime:</label>
            <input type="text" class="form-control" id="route" name="route" placeholder="route maritime" value="Tarta Mariti -TANGERMED - GNOVA le 22/07/2020 à 22:30 - Excellent">
              
          </div>
        
        <div class="form-group">
            <label for="conditions">Le soussigné se trouve dans l'une des conditions suivantes (indiquez une option):</label>
            <select type="text" class="form-control" id="conditions" name="conditions">
            <option value="<?php echo $conditions ?>" selected="selected">l'option : <?php echo $conditions ?>  </option>
    <option value="">choisissez une option</option>
    <option value="A">A -> équipe de transport</option>
    <option value="B">B -> Personnel itinérant</option>
    <option value="C">C -> Les citoyens et résidents de l'Union européenne</option>
    <option value="D">D -> Personnel de santé</option>
    <option value="E">E -> Des travailleurs frontaliers</option>
    <option value="F">F -> le personnel d'entreprises</option>
    <option value="G">G -> Des fonctionnaires et agents</option>
    <option value="H">H -> Des élèves et étudiants</option>
    <option value="I">I -> Permanence en Italie</option>
    <option value="J">J -> Transit sur le territoire national</option>
    <option value="K">K -> Deplacement en provenance ou à destination des États membres de l'Union européenne</option>
    <option value="L">L -> aucun des cas ci-dessus</option>
              </select> 
          </div>
        <div class="form-group">
            <label for="trouve">l'inscrit est dans l'une des conditions suivantes':</label>
            <select type="text" class="form-control" id="trouve" name="trouve">
            <option value="<?php echo $trouve ?>" selected="selected">l'option : <?php echo $trouve ?>  </option>
    <option value="">choisissez une option</option>
    <option value="a">A -> est citoyen d'un Etat membre de l'Union europeenne </option>
    <option value="b">B -> reside dans un Etat membre de l'Union europeenne</option>
    <option value="c">C -> marié ou uni civilement ou cohabitant avec un citoyen d'un État membre de l'Union européenne</option>
    <option value="d">D -> est un descendant direct</option>
    <option value="e">E -> c'est une personne à charge directe descendante ou ascendante</option>
    <option value="f">F -> est un membre de la famille à charge ou un partenaire cohabitant</option>
    <option value="g">G -> réside dans l'un des pays suivants: Algeria, Australia, Canada, Georgia, Giappone, Montenegro, Marocco, Nuova Zelanda, Ruanda, Serbia, Repubblica di Corea, Tailandia, Tunisia, Uruguay;</option>
    <option value="h">H -> déménagements pour des raisons de santé, de travail, d'études ou d'urgence absolue ou pour rentrer chez eux</option>

              </select>
          </div>
          <div class="form-group">
            <label for="raisons">Les raisons de voyage:</label>
            <select type="text" class="form-control" id="raisons" name="raisons" value="<?php echo $raisons ?>">
            <option value="<?php echo $raisons ?>" selected="selected">l'option : <?php echo $raisons ?>  </option>
              <option value="">choisissez votre raison de voyage</option>
              <option value="tourisme">tourisme</option>
              <option value="travail">travail</option>
              <option value="travail">familiale</option>
              <option value="maladie">maladie</option>
              
             </select>
          </div>
          <div class="form-group">
            <label for="séjours">avoir effectué des séjours / transits dans les pays et territoires suivant saucours des 14 derniers jours dans l'adresse suivante:</label>
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="entrer l'adresse où vous avez effectué des séjours" value="<?php echo $adresse ?>">

          </div>
          <div style="height: 10px;"></div>
          <hr style="border: 1px solid black;">
          <div style="height: 5px;"></div>
          <center><h2>Adresse de destination</h2></center>
          <div style="height: 25px;"></div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
            <label for="Commun">Ville:</label>
            <input type="text" class="form-control" id="Commun" name="Commun" placeholder="entrer la ville de destination"  value="<?php echo $Commun ?>"></div>
            <div class="col-md-6">
            <label for="code">Code postal:</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="entrer code postal ville  de destination"  value="<?php echo $code ?>"></div>
          </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
            <label for="piazza">Rue:</label>
            <input type="text" class="form-control" id="piazza" name="piazza" placeholder="entrer le rue de destination"  value="<?php echo $piazza ?>"></div>
            <div class="col-md-4">
            <label for="n">Nr:</label>
            <input type="text" class="form-control" id="n" name="n" placeholder="entrer le numéro de rue de destination"  value="<?php echo $n ?>"></div>
            <div class="col-md-4">
            <label for="intérieur">Nr d'appartement:</label>
            <input type="text" class="form-control" id="intérieur" name="intérieur" placeholder="entrer le numéro d'appartement de destination"  value="<?php echo $intérieur ?>"></div>
          </div>
          </div>
          <div class="form-group">
            <label for="À">Chez:</label>
            <select type="text" class="form-control" id="À" name="À" placeholder="entrer le nom de personne que vous allez résider avec ">
            <option value="<?php echo $À ?>" selected="selected">l'option : <?php echo $À ?>  </option>
                <option value="">choisissez une option</option>
                <option value="Mi casa">Propre maison</option>
                <option value="altro">autre</option>
                </select>
          </div>
          <div class="form-group">
            <label for="transport">Moyen de transport vers destination:</label>
            <select type="text" class="form-control" id="transport" name="transport">
            <option value="<?php echo $transport ?>" selected="selected">l'option : <?php echo $transport ?>  </option>
              <option value="">choisissez une option</option>
    <option value="privé">avec véhicule privé (voiture-moto...)</option>
    <option value="public">piéton  </option>
            </select>
          </div>
          <div class="form-group">
            <label for="type">type de véhicule:</label>
            <select type="text" class="form-control" id="type" name="type">
              <option value="">choisissez une option</option>
              <option value="<?php echo $type ?>" selected="selected">l'option : <?php echo $type ?>  </option>
    <option value="motos">motos</option>
    <option value="voiture">voiture</option>
    <option value="voiture avec chariot">voiture avec chariot</option>
    <option value="camion ">camion</option>
    <option value="camion avec chariot">camion avec chariot</option>
    <option value="bus">bus</option>
    <option value="bus avec chariot" >bus avec chariot</option>
            </select>
          </div>
          <div class="form-group">
            <label for="marque">Marque de véhicule:</label>
            <input type="text" class="form-control" id="marque" name="marque" placeholder="entrer votre marque de véhicule" value="<?php echo $marque ?>">
          </div>
        <div class="form-group">
            <label for="plaque d'immatriculation">plaque d'immatriculation:</label>
            <input type="text" class="form-control" id="immatriculation" name="immatriculation" placeholder="entrer la plaque d'immatriculation" value="<?php echo $immatriculation ?>">
              
          </div>
          <div class="form-group">
            <label for="name">Nom complet de propriéte de véhicule:</label>
            <input type="text" class="form-control" id="name" name="véhiculeName" placeholder="entrer le nom complet de propriéte de véhicule" value="<?php echo $NameVehicule ?>">
              
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
            <label for="fixe">Fixe:</label>
            <input type="text" class="form-control" id="fixe" name="fixe" placeholder="entrer votre numéro fixe" value="<?php echo $fixe ?>"></div>
            <div class="col-md-4">
            <label for="privé">Mobile:</label>
            <input type="text" class="form-control" id="privé" name="privé" placeholder="entrer votre numéro mobile" value="<?php echo $privé ?>" ></div>
            <div class="col-md-4">
            <label for="date">Date et l'heure:</label>
            <input type="text" class="form-control" id="date" name="date" onclick="change()"></div>
          </div>
          </div> <br>
          <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
    </form>
</div>

<div style="height:40px"></div>
</div>
<div style="height:40px"></div>
<script>
  var today = new Date();
var date = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
if(today.getMinutes()>9){
var time = " à "+ today.getHours() + ":" + today.getMinutes();}
if(today.getMinutes()<10){
var time = " à "+today.getHours() + ":0" + today.getMinutes();}

document.getElementById('date').value=date+'    '+time;
function change(){
  if(document.getElementById('date').type=="text"){
  document.getElementById('date').type='datetime-local';
  }
}

$(document).on("click", function(event){
        if(!$(event.target).closest("#date").length){
          if(!document.getElementById('date').value){
          document.getElementById('date').type="text"
          document.getElementById('date').value=date+'    '+time;}
          }
            });

</script>
</body>
</html>
<?php
}
else{
    header('location:Form.html');
}
?>