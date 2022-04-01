<?php
// make connection to database
include "./db_connect_script.php";

echo "created";

// variables of post 
$size = $_POST["Size"];
$sauce = $_POST["Sauce"];
$bean = $_POST["Bean"];
$rice = $_POST["Rice"];


try {
    // make new connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // prepare statement
    $stmt = $conn->prepare("INSERT INTO `burrito` (`size`, `sauce`, `bean`, `rice`)
                            VALUES (:size, :sauce, :Bean, :rice)");
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':sauce', $sauce);
    $stmt->bindParam(':Bean', $bean);
    $stmt->bindParam(':rice', $rice);

    // execute prepared statement
    $stmt->execute();
} 
// exception error
catch(PDOException $e) {
    echo "<br>" . $e->getMessage();
}

// redirect page
header("Refresh:1; url=read.php");
?>