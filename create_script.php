<?php
// make connection to database
include "./db_connect_script.php";

echo "created";

// variables of post 
$size = $_POST["Size"];
$sauce = $_POST["Sauce"];


// if the bonen is not selected it gives geen, otherwise just goes as post 
if(!isset($_POST['Bean'])){    
    $bean = 'geen';
} else {
    $bean = $_POST['Bean'];
}
if(!isset($_POST['Rice'])){    
    $rice = 'geen';
} else {
    $rice = $_POST['Rice'];
}

// prints out the post 
print_r($bean);
print_r($rice);

try {
    // make new connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // prepare statement
    $stmt = $conn->prepare("INSERT INTO `burrito` (`size`, `sauce`, `bean`, `rice`)
                            VALUES (:size, :sauce, :bean, :rice)");
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':sauce', $sauce);
    $stmt->bindParam(':bean', $bean);
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