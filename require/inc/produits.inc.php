<?
require_once "liste-produits.php";

usort($produits, function ($a, $b){
    return $a["prix"] <=> $b["prix"]; // -1 0 1
});
?>

<main>
    <h2>Page des produits</h2>
    <img src="img/produits.jpg" />
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.
    </p>
    <h3>Liste des produits</h3>
    <i>Par prix croissant</i>
    <ul>
        <? foreach($produits as $k => $produit){ ?>
        <li>
            <?=$produit['nom']?> (ref. <?=$produit['id']?>) : <i><?=$produit['description']?></i>
            <b><?=$produit['prix']?>€</b>
        </li>
        <? } ?>
    </ul>
</main>