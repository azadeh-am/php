<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

$villes = array(
    array(
        'nom' => 'Toulouse',
        'habitants' => '466297',
        'geo' => 'sud-ouest',
        'specialite' => 'Le cassoulet',
        'img' => 'toulouse.jpg',
    ),
    array(
        'nom' => 'Bordeaux',
        'habitants' => '246586',
        'geo' => 'ouest',
        'specialite' => 'Le vin',
        'img' => 'bordeaux.jpg',
    ),
    array(
        'nom' => 'Paris',
        'habitants' => '2200000',
        'geo' => 'centre nord',
        'specialite' => 'Le jambon beurre',
        'img' => 'paris.jpg',
    ),
    array(
        'nom' => 'Marseille',
        'habitants' => '1059000',
        'geo' => 'sud-ouest',
        'specialite' => 'La bouillabaisse',
        'img' => 'marseille.jpg',
    ),
    array(
        'nom' => 'Lyon',
        'habitants' => '500715',
        'geo' => 'sud est',
        'specialite' => 'La quenelle',
        'img' => 'lyon.jpg',
    ),
);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .all {
        border: 2px solid #ee951f;
        border-radius: 15px;
        padding: 10px;
        color: whitesmoke;
    }

    img {
        height: "150px";
        width: "150px";

    }
    </style>
</head>

<body>
    <h1>Mes villes </h1><?php foreach ($villes as $ville) {
        ?><div classe="all">
        <h3><?=$ville['nom'];
        ?></h3>
        <p>Nombre habitants:
            <?=$ville['habitants'];
        ?></p>
        <p>Région: <?=$ville['geo'];
        ?></p>
        <p>Spécialite:
            <?=$ville['specialite'];
        ?></p>
        <P><img src="images/<?=$ville['img'];?>"></P>
        </hr>
    </div>
    <?php }?>
</body>

</html>