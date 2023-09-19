let randomNumber = Math.floor(Math.random() * 100) + 1;

let guesses = document.querySelector('.guesses');
let lastResult = document.querySelector('.lastResult');
let lowOrHi = document.querySelector('.lowOrHi');

let guessSubmit = document.querySelector('.guessSubmit');
let guessField = document.querySelector('.guessField');

let jeux = document.getElementById('jeux');

let guessCount = 1;
let resetButton;
guessField.focus();

function checkGuess(){
  let userGuess = Number(guessField.value);
  if (guessCount === 1) {
    guesses.textContent = 'Propositions précédentes: ';
  }
  guesses.textContent += userGuess + ' ';

  if (userGuess === randomNumber) {
    lastResult.textContent = '🎇 Bravo, vous avez trouvé le nombre !🎇';
    lastResult.style.backgroundColor = 'green';
    lowOrHi.textContent = '';
    setGameOver();
  } else if (guessCount === 10) {
     lastResult.textContent = '🤕!!! PERDU !!!🤕';
     setGameOver();
  } else {
     lastResult.textContent = 'Faux !❌❌❌';
     lastResult.style.backgroundColor = 'red';
     if (userGuess < randomNumber) {
      lowOrHi.textContent = 'Le nombre saisi est trop petit !';
     } else if (userGuess > randomNumber) {
      lowOrHi.textContent = 'Le nombre saisi est trop grand !';
     }
  }

  guessCount++;
  guessField.value = '';
  guessField.focus();
}
guessSubmit.addEventListener('click', checkGuess);

function setGameOver() {
  guessField.disabled = true;
  guessSubmit.disabled = true;
  resetButton = document.createElement('button');
  resetButton.textContent = 'Commencer une nouvelle partie';
  document.body.appendChild(resetButton);
  resetButton.addEventListener('click', resetGame);
}
function resetGame() {
  guessCount = 1;

  let resetParas = document.querySelectorAll('.resultParas p');
  for (let i = 0 ; i < resetParas.length ; i++) {
    resetParas[i].textContent = '';
  }

  resetButton.parentNode.removeChild(resetButton);

  guessField.disabled = false;
  guessSubmit.disabled = false;
  guessField.value = '';
  guessField.focus();

  lastResult.style.backgroundColor = 'blue';

  randomNumber = Math.floor(Math.random() * 100) + 1;
};
