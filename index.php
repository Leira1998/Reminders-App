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
  <script src="js/server.js" type="text/javascript"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <header>
    <div class="nav">
      <a href="/index.php" class="logo"><span>Reminders</span></a>
      <a href="/new.php" class="new"><span class="glyphicon glyphicon-plus"></span></a>
    </div>
  </header>
  <main>
    <ul>
    <?php
      ini_set('display_errors', 'On');
      error_reporting(E_ALL);
      date_default_timezone_set("Europe/Madrid");

      require_once("mysql_server.php");

      $user = 'admin';
      $password = 'password';
      $db = 'database';
      $table = "reminders";
      $port = 3306;
      $host = "127.0.0.1:$port";
      $connection = new MySQL_Server($user, $password, $host, $db, $table);

      $data = $connection->get_all_data($table);
      $rowCount = $data->rowCount();

      foreach ($data as $row) {
        $deadline = date("d/m/Y", strtotime($row['deadline']));
        $deleteLink = '/deleteReminder.php?title=' . $row['title'];

        echo '<li>' . "\n";
        echo '<div class="task">';
        echo '<span class="title">'. $row['title'] . '</span> ' . $row['description'];
        echo "<a class='delete-btn' href='" . $deleteLink . "'>";
        echo '<span class="glyphicon glyphicon-trash"></span>';
        echo '</a>';
        echo '<span class="deadline"><span class="glyphicon glyphicon-calendar"></span> ' . $deadline . "</span>\n";
        echo "</div>\n</li>\n";
      }

      $connection = null;

    ?>
    </ul>
  </main>
  <footer>
    <p>Fernando's Reminders</p>
  </footer>
</body>
</html>
