<?php
    echo "Updated";
    // make connection to database
    include "./db_connect_script.php";


    // post Size and update
    if (isset($_POST['Size'])) {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE `burrito` SET `size` = :Size WHERE `burrito`.`id` = :id";

            // Prepare statement
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':Size', $_POST['Size']);

            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    // post sauce and update 
    if (isset($_POST['Sauce'])) {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE `burrito` SET `sauce` = :Sauce WHERE `burrito`.`id` = :id";

            // Prepare statement
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':Sauce', $_POST['Sauce']);

            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    // post bean and update
    if (isset($_POST['Bean'])) {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE `burrito` SET `bean` = :Bean WHERE `burrito`.`id` = :id";

            // Prepare statement
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':Bean', $_POST['Bean']);

            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }


    // post rice and update 
    if (isset($_POST['Rice'])) {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE `burrito` SET `rice` = :Rice WHERE `burrito`.`id` = :id";

            // Prepare statement
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':Rice', $_POST['Rice']);

            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }



    // redirect page
    header("Refresh:1; url=read.php");


