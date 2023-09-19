<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Numberji</title>
    <link rel="stylesheet" type="text/css" href="css/numberji.css">
  </head>

  <body>
    <h1>Bienvenue à <span>Numberji</span></h1>

    <p><span>Numberji</span> choisit aléatoirement un nombre entre 1 et 100, puis il met le joueur au défi de le deviner en 10 tentatives maxi. À chaque tour, le joueur doit être informé s'il a deviné ou non le bon nombre si ce n'est pas le cas, <span>Numberji</span> lui indique si son estimation est trop basse ou trop élevée.<span>Numberji</span> vous rappele également les nombres déjà proposés.<span>Numberji</span> se termine quand le joueur a deviné le nombre mystère, ou s'il a épuisé ses 10 chances.À la fin du jeu, le joueur a la possibilité de débuter une nouvelle partie.</p>

    <div class="form">
      <!-- <label for="guessField">: </label> -->
      <input type="number" min="1" max="100" required id="guessField" placeholder="Entrez un nombre" class="guessField">
      <input type="submit" value="Jouer" class="guessSubmit">
    </div>

    <div class="resultParas">
      <p class="guesses"></p>
      <p class="lastResult"></p>
      <p class="lowOrHi"></p>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>