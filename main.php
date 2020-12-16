<?php
include "Temp.php";
if (isset($_POST["submit"])) {
    if (!isset($_POST['Temperatua']) && !isset($_POST['inputUnit']) && !isset($_POST['outputUnit'])) {
        echo "podaj wszystkie dane";
    } else {
        if (!is_numeric($_POST['Temperatua'])) {
            echo "Podaj prawidłową temperaturę";
        } else {
            $inputTemp = (float)$_POST['Temperatua'];
            $inputUnit = $_POST['inputUnit'];
            $outputUnit = $_POST['outputUnit'];
            if (gettype($inputTemp) == "double") {
                if (($inputTemp < -273.15 && $inputUnit == 1) ||
                    ($inputTemp < -459.67 && $inputUnit == 2) ||
                    ($inputTemp < 0 && $inputUnit == 3)) {
                    echo "<h1> Podałeś nieprawidłową temperaturę</h1>";
                } else {
                    $temp = new Temp($inputTemp, $inputUnit);
                    $temp->convertValue($outputUnit);
                    echo "Wynik: <b>" .
                        number_format($temp->getValue(), 3, ',', ' ') .
                        "</b> stopni";
                }
            }
        }
    }
}