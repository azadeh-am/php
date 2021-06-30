<? require_once 'data.php' ?>
<ul>
    <? foreach ($devises as $ville => $devise){?>
    <li> <a href="devises.php?ville=<?= $ville ?>">
            <?= $ville ?>
        </a> </li>
    <?}?>
</ul>
<? 
$ville = $_GET['ville'];
$devise = $devises[$ville];
?>
La devise de <?=$ville?> est <?=$devise?>