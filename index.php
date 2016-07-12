<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wettbewerb - P1</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <h1>40 Jahre DoppelKlang - Wettbewerb</h1>
      <div class="form-box">
        <form method="post">
          <table>
            <tr>
              <td>Vorname: </td>
              <td><input type="text" name="vname" required><br></td>
            </tr>
            <tr>
              <td>Nachname: </td>
              <td><input type="text" name="name" required><br></td>
            </tr>
            <tr>
              <td>Email: </td>
              <td><input type="email" name="mail" required><br></td>
            </tr>
            <tr>
              <td><input class="button" type="submit" name="empty" value="Leeren" formnovalidate></td>
              <td><input class="button" type="submit" name="continue" value="Weiter"></td>
            </tr>
          </table>
        </form>
      </div>

      <?php
        session_start();

        if (isset($_POST['continue'])) {
          $_SESSION['vname'] = $_POST['vname'];
          $_SESSION['name'] = $_POST['name'];
          $_SESSION['mail'] = $_POST['mail'];
          header("Location:form2.php");
          }

        if (isset($_POST['empty'])) {
          session_unset();
        }

       ?>


  </body>
</html>
