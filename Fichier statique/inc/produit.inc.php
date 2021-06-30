<? require_once 'listProduits.php';
usort($produits, function ($a, $b){
    return $a["prix"] <=> $b["prix"]; // -1 0 1
});
?>
<h1>BIENVENUE , Tous les jours, faites votre marché chez nous</h1>
<img src="inc/img/produits.jpg" />
<table class="table table-bordered table-dark">
    <thead>
        <? foreach ($produits as $key=> $produit){?>
        <tr>
            <th scope="col"><em><?=$produit['nom']?></em></th>
            <th scope="col"> <b>prix : </b><?=$produit['prix']?> €</th>
            <th scope="col"><i><?=$produit['description']?></i></th>
            <th scope="col"><i> ref. </i><?=$produit['id']?></th>
        </tr>
        <?}?>
    </thead>
</table>