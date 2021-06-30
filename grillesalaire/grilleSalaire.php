<?
include "grille_salaire.php";

$niveau= array_keys($grille['developpeur']);





?>

<form>
    <select name="job">
        <option>--Choisir--</option>
        <?
foreach($grille as $job => $array){
    echo "<option> $job </option>";
}
?>
    </select>
    <select name="level">
        <option>--Choisir--</option>
        <?
foreach($niveau as $level){
    echo "<option>$level</option>";
}
?>
    </select>
    <input type="submit" value="ENVOYER">
</form>
<hr>
<?
if(!isset($_GET['job']) || $_GET['job']=='--Choisir--'){ ?>
<p>'Vous devez choisir un metier dans cette enteprise'</p>
<?} elseif(!isset($_GET['level']) || $_GET['level']=='--Choisir--'){ ?>
<p>'Vous cherchez quel niveau' </p>
<?} else {

    $job=$_GET['job'];
    $level=$_GET['level'];
    $salaire= $grille[$job][$level];
     ?>
<p> 'Le salaire de <?=$job?> avec le niveau <?=$level?> est <?=$salaire?>'</p>
<?}?>