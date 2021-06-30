<?


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
      'Master - Université de Toulouse Paul Sabatier' => 2013
    ),
    'experiences' => array(      
      array(
        'libelle' => "Job d'été (serveur)",
        'debut' => '2002-06-01',
        'fin' => '2002-09-01'
      ),
      array(
        'libelle' => "Stage service informatique chez EDF",
        'debut' => '2008-03-01',
        'fin' => '2008-10-01'
      ),
      array(
        'libelle' => "Développeur web chez Google",
        'debut' => '2013-10-01',
        'fin' => 'now'
      )
    ),
    'competences' => array(
      'html' => 4,
      'css' => 3,
      'javascript' => 5,
      'php' => 3
    )
);





setlocale(LC_ALL, 'fr_FR');


//Calcul de l'age

//Nombre de secondes entre le 1 jan 1970 et la date de naissance
$birth = strtotime($cv['date_naissance']);

//Nombre de secondes entre le 1 jan 1970 et "maintenant"
$now = time();

//Nombre de seconde entre la date de naissance et "maintenant"
$diff = $now - $birth;

//Conversion de la durée en année (secondes devient année), puis arrondi
$age = round($diff / (86400*365));



?>

<html>

<head>
    <title>CV de <?=$cv['nom']?></title>
</head>

<body>

    <!--Infos de bases-->
    <h1><?=$cv['nom']?> - <?=$cv['metier']?></h1>
    <img src="<?=$cv['photo']?>" />
    <p>
        <?=$age?> ans
        <br />
        <?=$cv['adresse']?>
        <br />
        Téléphone : <?=substr(chunk_split($cv['tel'], 2, "-"),0, 14)?>
    </p>


    <!--Diplômes-->
    <h3>Diplômes</h3>
    <ul>
        <?
  $diplomes = array_reverse($cv['diplomes']);
  foreach($diplomes as $lib => $date){
    echo "<li>$date : $lib</li>";
  }
  ?>
    </ul>


    <!--Expériences-->
    <h3>Expériences</h3>
    <ul>
        <?
  $experiences = array_reverse($cv['experiences']);
  foreach($experiences as $k => $exp){
    $start = strftime("%e %B %Y", strtotime($exp['debut']));
    $end = ($exp['fin'] != 'now') ? 'au '.strftime("%e %B %Y", strtotime($exp['fin'])) : 'à <b>maintenant</b>';
    
    echo "<li>$start $end : <i>".$exp['libelle']."</i></li>";
  }
  ?>
    </ul>


    <!--Compétences-->
    <h3>Compétences</h3>
    <table border=1>
        <?
    $max = 5;
    $star = '';
    foreach($cv['competences'] as $skill => $level){
      $skill = strtoupper($skill);
      $i = 0;
      echo "<tr>";
      echo "<td>$skill</td>";
      while($i < $max){
        $star = ($i < $level) ? 'etoile-pleine.png' : 'etoile-vide.png' ;
        echo "<td><img src='$star' /></td>";
        $i++;
      }
      echo "</tr>";
    }
    ?>
    </table>

</body>

</html>