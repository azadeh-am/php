<?




//http_response_code('404');
//echo "Oops, la page que vous demandez n'existe pas";
//exit();


//A l'ancienne
if(isset($_GET['prenom']) === true){
    $prenom = $_GET['prenom'];
} else {
    $prenom = 'XXXX';
}


//Ternaire
$age = (isset($_GET['age'])) ? $_GET['age'] : 'XXX';


//Opérateur null coalescent
$metier = $_GET['metier'] ?? 'XXX';

?>

<h1>SANDBOX</h1>
<br>
<h2>Test GET</h2>
Bonjour, je m'appel <?=$prenom?>, j'ai <?=$age?> ans et je suis <?=$metier?>.
<h3>GET et formulaires</h3>
<form method="GET" action="">
  <input type="text" name="prenom" />
  <input type="text" name="metier" />
  <input type="text" name="age" />
  <input type="submit" value="ok" />
</form>
<h3>GET et liens</h3>
<ul>
    <li><a href="index.php?prenom=julien&age=35&metier=formateur">julien</a></li>
    <li><a href="index.php?prenom=marc&metier=boucher&age=25">marc</a></li>
</ul>

<h2>POST</h2>
<form method="POST" action="calculReduction.php">
  <input type="text" name="prix" />
  <input type="text" name="reduction" />  
  <input type="submit" value="ok" />
</form>


<?
debug($_GET);
function debug($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}
?>




