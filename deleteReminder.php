<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fernando's Reminders</title>
  <link rel="shortcut icon" href="img/favicon.ico">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="libs/bootstrap-3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="libs/jquery-3.2.1.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="libs/bootstrap-3.3.7/js/bootstrap.min.js"></script>

  <script src="js/script.js" type="text/javascript"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
  require_once("mysql_server.php");

  $user = 'admin';
  $password = 'password';
  $db = 'database';
  $table = "reminders";
  $port = 3306;
  $host = "127.0.0.1:$port";
  $connection = new MySQL_Server($user, $password, $host, $db, $table);

  $rTitle = $_GET['title'];

  $connection->delete_data($rTitle);
  $connection = null;

  echo "<p>Reminder '$rTitle' has been deleted from the database</p>";
  echo "<a href='/'>Return to Reminders</a>";

?>
</body>
</html>
