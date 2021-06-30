<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatage</title>
</head>

<body>
    <?
    $prenom = filter_input(INPUT_POST, 'prenom');
    $nom = filter_input(INPUT_POST, 'nom');

    ?>

    <form method="POST">
        <input type="text" name="prenom" />
        <input type="text" name="nom" />
        <input type="submit" />
    </form>
    <hr>
    <?
    if (!is_string($prenom) || is_numeric($prenom) || empty($prenom)) {
        echo "Le prénom n'a pas l'air correct";
    } else if (!is_string($nom) || is_numeric($nom) || empty($nom)) {
        echo "Le nom n'a pas l'air correct";
    } else {
        if (strlen($prenom) > 16) { //Vérif de la taille avec strlen(string$string)
            echo "Le prénom ne peut pas faire plus de 16 caractères, merci de le resaisir.";
        } else if (strlen($nom) > 32) { //Vérif de la taille
            echo "Le nom ne peut pas faire plus de 32 caractères, merci de le resaisir.";
        } else {
            $nom_complet = ucfirst(strtolower($prenom)) . " " . strtoupper($nom);
            echo "Bonjour $nom_complet !"; //Affichage
        }
    ?>
        <pre>
   <? print_r($_POST) ?>
        <pre>
    <? } ?>
</body>

</html>