<?php
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);

  $user = 'admin';
  $password = 'password';
  $db = 'database';
  $table = "reminders";
  $port = 3306;
  $host = "127.0.0.1:$port";

  require_once("mysql_server.php");
  $connection = new MySQL_Server($user, $password, $host, $db, $table);

  $rTitle = $_GET['title'];
  $rDes = $_GET['description'];
  $rDeadline = $_GET['deadline'];

  $rTitle = ucfirst($rTitle);

  $connection->insert_data($rTitle, $rDes, $rDeadline);

  $connection = null;

?>
