<?

use JetBrains\PhpStorm\Language;

$mots = array(
  'bonjour' => array('en' => 'hello', 'es' => 'buenos dias'),
  'merci' => array('en' => 'thank you', 'es' => 'gracias'),
  'au revoir' => array('en' => 'goodbye', 'es' => 'adios'),
  'droite' => array('en' => 'right', 'es' => 'derecha'),
  'gauche' => array('en' => 'left', 'es' => 'izquierda'),
  'haut' => array('en' => 'top', 'es' => 'superior'),
  'bas' => array('en' => 'bottom', 'es' => 'bajo'),
  'chien' => array('en' => 'dog', 'es' => 'perro'),
  'chat' => array('en' => 'cat', 'es' => 'gato'),
  'pomme' => array('en' => 'apple', 'es' => 'manzana'),
  'bananne' => array('en' => 'banana', 'es' => 'platano')
);
//On crée un tableau pour les langues
$languages = array(
  'en' => 'Anglais',
  'es' => 'Espagnol',
);
//
$mot = filter_input(INPUT_POST, 'mot');
$language = filter_input(INPUT_POST, 'languge');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Traducteur</title>
</head>

<body>
  <h1> Traducteur </h1>
  <hr>
  <form method="POST">
    <label>Ecrivez votre mot :</label>
    <input type="text" name="mot" value="<? $mot ?>" />
    &nbsp;|&nbsp;
    <label>Choisissez votre langue :</label>
    <select name="langue">
      <? foreach ($languages as $key => $traduction) {
        $selected = ($language == $key) ? 'selected' : '';
        echo "<option value='$key' $selected>$traduction</option>";
      } ?>
    </select>
  </form>


</body>

</html>