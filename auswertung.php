<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wettbewerb - Auswertung</title>
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
          Vielen Dank, <?php echo $_SESSION['vname']; ?>. Überprüfe hier nochmals Deine angaben.
        </p>
        <hr>
        <table>
          <tr>
            <td>Vorname: </td>
            <td><?php echo $_SESSION['vname']; ?></td>
          </tr>
          <tr>
            <td>Nachname: </td>
            <td><?php echo $_SESSION['name']; ?></td>
          </tr>
          <tr>
            <td>Mail: </td>
            <td><?php echo $_SESSION['mail']; ?></td>
          </tr>
        </table>
        <hr>
        <table>
          <tr>
            <td>Gustis Instrument: </td>
            <td><?php echo $_SESSION['instrument']; ?></td>
          </tr>
          <tr>
            <td>Anzahl Mitglieder: </td>
            <td><?php echo $_SESSION['members']; ?></td>
          </tr>
          <tr>
            <td>Was trifft zu: </td>
            <td><?php

              if ($_SESSION['check1'] == 1) {
                echo "One ";
              }

              if ($_SESSION['check2'] == 1) {
                echo "Two ";
              }

              if ($_SESSION['check3'] == 1) {
                echo "Three ";
              }

              if ($_SESSION['check4'] == 1) {
                echo "Four ";
              }

             ?></td>
          </tr>
          <tr>
            <td>Alter aller Mitglieder: </td>
            <td><?php echo $_SESSION['ageGuess']; ?></td>
          </tr>
        </table>
        <hr>
        <form method="post">
          <table>
            <tr>
              <td><input class="button" type="submit" name="empty" value="Leeren" formnovalidate></td>
              <td><input class="button" type="submit" name="continue" value="Weiter"></td>
            </tr>
          </table>
        </form>
      </div>

      <?php
        if (isset($_POST['continue'])) {
            header("Location:save.php");
          }

          if (isset($_POST['empty'])) {
            session_unset();
            header("Location:index.php");
          }
       ?>


  </body>
</html>
