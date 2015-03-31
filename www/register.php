<html>
  <title>Test Webpage!</title>

  <body>

    <p>Register for the site!</p>


    <form action="register.php" method="POST">
      Username: <input name="username" type="text">
      <br> <br>
      Password: <input name="password" type="text">
      <br> <br>
      <input type="submit">
    </form>
  </body>

</html>

<?php
  var_dump($_POST);



?>
