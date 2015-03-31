<html>
  <title>Test Webpage!</title>

  <body>

    <p>Welcome to test site</p>


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
