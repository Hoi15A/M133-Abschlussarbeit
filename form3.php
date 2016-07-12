<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wettbewerb - P3</title>
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
          Hallo <?php echo $_SESSION['vname']; ?>, nun die 2. Frage:<br>
          Wieviele Bandmitglieder spielen bei uns mit?
        </p>
        <form method="post">
          <table>
            <tr>
              <td>21 </td>
              <td><input type="radio" name="members" value="1" required><br></td>
            </tr>
            <tr>
              <td>69 </td>
              <td><input type="radio" name="members" value="2" required><br></td>
            </tr>
            <tr>
              <td>666 </td>
              <td><input type="radio" name="members" value="3" required><br></td>
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
          $_SESSION['members'] = $_POST['members'];
          header("Location:form4.php");
          }
       ?>


  </body>
</html>
