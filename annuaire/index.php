<?

require_once "data.php";

$query = $db->prepare("SELECT * FROM users ");

$query->execute();
//fetchall
$users = $query->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
print_r($users);
echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <? foreach ($users as $user) {
        // if ($user['gender'] === 'Female' ) {
        //     $couleur = "red";
        // } else {
        //     $couleur = "blue";
        // }

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
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <? } ?>
</body>

</html>