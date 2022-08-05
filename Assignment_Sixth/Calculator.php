<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
    <form action="Calculator.php" method="post">
        First Number: <input type="number" step="0.0001" name="num1"> <br><br><br>
        Select the Operator: <select name="operator">
            
                <option selected></option>
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>Power</option>
                <option>Max Number</option>
                <option>Min Number</option>
            
        </select> <br><br><br>
        Second Number: <input type="number"  step="0.0001" name="num2"> <br><br><br>
        <input type="submit"><br><br><br>
      
    </form>
    <?php
            include("Calc.php");
            $calcObject = new Calc();
            $calcObject->calculate();
    ?>
</body>
</html>