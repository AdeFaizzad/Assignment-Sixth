<?php

    class Calc{

        public function calculate(){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operator = $_POST["operator"];

        if($operator == "+"){
            echo "$num1 + $num2 is " ;
            echo $num1 + $num2;
        } elseif($operator == "-"){
            echo "$num1 - $num2 is " ;
            echo $num1 - $num2;
        } elseif($operator == "*"){
            echo "$num1 * $num2 is " ;
            echo $num1 * $num2;
        } elseif($operator == "/"){
            echo "$num1 / $num2 is " ;
            echo $num1 / $num2;
        }    elseif($operator == "Power"){
            echo "$num1 Power $num2 is " ;
            echo pow($num1, $num2);
        }  elseif($operator == "Max Number"){
            echo "Max number between $num1 and $num2 is " ;
            echo max($num1, $num2);
        }  elseif($operator == "Min Number"){
            echo "Min number between $num1 and $num2 is " ;
            echo min($num1, $num2);
        }  else {
            echo "Invalid Operator!";
        }
        }
        
    }
       
    ?>
