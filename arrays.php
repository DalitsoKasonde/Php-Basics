<?php 
//  indexed arrays 
$people = array('Kevin', 'John', 'Jack');
$ids = array(12,34,43);
$cars = ['Honda', 'BMW', 'Toyota'];
$cars[3] = 'Chevy';
$cars[] = 'Ford';

// echo count($cars);
// print_r($cars);
// var_dump($cars);


// echo $people[2];
// echo $id[0];
// echo $cars[2];
// echo $cars[3]; 
// echo $cars[4];

// Associative arrays 

$people = array('Brad' =>  35, 'Jose' => 32, 'William' => 37);
$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

// echo $people['Brad'];
// echo $ids[63];
$people['Jill'] = 42;
// echo $people['Jill'];       
// print_r($people);
// var_dump($people);

// Multi dimensional 
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12)
);

// echo $cars[1][0];
echo $cars[2][2];


?>