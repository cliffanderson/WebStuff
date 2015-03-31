<html>
  <title>Test Webpage!</title>

  <body>

    <p>Please log in:</p>


    <form action="login.php" method="POST">
      Username: <input type="text">
      <br> <br>
      Password: <input type="text">
      <br> <br>
      <input type="submit">
    </form>
  </body>

</html>

<?php
  echo "MySQL: " . "<br>";

  $server = "localhost";
  $user = "root";
  $pass = "";

  //create connection
  $conn = mysqli_connect($server, $user, $pass);

  if (!$conn)
  {
    die("Database connection failed " . mysqli_connect_error());
  }

  echo "Connection successful";

  mysqli_close($conn);
?>
