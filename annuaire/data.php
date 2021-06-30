<? try {
    $db = new PDO("mysql:host=localhost; port = 8889; dbname=annuaire;", 'root', 'root');
} catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br />";
    die();
}