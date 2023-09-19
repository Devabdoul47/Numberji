<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/regist.css">
    <title>Inscricription Numberji</title>
</head>
<body>    
    <div class="login-box">
        <h2>S'inscrire à <span>Numberji</span></h2>
        <form action="Numberji.php" method="post">
        <div class="user-box">
                <label>Nom</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div class="user-box">
                <label>Prénom</label>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <!-- judicael
            hounssa homavo -->
            <div class="user-box">
                <label>Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" required>
            </div>
            <div class="user-box">
                <label>Mot de passe</label>
                <input type="text" name="pass" id="pass" required>
            </div>
            <div class="user-box">
                <label>Comfirmer mot de passe</label>
                <input type="text" name="pass" id="pass" required>
            </div>
            <button type="submit" id="inscrire">S'inscrire</button>
        </form>
    </div>
    <script src="js/regist.js"></script>
</body>
</html>