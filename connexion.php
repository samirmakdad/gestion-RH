<?php 
include("conecter.php");
session_start();

if(isset($_POST["test"])){
    $mail=$_POST["email"];
    $pass=$_POST["mot_de_passe"];
    $query="SELECT*FROM respo where user='$mail' AND pass='$pass'";
    if(mysqli_num_rows(mysqli_query($basse,$query))>0){
        $_SESSION['mail']=$nom;
        header("location:index.php");
    
    }else{
        echo ".<h4>.errure";
        
    }
}
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.unsplash.com/photo-1505995433367-ee1f6b21d60b');
            background-size: cover;
            background-position: center;
            background-color: 0a2558;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            background-color: 0a2558;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #0a2558;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0a2558;
        }

        .error {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form method="POST" action="">
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" placeholder="Entrez votre email">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="mot_de_passe" placeholder="Entrez votre mot de passe">
            <input type="submit" name="test" value="Connexion">
        </form>
      
    </div>
</body>
</html>
