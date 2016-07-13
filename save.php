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
          //die("Connection failed: " . $conn->connect_error);
          die("Da hat leider etwas nicht geklappt.<br>Bitte versuche es später nochmals.<br>");
        }
        //echo "Connected successfully<br>";

        $vname = $_SESSION['vname'];
        $name = $_SESSION['name'];
        $mail = $_SESSION['mail'];
        $instrument = $_SESSION['instrument'];
        $members = $_SESSION['members'];
        $check1 = $_SESSION['check1'];
        $check2 = $_SESSION['check2'];
        $check3 = $_SESSION['check3'];
        $check4 = $_SESSION['check4'];
        $ageGuess = $_SESSION['ageGuess'];

        //$sql = "INSERT INTO wettbewerb (vname, name, mail, instrument, members, check1, check2, check3, check4, ageGuess) VALUES ('$vname', '$name', '$mail', '$instrument', '$members', '$check1', '$check2', '$check3', '$check4', '$ageGuess')";
        $stmt = $conn->prepare("INSERT INTO wettbewerb (vname, name, mail, instrument, members, check1, check2, check3, check4, ageGuess)
    		VALUES (?,?,?,?,?,?,?,?,?,?)");
    		$stmt->bind_param("sssiiiiiii", $vname, $name, $mail, $instrument, $members, $check1, $check2, $check3, $check4, $ageGuess);

        //$conn->query($sql) === TRUE
        if ($stmt->execute()) {
            echo "Danke für deine Teilnahme, " . $_SESSION['vname'] . ". <br>Die Gewinner werden per Email benachrichtigt. Auf bald!<br>";
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
            echo "Da hat leider etwas nicht geklappt.<br>Bitte versuche es später nochmals.<br>";
        }

        echo '<form action="index.php"><input class="button" type="submit" name="toHome" value="Zur DoppelKlang Homepage"></form>';
        $conn->close();

         ?>

      </div>

  </body>
</html>
