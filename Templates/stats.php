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
    <title>My Fitness</title>
</head>
<style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body,
html {
    font-family: 'Roboto', sans-serif;
    background-color: #000000;
    color: white;
}

.container {
    width: 80%;
    margin: 0 auto;
}

h1 {
    text-align: center;
}

form {
    margin-bottom: 20px;
}

form label {
    display: block;
    margin-bottom: 5px;
}

form input[type="date"],
form input[type="text"],
form input[type="number"],
form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form button {
    padding: 10px 20px;
    background-color: red;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;

}

.historique {
    border-top: 1px solid #ccc;
    margin-top: 20px;
    padding-top: 20px;
}

.historique h2 {
    margin-bottom: 10px;
}

.historique ul {
    list-style-type: none;
    padding: 0;
}

.historique ul li {
    margin-bottom: 10px;
}

.historique ul li span {
    font-weight: bold;
}

.contact2 {
  display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    margin-bottom: 6rem;
    position: relative;
    z-index: 1;
}

.suivie {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 6rem;
    position: relative;
    z-index: 1;
}

.txt {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 6rem;
    position: relative;
    z-index: 1;
    background-image: url('https://assets.sportheroesgroup.com/articles/56faabbd475c1fed4a3d3539/muscu-1080x675.png?v=1658831675');
    background-size: cover;
    height: 80vh;
    color: red;
    
}

.txt h1 {   
    font-size: 2rem;
    margin: 1rem;
    font-weight: bold;
}

.txt p {
    font-size: 1rem;
    margin-bottom: 1rem;
    padding: 0 1rem;
    font-weight: bold;

}

</style>

<body>
<?php include 'nav.php'; ?>
<div class="txt">
    <h1>My Fitness</h1>
    <p>My Fitness is a workout tracking app.
 You can add your workouts and view them at any time.
 Start by adding a workout below!
    </p>
</div>
<div class="container">
        <h1>Journal d'entraînement</h1>
        
        
        <form action="ajouter_entrainement.php" method="post">
            <label for="date">Date :</label>
            <input type="date" id="date" name="date" required><br>
            
            <label for="exercice">Exercice :</label>
            <input type="text" id="exercice" name="exercice" required><br>
            
            <label for="poids">Poids (kg) :</label>
            <input type="number" id="poids" name="poids" min="0" required><br>
            
            <label for="repetitions">Répétitions :</label>
            <input type="number" id="repetitions" name="repetitions" min="0" required><br>
            
            <label for="commentaire">Commentaire :</label>
            <textarea id="commentaire" name="commentaire"></textarea><br>
            
            <button type="submit">Ajouter Entraînement</button>
        </form>
        
        
        <div class="historique">
            <h2>Historique d'entraînement</h2>
            <ul>
                <!-- Les données d'entraînement seront affichées ici -->
                <?php
                $query = 'SELECT * FROM historique';
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                $historiques = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($historiques as $historique) {
                    echo "<li> Date : " . $historique["Date"] . " | Exercice : " . $historique["Exercice"] . " / Poids : " . $historique["Poids"] . " / Repetitions : " . $historique["Repetitions"] . " / Comment : " . $historique["Commentaire"] . "</li>";
                } 
                ?>
            </ul>
        </div>
    </div>
    <div class="suivie">
    </div>
</body>
<div class="contact2">
<?php include 'contact.php';?>
</div>

</html>
