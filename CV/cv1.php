<? //Activer le reglege short_open_tags dans le php.ini
$cv = array(
    'nom' => 'Julien Buabent',
    'date_naissance' => '1985-12-10',
    'adresse' => '1, rue des fleurs 31500 Toulouse',
    'tel' => '0666666666',
    'photo' => 'julien.jpg',
    'metier' => 'Développeur web',
    'diplomes' => array(
        'Baccalauréat - Lycée Pierre et Marie Curie' => 2004,
        'BTS - Greta Montpellier' => 2008,
        'Licence - Université de Toulouse Paul Sabatier' => 2010,
        'Master - Université de Toulouse Paul Sabatier' => 2013,
    ),
    'experiences' => array(
        array(
            'libelle' => "Job d'été (serveur)",
            'debut' => '2002-06-01',
            'fin' => '2002-09-01',
        ),
        array(
            'libelle' => "Stage service informatique chez EDF",
            'debut' => '2008-03-01',
            'fin' => '2008-10-01',
        ),
        array(
            'libelle' => "Développeur web chez Google",
            'debut' => '2013-10-01',
            'fin' => 'now',
        ),
    ),
    'competences' => array(
        'html' => 4,
        'css' => 3,
        'javascript' => 5,
        'php' => 3,
    ),
);

function calculerAge($date)
{
//On déclare les dates à comparer
    $dateNais = new DateTime($date);
    $dateJour = new DateTime();

//On calcule la différence
    $difference = $dateNais->diff($dateJour);

//On retourne la différence en années
    return $difference->format('%Y');
}

$grades = array_reverse($cv['diplomes']);
$jobs = array_reverse($cv['experiences']);
$skills = array_reverse($cv['competences']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
</head>

<body>


    <h1> <?=$cv['nom'] . ' -';?>
        <?=$cv['metier'];?></h1>
    <P><img src="<?=$cv['photo'];?>"></P>
    <p>Age : <?=calculerAge($cv['date_naissance']);?> ans</p>
    <p>Adress : <?=$cv['adresse'];?></p>
    <p>Téléphone: <?= wordwrap($cv['tel'],2,'-',true) ?></p>

    <ul> Diplômes:
        <?php foreach ($grades as $diplomes => $year) {?>
        <li><?=$year . ' : '?> <?=$diplomes?></li>
        <?php }?>
    </ul>
    <ul> Éxperiences :
        <?php foreach ($jobs as $key => $job) {
            $start= strftime("%d %B %Y",strtotime($job['debut'])) ; 
        $end=  ($job['fin'] != 'now') ? 'au '.strftime("%d %B %Y",strtotime($job['fin'])) : 'à <b>maintenant</b>';

        echo "<li>$start $end : <i>".$job['libelle']."</i></li>";
        
         }?>
    </ul>
    <h3>Compétences</h3>
    <table border="1">
        <?php $max=5;
        $star='';
        foreach ($cv['competences'] as $skills => $level){
            $skills = strtoupper($skills);//ecrire en majescule
            $i = 0;
      echo "<tr>";
      echo "<td>$skills</td>";
      while($i < $max){
        $star = ($i < $level) ? 'etoile_pleine.png' : 'etoile_vide.png' ;
        echo "<td><img src='$star' /></td>";
        $i++;
      }
      echo "</tr>";
    } 
        ?>
</body>

</html>