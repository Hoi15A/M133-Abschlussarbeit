<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wettbewerb - P2</title>
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
          Hallo <?php echo $_SESSION['vname']; ?>, bitte beantworte die 1. Frage:<br>
          Welches Instrument spielt unser Gründungsmitglied Gusti?
        </p>
        <form method="post">
          <table>
            <tr>
              <td>Triangel </td>
              <td><input type="radio" name="instrument" value="1" required><br></td>
            </tr>
            <tr>
              <td>Dudelsack </td>
              <td><input type="radio" name="instrument" value="2" required><br></td>
            </tr>
            <tr>
              <td>Airhorn </td>
              <td><input type="radio" name="instrument" value="3" required><br></td>
            </tr>
            <tr>
              <td><input class="button" type="submit" name="empty" value="Leeren" formnovalidate></td>
              <td><input class="button" type="submit" name="continue" value="Weiter"></td>
            </tr>
          </table>
        </form>
      </div>

      <?php

       ?>


  </body>
</html>
