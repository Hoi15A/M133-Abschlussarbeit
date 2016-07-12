<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wettbewerb - Speichern</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>

  <?php
    session_start();
   ?>

  <body>
    <h1>40 Jahre DoppelKlang - Wettbewerb</h1>
      <div class="form-box">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "m133_wettbewerb";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        $sql = "INSERT INTO wettbewerb (vname, name, mail, instrument, members, check1, check2, check3, check4, ageGuess)
        VALUES ($_SESSION['vname'], $_SESSION['name'], $_SESSION['mail'], $_SESSION['instrument'], $_SESSION['members'], $_SESSION['check1'], $_SESSION['check2'], $_SESSION['check3'], $_SESSION['check4'], $_SESSION['ageGuess'])";
         ?>
      </div>

  </body>
</html>
