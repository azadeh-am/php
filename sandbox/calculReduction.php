<?
//debug($_POST);

function debug($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

//Entrées

$prix = filter_input(INPUT_POST, 'reduction', FILTER_VALIDATE_INT);


//FORME A PRIVILEGIER
$reduc = filter_input(INPUT_POST, 'reduction', FILTER_VALIDATE_INT);



//Sorties
if($prix && $reduc){
    $coutFinal = $prix-$reduc;

?>


Prix : <?=$prix?>€
<br>
Réduction à appliquer : <?=$reduc?>€
<br>
Cout final : <?=$coutFinal?>€

<? } else { ?>
ERREUR !!!!
    <?} ?>