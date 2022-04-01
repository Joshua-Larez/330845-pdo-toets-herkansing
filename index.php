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
    <!-- Page Title -->
    <h1>Maak je eigen burrito</h1>


    <!-- container  -->
    <div class="container">
        <div class="text-center">
            <form action="./create_script.php" method="post"> 

            <!-- burrito Size -->
                <h6>Burritoformaat</h6>
                    <select class="form-select" name="Size" aria-label="Default select example">
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                    </select>
                <label for="formaat"></label>


                <!-- burrito Sauce -->
                <h6>Saus</h6>
                    <select class="form-select" name="Sauce" aria-label="Default select example">
                        <option value="salsacrudo">Salsa crudo</option>
                        <option value="salsaverde">Salsa verde</option>
                        <option value="salsaroja">Salsa roja</option>
                        <option value="creme-friache">Creme-Friache</option>
                    </select>
                <label for="saus"></label>

                <!-- burrito Bean -->
                <div>
                    <h6>Bonen</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Bean" value="Kidney Bonen">
                        <label class="form-check-label" for="Bean">Kidney Bonen</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Bean" value="Zwarte Bonen">
                        <label class="form-check-label" for="Bean">Zwarte Bonen</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Bean" value="Bruine Bonen">
                        <label class="form-check-label" for="Bean">Bruine Bonen</label>
                    </div>
                </div>
                <br>

                <!-- burrito Rice -->
                <div>
                    <h6>Rijst</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Rice" value="Witte Rijst">
                        <label class="form-check-label" for="Rice">Witte Rijst</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Rice" value="Zwarte Rijst">
                        <label class="form-check-label" for="Rice">Zwarte Rijst</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Rice" value="Bruine Rijst">
                        <label class="form-check-label" for="Rice">Bruine Rijst</label>
                    </div>
                </div>
                <br>

                <!-- submit Button -->
                <div class="d-grid gap-2">
                    <button type="submit"  value="submit" class="btn btn-primary">Bestel</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>