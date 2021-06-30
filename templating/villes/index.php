<?php
//Récupération des données
$villes = array(
  array(
    'nom' => 'Toulouse',
    'habitants' => '466297',
    'geo' => 'sud-ouest',
    'specialite' => 'Le cassoulet',
    'img' =>'toulouse.jpg'
  ),  
  array(
    'nom' => 'Bordeaux',
    'habitants' => '246586',
    'geo' => 'ouest',
    'specialite' => 'Le vin',
    'img' =>'bordeaux.jpg'
  ),
  array(
    'nom' => 'Paris',
    'habitants' => '2200000',
    'geo' => 'centre nord',
    'specialite' => 'Le jambon beurre',
    'img' =>'paris.jpg'
  ),
  array(
    'nom' => 'Marseille',
    'habitants' => '1059000',
    'geo' => 'sud-ouest',
    'specialite' => 'La bouillabaisse',
    'img' =>'marseille.jpg'
  ),
  array(
    'nom' => 'Lyon',
    'habitants' => '500715',
    'geo' => 'sud est',
    'specialite' => 'La quenelle',
    'img' =>'lyon.jpg'
  )
);

?>












<html>
<head>
  <title>Exercice template ville</title>
</head>
<body>
  <h1>Exercice template villes :</h1>
  <? foreach($villes as $k => $ville){ ?>
  <h4>Ville n° <?=$k+1?> : <?=$ville['nom']?></h4>
  <ul>
    <li>Nombre d'habitants : <?=$ville['habitants']?></li>
    <li>Région : <?=$ville['geo']?></li>
    <li>Spécialité : <?=$ville['specialite']?></li>
  </ul>
  <img src='images/<?=$ville['img']?>' width='200' />
  <hr />
  <? } ?>


</body>
</html>
