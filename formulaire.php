<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="POST" action="index.php"> 
        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" required><br><br>
        
        <label for="pswd">Mot de passe :</label>
        <input type="password" id="pswd" name="pswd" required><br><br>
        
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
