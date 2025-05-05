<!-- Unit4-01-PHP-GuessMyNumber -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8" />
    <meta name="description" content="Guessing Game"/>
    <meta name="keywords" content="immaculata, icd2o" />
    <meta name="author" content="Kukwac" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Title -->
    <title>Guess The Number</title>
  </head>
  <body>
    <?php
      echo "<h3>Guess The Number</h3>";
    ?>
    <form action="./result.php" method="post" target="result">
      <label for="userGuess">Guess the Number</label>
      <input type="number" id="userGuess" placeholder="Enter the Number..." name="userGuess">
      <br><br>
      <input type="submit" value="Guess Number">
    </form>
    
    <iframe id="result" name="result">
      <div id="display"></div>
    </iframe>
  </body>
</html>