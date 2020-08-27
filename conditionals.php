<?php


// Else if 

$num = 6;

// if($num == 5) {
//  echo '5 passed';
// }elseif($num == 6){
//     echo '6 passed';
// }else{
//     echo 'did not pass';
// }


// nesting if 

// $num = 5;

// if($num > 4){
//     if($num < 10){
//         echo "$num passed";
//     } else {
//         echo 'did not pass';
//     }
// }

// logical operators 


// And 

// if ($num > 4 && $num < 10){
//     echo "$num passed";
// }

// or 


// if ($num > 4 || $num < 10){
//     echo "$num passed";
// }


// xor exclusive or

// if ($num > 4 xor $num < 10){
//     echo "$num passed";
// }

// switch 

$favColor = 'red';

switch($favColor){
    case 'red' :
        echo 'Your favourite color is red';
        break;
    case 'blue' :
            echo 'Your favourite color is blue';
            break;
    case 'green' :
        echo 'Your favourite color is green';
        break;
    default :
        echo 'Your favourite color is something else';
}


?>