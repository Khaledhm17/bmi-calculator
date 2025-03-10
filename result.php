<?php

if (!isset($_GET['name'], $_GET['weight'], $_GET['height'], $_GET['bmi'], $_GET['interpretation'])) {
    header("Location: index.html?error=missing_data");
    exit;
}


$name = htmlspecialchars($_GET['name']);
$weight = floatval($_GET['weight']);
$height = floatval($_GET['height']);
$bmi = floatval($_GET['bmi']);
$interpretation = htmlspecialchars($_GET['interpretation']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>BMI Result</h1>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Weight:</strong> <?php echo number_format($weight, 2); ?> kg</p>
        <p><strong>Height:</strong> <?php echo number_format($height, 2); ?> m</p>
        <p><strong>Your BMI:</strong> <?php echo number_format($bmi, 2); ?></p>
        <p><strong>Category:</strong> <?php echo $interpretation; ?></p>
        <a href="index.html" class="btn">Calculate Again</a>
    </div>
</body>
</html>
