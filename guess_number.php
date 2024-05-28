<!--guess_number.php-->

<?php

if (!isset($_SESSION['numberToGuess'])) {
  $_SESSION['numberToGuess'] = rand(1, 10);
  $_SESSION['attempts'] = 3;
}

  if ($_SESSION['attempts'] > 0) {
    $attempts = $_SESSION['attempts'];
    $attempts--;
    $_SESSION['attempts'] = $attempts;
    $guess = $_POST['guess'];

    if ($guess == $_SESSION['numberToGuess']) {echo "You answered ".$guess.". This is the correct answer!";}

    else if ($guess < $_SESSION['numberToGuess']) {echo "You answered ".$guess.". The correct answer is higher. You have ".$_SESSION['attempts']." left";}
    else if ($guess > $_SESSION['numberToGuess']) {echo "You answered ".$guess.". The correct answer is lower. You have ".$_SESSION['attempts']." left";}
  } else {
    echo "Sorry! You ran out of attemps";
  }
?>