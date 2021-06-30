 <?
    $a = filter_input(INPUT_POST,'a',FILTER_VALIDATE_INT);
    $b = filter_input(INPUT_POST,'b',FILTER_VALIDATE_INT);
    if ( $a && $b ) {
    $sum = $a + $b;
    $multiplication = $a * $b;
    $soustraction = $a - $b;
    $division = $a / $b;
    $pairA = ($a % 2 == 0) ? "pair" : "impair";    
    $pairB = ($b % 2 == 0) ? "pair" : "impair";
    
    echo "La somme de $a et $b vaut $sum<br />";
    echo "La multiplication de $a et $b vaut $multiplication<br />";
    echo "La soustraction de $a et $b vaut $soustraction<br />";
    echo "La division de $a et $b vaut $division<br />";
    echo "$a est un nombre $pairA<br />";
    echo "$b est un nombre $pairB<br />"; 

        }else{
            echo "ERREUR";
        }

    ?>