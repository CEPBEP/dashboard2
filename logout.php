<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logout</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <?php
        session_start();
        $_SESSION = array();
        session_destroy();
        header("Location: index.php");
        echo("Logout completed. Go back to: <a href='dashboard.php'>Check page</a>");
    ?>
  </body>
</html>
