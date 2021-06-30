<main>
    <? if (!empty($pays)) { ?>
    <h2><?= ucfirst($pays['nom']) ?></h2>
    <div id="infos">
        <img src="image/<?= $pays['image'] ?>" />

        <table>
            <tr>
                <td>Climat</td>
                <td><?= $pays['climat'] ?></td>
            </tr>
            <tr>
                <td>Continent</td>
                <td><?= $pays['continent'] ?></td>
            </tr>
            <tr>
                <td>Altitude min</td>
                <td><?= $pays['alt_min'] ?>m</td>
            </tr>
            <tr>
                <td>Altitude max</td>
                <td><?= $pays['alt_max'] ?>m</td>
            </tr>
        </table>

        <div class="voisins">
            <h4>Pays frontaliers</h4>
            <? if (!empty($pays['voisins'])) { ?>
            <ul>
                <?
                        foreach ($pays['voisins'] as $nom => $km) {
                            echo "<li>$nom : $km km</li>";
                        }
                        ?>
            </ul>
            <? } else { ?>
            pas de voisin.
            <? } ?>
        </div>

    </div>
    <? } else { ?>
    Veuillez sélectionner un pays pour afficher des informations géographique.
    <? } ?>
</main>