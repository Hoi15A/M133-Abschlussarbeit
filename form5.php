<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wettbewerb - P5</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>

  <?php
    session_start();
   ?>

  <body>
    <h1>40 Jahre DoppelKlang - Wettbewerb</h1>
      <div class="form-box">
        <p>
          So <?php echo $_SESSION['vname']; ?>, zum Schluss noch eine Schätzfrage:<br>
          Wie Alt sind alle Mitglieder zusammen?
        </p>
        <form method="post">
          <table>
            <tr>
              <td><input type="number" name="ageGuess" min="1" max="10000" required></td>
            </tr>
            <tr>
              <td><input class="button" type="submit" name="continue" value="Weiter"></td>
            </tr>
          </table>
        </form>
      </div>

      <?php
        if (isset($_POST['continue'])) {
          $_SESSION['ageGuess'] = $_POST['ageGuess'];
          header("Location:auswertung.php");
          }
       ?>


  </body>
</html>
