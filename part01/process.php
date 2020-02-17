<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    //formula for calculating BMI:
    //BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    //source: http://www.bmi-calculator.net/bmi-formula.php

    $BMI = ($weight / ($height * $height)) * 703;

    if($BMI < 18){
        $Label_Value = "Underweight";
    } else if($BMI > 30){
        $Label_Value = "Obsese";
    } else {
        $Label_Value =  "Normal";
    }

?>

<h1>BMI Calculation</h1>
<p id="output-here">Your BMI is <?php echo $BMI ?>;, which is considered <?php echo $Label_Value ?>;</p>
</body>