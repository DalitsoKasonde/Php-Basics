<?php
/*
    if(filter_has_var(INPUT_POST, 'data')){
    // if(filter_has_var(INPUT_GET, 'data')){
        echo 'Data Found';
    }else {
        echo 'No Data';
    }


    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        // remove illegal character 
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'Email is valid';
        } else {
            echo 'Email is NOT valid'; 
        }
    } 


    // filter integer 

    $var = 23;

    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var. ' is a number';
    } else {
        echo $var. ' is NOT a number';
    }

    

    // sanitize number 

    $var = '56syd8968sj';
    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT)); 

    // stop script from running 

    $var = '<script>alert(1)</script>';
    // echo $var; 
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

    

// filtering arrays 

    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );
 print_r(filter_input_array(INPUT_POST, $filters));

 */

//  Array filtering again 

$arr = array(
    "name" => "dalitso kasonde",
    "age" => "24",
    "email" => "dee@mail.com"
);

$filters = array(
    "name" => array(
        "filter" => FILTER_CALLBACK,
        "options" =>"ucwords"
    ),
    "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 120
        )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));

?>

<!-- <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">SUBMIT</button>
</form>