<!DOCTYPE html>
<html lang="en" xmlns:input="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Konwerter temperatur</title>
</head>

<body>
<div class="main">
    <div class="row">
        <div class="col-md-12">
            <h1 class="top">Konwerter temperatury</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="/index.php" method="post">
                <div class="col-6">
                    <label for="temperatura">Podaj temperaturę: </label>
                    <input type="text" name="Temperatua" class="form-control">
                </div>
                <div class="col-6">
                    <label for="inputUnit">Wybierz jednostkę: </label>
                    <select name="inputUnit" class="form-control">
                        <option value="Celcius">Celcius</option>
                        <option value="Fahrenheit">Fahrenheit</option>
                        <option value="Kalwin">Kalwin</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="outputUnit" class="label">Przelicz na:</label>
                    <select name="outputUnit" class="form-control">
                        <option value="Celcius">Celcius</option>
                        <option value="Fahrenheit">Fahrenheit</option>
                        <option value="Kalwin">Kalwin</option>
                    </select>
                </div>
                <div class="form-group row">
                    <input type="submit" name="submit" id="submit" value="Przelicz" class="btn btn-primary btn-lg">
                </div>
            </form>
        </div>
        <div class="col-md-6" id="phpOut">
            <?php
                include "main.php";

            ?>
        </div>
    </div>
</body>
</html>