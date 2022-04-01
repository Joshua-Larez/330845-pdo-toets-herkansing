<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>pdo-toets-herkansing</title>
  </head>
  <body>
    <h1>Wijzig je burrito</h1>
    <?php 

        // make connection to database 
        include "./db_connect_script.php";
        // select id from table from database 
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM `burrito` Where `id` = :id");
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $v = $stmt->fetch();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }  

    ?>

    <!-- container -->
    <div class="container">
        <div class="text-center">
            <form action="./update_script.php" method="post"> 
            <input hidden type="text" name="id" value="<?=$_GET['id']?>">


            <!-- burrito Size -->
                <h6>Burritoformaat</h6>
                    <select class="form-select" name="Size" aria-label="Default select example">
                        <option value="<?php echo $v["size"]?>"><?php echo $v["size"]?></option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                    </select>
                <label for="formaat"></label>


                <!-- burrito Bean -->
                <h6>Saus</h6>
                    <select class="form-select" name="Sauce" aria-label="Default select example">
                        <option value="<?php echo $v["sauce"]?>"><?php echo $v["sauce"]?></option>
                        <option value="salsacrudo">Salsa crudo</option>
                        <option value="salsaverde">Salsa verde</option>
                        <option value="salsaroja">Salsa roja</option>
                        <option value="creme-friache">Creme-Friache</option>
                    </select>
                <label for="saus"></label>

                <!-- burrito Rice -->
                <div>
                    <h6>Bonen</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Bean" value="Kidney Bonen" <?=($v['bean'] == 'Kidney Bonen') ? "checked" : "" ?>>
                        <label class="form-check-label" for="Bean">Kidney Bonen</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Bean" value="Zwarte Bonen"<?=($v['bean'] == 'Zwarte Bonen') ? "checked" : "" ?>>
                        <label class="form-check-label" for="Bean">Zwarte Bonen</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Bean" value="Bruine Bonen"<?=($v['bean'] == 'Bruine Bonen') ? "checked" : "" ?>>
                        <label class="form-check-label" for="Bean">Bruine Bonen</label>
                    </div>
                </div>
                <br>

                <!-- submit Button -->
                <div>
                    <h6>Rijst</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Rice" value="Witte Rijst"<?=($v['rice'] == 'Witte Rijst') ? "checked" : "" ?>>
                        <label class="form-check-label" for="Rice">Witte Rijst</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Rice" value="Zwarte Rijst"<?=($v['rice'] == 'Zwarte Rijst') ? "checked" : "" ?>>
                        <label class="form-check-label" for="Rice">Zwarte Rijst</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Rice" value="Bruine Rijst"<?=($v['rice'] == 'Bruine Rijst') ? "checked" : "" ?>>
                        <label class="form-check-label" for="Rice">Bruine Rijst</label>
                    </div>
                </div>
                <br>

                <div class="d-grid gap-2">
                    <button type="submit"  value="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>