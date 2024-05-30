<?php
$pdo = new PDO
(
    'mysql:host=localhost;dbname=b2dev;charset=UTF8',
    'root',
    'root',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: white;
}


    div {
        background-color: black;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    button {
        border: none;
        border-radius:4px;
        padding: 10px 20px;
        margin: 5px;
        background-color: red;
    }
    a {
        padding: 10px 20px;
        text-decoration: none;
        color: white;
    }
</style>
<body>
<?php include 'nav.php'; ?>
<div>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $exercice = $_POST['exercice'];
    $poids = $_POST['poids'];
    $repetitions = $_POST['repetitions'];
    $commentaire = $_POST['commentaire'];
    
    $query = 'INSERT INTO historique VALUES (:date, :exercice, :poids, :repetitions, :commentaire)';
    $stmt = $pdo->prepare($query);
    $stmt->execute(array(
        ':date' => $date,
        ':exercice' => $exercice,
        ':poids' => $poids,
        ':repetitions' => $repetitions,
        ':commentaire' => $commentaire
    ));
    echo '<p> Exercice successfully added ! </p>';
    echo '<button><a href="stats.php">Go back to stats</a></button>';
}
?>
</div>
</body>
</html>