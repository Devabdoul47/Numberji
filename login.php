<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Se connecter à Numberji</title>
</head>
<body>
    <div class="login-box">
        <h2>Se connecter à Numberji</h2>
        <form action="Numberji.php" method="post">
            <div class="user-box">
                <label>Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" required>
            </div>
            <div class="user-box">
                <label>Mot de passe</label>
                <input type="password" name="pass" id="pass" required>
            </div>
            <button type="submit" name="connecter" id="connecter">Se connecter</button>
        </form>
    </div>
    <script src="js/login.js"></script>
</body>
</html>