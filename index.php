 <!DOCTYPE html>
<html>
<head>
    <title>Résultats</title>
</head>
<style>
    body{
    background-color: rgb(193, 123, 196);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 100vh;
    }
</style>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

        $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
        $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
        $DateNaissance = isset($_POST['DateNaissance']) ? htmlspecialchars($_POST['DateNaissance']) : ''; 
        
        // Affichage 
        echo "<h2>Informations reçues :</h2>";
        echo "Nom: " . $nom . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Téléphone: " . $phone . "<br>";
        echo "Date: " . $DateNaissance . "<br>";
    } else {
        echo "<p>Veuillez remplir le formulaire </p>";
    }
    ?>
</body>
</html>
