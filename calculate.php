<?php

if (isset($_POST['name'], $_POST['weight'], $_POST['height'])) {
    $name = htmlspecialchars($_POST['name']);

    $weight = str_replace(',', '.', $_POST['weight']);
    $height = str_replace(',', '.', $_POST['height']);

    $weight = floatval($_POST['weight']);
    $height = floatval($_POST['height']);
    if ($weight <= 0 || $height <= 0) {
        echo "Invalid input values.";
        exit;
    }
    $bmi = $weight / ($height * $height);
    if ($bmi < 18.5) {
        $interpretation = "Underweight";
    } elseif ($bmi < 25) {
        $interpretation = "Normal weight";
    } elseif ($bmi < 30) {
        $interpretation = "Overweight";
    } else {
        $interpretation = "Obesity";
    }

    // //  echo "Hello, $name. Your BMI is " . number_format($bmi,2) . " ($interpretation)."; 
    //  } else { 
    //  echo "Data not received.";}
    //  

    header("Location: result.php?name=$name&weight=$weight&height=$height&bmi=$bmi&interpretation=$interpretation");
    exit;
} else {
    header("Location: index.html?error=no_data");
    exit;
}
