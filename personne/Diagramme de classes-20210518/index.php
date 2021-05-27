<?php
include_once "Ado.php";
include_once "Enfant.php";

$ado = new Ado("Dupond","Martin","14", "seconde", false);
$ado->afficher();

$enfant = new Enfant("Dupond","Sophie","9", "CP", true);
$enfant->afficher();



