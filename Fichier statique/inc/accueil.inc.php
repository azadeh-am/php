<? require_once 'listProduits.php' ;

function tri_nom($a,$b){
    return strcmp($a["nom"], $b["nom"]);
}

usort($produits, 'tri_nom');
?>
<h1>BIENVENUE , Tous les jours, faites votre marché chez Nous</h1>

<img src="inc/img/home.jpg"/>
<h3>Découvrez notre gamme de produits d'entretien :</h3>
  <? foreach($produits as $key => $produit){ ?>
    <li><a href="produit.php"><?=$produit['nom']?></a></li>
  <? } ?>