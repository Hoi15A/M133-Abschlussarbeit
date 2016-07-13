<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wettbewerb - Adminbereich</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../style.css" type="text/css">
  </head>

  <?php
    session_start();
   ?>

  <body>
    <h1>40 Jahre DoppelKlang - Wettbewerb</h1>
      <div class="form-box">
        <h2>Adminbereich</h2>
        <form method="post">
          <table>
            <tr>
              <td><input class="button" type="submit" name="showAll" value="Alle Teilnahmen Anzeigen"></td>
              <td><input class="button" type="submit" name="auswerten" value="Wettbewerb auswerten"></td>
            </tr>
          </table>
        </form>
      </div>

      <?php
        if (isset($_POST['showAll'])) {
          header("Location:showAll.php");
        }

        if (isset($_POST['auswerten'])) {
          header("Location:auswerten.php");
        }
       ?>


  </body>
</html>
