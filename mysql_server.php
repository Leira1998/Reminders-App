<?php

class MySQL_Server
{
  // Declare all class variables
  private $user;
  private $password;
  private $host;
  private $db;
  private $table;
  private $cnt;

  function __construct($user, $password, $host, $db, $table)
  {
    $this->user = $user;
    $this->password = $password;
    $this->host = $host;
    $this->db = $db;
    $this->table = $table;
    $this->connect_database();
  }

  private function connect_database()
  {
    # Check if server is up
    try {
      $this->cnt = new PDO(
        "mysql:host=$this->host;dbname=$this->db;charset=utf8mb4",
        $this->user,
        $this->password);
      $this->cnt = null;
    } catch (PDOExeption $err) {
      print "There is a problem with the server: " . $err . "<br/>";
      die();
    }
    $this->cnt = new PDO(
      "mysql:host=$this->host;dbname=$this->db;charset=utf8mb4",
      $this->user,
      $this->password);
  }

  // Recive all data from the database
  public function get_all_data($table)
  {
    $sql = "SELECT * FROM $table";
    return $this->cnt->query($sql);
  }

  // Insert new data to the database
  public function insert_data($title, $description, $deadline)
  {
    $date = date("Y-m-d");
    $sql = "INSERT INTO reminders
    (title, description, created_at, deadline)
    VALUES ('$title', '$description', '$date', '$deadline')";
    $this->cnt->exec($sql);
  }

  // Update existing data in the database
  public function update_data($oldTitle, $newTitle, $newDescription, $newDeadline)
  {
    $sql = "UPDATE reminders SET title=$newTitle WHERE title=$oldTitle";
    $this->cnt->exec($sql);
  }

  // Delete data from the database
  public function delete_data($title)
  {
    $sql = "DELETE FROM reminders WHERE title='$title'";
    $this->cnt->exec($sql);
  }

}

?>
