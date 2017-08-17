<?php
if (isset($_POST['submit1'])) {
  header('Location: /index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>New Reminder</title>
  <link rel="shortcut icon" href="../img/favicon.ico">

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
    <div class="container">
      <h2 class="form-title">New Reminder</h2>
      <form class="form-horizontal" name="new-reminder" method="post">
        <div class="form-group">
          <label for="reminderTitle" class="col-sm-2 control-label">Title</label>
          <div class="col-sm-10" >
            <input type="text" id="reminderTitle" class="form-control" name="reminderTitle" placeholder="Title" />
          </div>
        </div>
        <div class="form-group">
          <label for="reminderDescription" class="col-sm-2 control-label">Description</label>
          <div class="col-sm-10">
            <input type="text" id="reminderDescription" class="form-control" name="reminderDescription" placeholder="Description"/>
          </diV>
        </div>
        <div class="form-group">
          <label for="reminderDeadline" class="col-sm-2 control-label">Deadline Date</label>
          <div class="col-sm-10">
            <input type="date" id="reminderDeadline" class="form-control" name="reminderDeadline" placeholder="Deadline" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="submit1" class="btn btn-default" value="Create" onclick="insertReminder()" />
          </div>
        </div>
      </form>
    </div>
  </main>
  <footer>
    <p>Fernando's Reminders</p>
  </footer>
</body>
</html>
