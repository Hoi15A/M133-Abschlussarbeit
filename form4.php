<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wettbewerb - P4</title>
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
          Danke <?php echo $_SESSION['vname']; ?> Nächste Frage, mehrfach-antwort möglich:<br>
          Was trifft zu?
        </p>
        <form method="post">
          <table>
            <tr>
              <td>Bob isst gern bananen </td>
              <td><input type="checkbox" name="check1" value="1"><br></td>
            </tr>
            <tr>
              <td>Alle Bandmitglieder mögen bananen </td>
              <td><input type="checkbox" name="check2" value="1"><br></td>
            </tr>
            <tr>
              <td>Alle hassen Bananen </td>
              <td><input type="checkbox" name="check3" value="1"><br></td>
            </tr>
            <tr>
              <td>Bob hat 2 bananen </td>
              <td><input type="checkbox" name="check4" value="1"><br></td>
            </tr>
            <tr>
              <td><input class="button" type="submit" name="continue" value="Weiter"></td>
              <td></td>
            </tr>
          </table>
        </form>
      </div>

      <?php
        if (isset($_POST['continue'])) {

          if (isset($_POST['check1'])) {
            $_SESSION['check1'] = 1;
          }
          else {
            $_SESSION['check1'] = 0;
          }

          if (isset($_POST['check2'])) {
            $_SESSION['check2'] = 1;
          }
          else {
            $_SESSION['check2'] = 0;
          }

          if (isset($_POST['check3'])) {
            $_SESSION['check3'] = 1;
          }
          else {
            $_SESSION['check3'] = 0;
          }

          if (isset($_POST['check4'])) {
            $_SESSION['check4'] = 1;
          }
          else {
            $_SESSION['check4'] = 0;
          }
          echo "<br>";
          echo $_SESSION['check1'] . "<br>" . $_SESSION['check2'] . "<br>";
          echo $_SESSION['check3'] . "<br>" . $_SESSION['check4'] . "<br>";

          //header("Location:form4.php");
          }
       ?>


  </body>
</html>
