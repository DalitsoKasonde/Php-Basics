<?php
    // functions 

    // function simpleFunction(){
    //     echo 'Hello World';
    // }

    // simpleFunction();

    // functions with parameters

    function sayHello($name = 'World'){
        echo "Hello $name<br>";
    }


    // sayHello('Joe');
    // sayHello('May');
    // sayHello();

    // return value 

    function addNumber($num1, $num2){
        return $num1 + $num2;
    }

//   echo  addNumber(2,3);

//   by reference

$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num += 10; 
}

addFive($myNum);
echo "Value:  $myNum<br>";

addTen($myNum);
echo "Value: $myNum<br>";

?>