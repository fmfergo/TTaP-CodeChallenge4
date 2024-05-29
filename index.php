<!--index.html-->

<!DOCTYPE html>

<head>

  <title>Guessing the number</title>

</head>

<body>

  <h1>Guess a number between 1 and 10!</h1>

  <form action="guess_number.php" method="post">
    <!-- only numbers are valid inputs -->
    <!-- TODO: Disallow numbers out of the range  -->
    <input type="number" name="guess">

    <input type="submit" value="Check!">

</body>