<?

require_once "template/data.php";
require_once 'template/header.php';
require_once  'template/nav.php';

$query = $db->prepare("SELECT * FROM users ");

$query->execute();
//fetchall
$users = $query->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
print_r($users);
echo "</pre>";


?>

<body>
    <? foreach ($users as $user) {
        // if ($user['gender'] === 'Female' ) {
        //     $couleur = "red";
        // } else {
        //     $couleur = "blue";
        // }
        //pour changer color des usre name et last name  
        $couleur = ($user['gender'] === 'Female') ? 'red' : 'blue';
    ?>

    <div class="card"
        style="width: 40rem; display:inline-block; margin:10px; margin-left:30px; padding: 10px; ; background-color:aquamarine ;">
        <img src=" <?= $user['photo'] ?> " class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title" style="color :<?= $couleur ?>"><?= $user['first_name'] ?> <?= $user['last_name'] ?>
            </h3>
            <h5 class="card-text"><?= $user['gender'] ?></h5>
            <h5 class="card-text"><?= $user['slogan'] ?></h5>
            <h5 class="card-text"><?= $user['email'] ?></h5>
            <h5 class="card-text"><?= $user['phone'] ?></h5>
            <a href="user.php" class="btn btn-primary">VOIR LA FICHE</a>
        </div>
    </div>
    <? } ?>
</body>

</html>