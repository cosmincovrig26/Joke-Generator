<!DOCTYPE html>
<html>
<head>
  <script defer src="script.js"></script>
  <link href="style.css" rel="stylesheet">
  <title>Fathom03 Task 1</title>
</head>
<body onload="createJoke()"> <!-- on load, have a joke already prepared-->
  <div class= "structure">
    <?php
      include_once 'sqlconn.php';
      if (isset($_POST["submit"])) {
        $myId = $_POST['randId'];
        $sql = "SELECT setup, punchline FROM jokes WHERE id = '$myId'";
        $res = mysqli_query($conn, $sql);
        if ($res->num_rows > 0) {
      while($row = $res->fetch_assoc()) {
        echo "<h3 class ='jokecontainer'>" . $row["setup"] . "<br><br>" . $row["punchline"] . "</h3>";
        }
      }
    }
     ?>
    <h1 class="theTitle">Press the <span style="color: green">Green</span> Button </h1>
      <form action="index.php" method="POST">                <!--Form that has an id number of a joke automatically chosen-->
        <input id="randId" name="randId" class="hide">       <!--on loading the webpage, and then gets the joke from the database-->
        <img class="img interiorimg" src="../images_and_fonts/interior.jpg" alt="Show" width="912" height="640">
        <button class=btn  type="submit" name="submit"></button>
      </form>
  </div>
</body>
</html>
