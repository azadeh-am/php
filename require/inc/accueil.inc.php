<?
require_once "liste-produits.php";

function trieParNom($a, $b){
    return strcmp($a["nom"], $b["nom"]);
}

usort($produits, "trieParNom");
?>

<main>
  <h2>Page d'accueil</h2>
  <img src="img/home.jpg" />
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <h3>Découvrez notre gamme de produits d'entretien :</h3>
  <i>Par ordre alphabétique :</i>
  <? foreach($produits as $k => $produit){ ?>
    <li><a href="produits.php"><?=$produit['nom']?></a></li>
  <? } ?>
</main>
