<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>type of food : </label>
        <input type="text" name="food"><br>
        <label>quantity : </label>
        <input type="number" name="quantity"><br>
        <label>price : </label>
        <input type="number" name="price"><br>
        <input type="submit" value="Order now">
    </form>
    
</body>
</html>-->
<!--?php
    //declarer un variable
    /*$quantity=3;
    $price=4.99;
    $total=null;
    echo"this is a quatite  {$quantity}<br>";
    echo"this is a price \${$price}<br>";
    $total=$quantity*$price;
    echo"the total of {$quantity} pizzas is : {$total}";*/
    //Arithmetic operators
    // + - * / ** %

    //  Increment/decrement operators
    //++, --

    //Operator Precedence
    //()
    //**
    //* / % + -
    echo"1_POST[]";
?--> 
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
