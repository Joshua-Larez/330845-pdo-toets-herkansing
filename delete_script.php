<?php

echo "Deleted";

// connect to database
include "./db_connect_script.php";


try {
  // make a new connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
    $sql = "DELETE FROM burrito WHERE id = :id";

   // Prepare statement
    $stmt = $conn->prepare($sql);
    $id = (INT)$_GET['id'];

    $stmt->bindParam(':id', $id);

  // execute statement
    $stmt->execute();

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

// close connection
$conn = null;


header("Refresh:0; url=read.php");
?>