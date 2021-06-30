   <aside>
       <ul>
           <h4>Liste des pays :</h4>
           <? foreach ($liste_pays as $key => $country) { ?>

           <li><a href='manuelGeo.php?pays=<?= $key ?>'><?= ucfirst($country['nom']) ?></a></li>

           <? } ?>
       </ul>
   </aside>