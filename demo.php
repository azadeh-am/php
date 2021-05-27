
Hello World
<?php
// $nom= 'marc';
// echo $nom;

// $note1 = 15 ;
// $note2 = 12 ;
// $avrg= ($note1 + $note2) /2 ;
// echo $avg;

// $prenom = 'azi';
// $nom= 'ami' ;
// echo $prenom.' '.$nom ;
// echo $prenom."\n".$nom ;
// echo "$prenom $nom" ;
// echo "$prenom \n$nom" ;
// echo 'Bonjour '."$prenom $nom".' vous avez obtenu moyenne de '."$avrg";

// $eleves = [
//     'prenom'=>'Azi',
//     'nom'=> 'Ami', 
//     'notes'=> [10,20,9,15,18],
//  ];

// $eleves['prenom'] = 'azadeh'; 
// // pour ajouter dans un index zpecial l'array ou tabeaux
// $eleves['notes'][3] = 17 ;// "
// $eleves['notes'][] = 19; // pour ajouter à la fin d'une tableaux
// $eleves[] = 'CM2' ; // si pas de index numerique va commancer à 0
// print_r($eleves);

// $classe = [
//     [
//         'nom' => 'Ami',
//         'prenom' => 'azi',
//         'notes' => [12,14,18]
//     ],
//     [
//         'nom' => 'Ami',
//         'prenom' => 'azadeh',
//         'notes' => [18,19,18]
//     ]
// ];
// // echo $classe[1]['notes'][1];
// echo $classe[1];

$note= (int)readline ('entrez votre note :');//c'est une chaine de caractére pour convertir , on a besoin de int et on va eviter le problem
if ($note > 12) {
    echo 'Bravo, vous avez la moyenne';
}elseif ($note == 12) {
    echo 'vous avez juste la moyenne';
}
else {
    echo 'Dommage, vous n\'avez pas la moyenne';
}

?>

comment ça va??


