<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wettbewerb - Auswertung</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../style.css" type="text/css">
    <link rel="stylesheet" href="table.css" type="text/css">
  </head>

  <?php
    session_start();
   ?>

  <body>
    <h1>40 Jahre DoppelKlang - Wettbewerb</h1>
      <div class="form-box">
        <h2>Adminbereich</h2>
        <h3>Richtige Antworten</h3>
        <form method="post">
          <input class="button" type="submit" name="toAdmin" value="Zurück">
        </form>
        <hr>
      <?php
        if (isset($_POST['toAdmin'])) {
            header("Location:index.php");
          }

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
        //echo "Connected successfully<br>";


        $sql = "SELECT *, abs(ageGuess - 122) as distance_from_test FROM wettbewerb WHERE instrument = '1' AND members = '3' AND check1 = '0' AND check2 = '1' AND check3 = '0' AND check4 = '1' order by distance_from_test";
        $result = $conn->query($sql);


        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th> <th>TIME</th> <th>VORNAME</th> <th>NAME</th> <th>MAIL</th> <th>INSTRUMENTS</th> <th>MEMBERS</th> <th>BOX1</th> <th>BOX2</th> <th>BOX3</th> <th>BOX4</th> <th>AGE GUESS</th>";
        echo "</tr>";
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>".
                  "<td>" . $row["time"] . "</td>".
                  "<td>" . $row["vname"] . "</td>".
                  "<td>" . $row["name"]. "</td>".
                  "<td>" . $row["mail"] . "</td>".
                  "<td>" . $row["instrument"] . "</td>".
                  "<td>" . $row["members"] . "</td>";
            if ($row["check1"] == 1) {
              echo '<td><input type="checkbox" disabled checked></td>';
            }
            else {
              echo '<td><input type="checkbox" disabled></td>';
            }

            if ($row["check2"] == 1) {
              echo '<td><input type="checkbox" disabled checked></td>';
            }
            else {
              echo '<td><input type="checkbox" disabled></td>';
            }

            if ($row["check3"] == 1) {
              echo '<td><input type="checkbox" disabled checked></td>';
            }
            else {
              echo '<td><input type="checkbox" disabled></td>';
            }

            if ($row["check4"] == 1) {
              echo '<td><input type="checkbox" disabled checked></td>';
            }
            else {
              echo '<td><input type="checkbox" disabled></td>';
            }

            echo "<td>" . $row["ageGuess"] . "</td>";

            echo "</tr>";
          }
        } else {
          echo "0 results";
        }
        echo "</table>";
        $conn->close();
       ?>
       </div>

  </body>
</html>
