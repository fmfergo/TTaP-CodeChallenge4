<!--guess_number.php-->

<?php

if (!isset($_SESSION['numberToGuess'])) {
  $_SESSION['numberToGuess'] = rand(1, 10);
  $_SESSION['attempts'] = 3;
}

  // The use of a maximum number of attemps is not really implemented
  if ($_SESSION['attempts'] > 0) {
    // Reduce the numbers of attemps left by 1
    $attempts = $_SESSION['attempts'];
    $attempts--;
    $_SESSION['attempts'] = $attempts;

    // Get the number that the player has entered
    $guess = $_POST['guess'];

    // Compare the number entered with the number to guess
    if ($guess == $_SESSION['numberToGuess']) {echo "You answered ".$guess.". This is the correct answer!";}
    else if ($guess < $_SESSION['numberToGuess']) {echo "You answered ".$guess.". The correct answer is higher. You have ".$_SESSION['attempts']." left";}
    else if ($guess > $_SESSION['numberToGuess']) {echo "You answered ".$guess.". The correct answer is lower. You have ".$_SESSION['attempts']." left";}
  } else {
    echo "Sorry! You ran out of attemps";
  }
?>