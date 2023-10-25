<?php
require('resource/php/class/cars.php');
$car = new cars('subaru','blue','sedan','250hp');
$car2 = new cars('mitsubishi','black','suv','150hp');
$car3 = new cars('acura','black','sport','300hp');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Demo</title>
</head>
<body>
    <?php
    $car->displayCarInfo();
    $car2->displayCarInfo();
    $car3->displayCarInfo();

    ?>

    
</body>
</html>