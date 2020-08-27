<?php 
    //  For loop 

    // for($i = 0;$i < 10; $i++) {
    //     echo $i;
    //     echo 'Number '.$i;
    //     echo '<br>';
    // }

    // while loop 

    // $i = 0;
    // while($i < 10){
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // }

    // Do...whlie 

    // $i = 0;

    // do{
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // }
    // while($i <10);

    // for each ( for arrays) 


    // indexed array 

    // $people = array('Brad', 'Jose', 'William');

    // foreach($people as $person) {
    //     echo $person;
    //     echo '<br>';
    // }


    // Associative array 
    
    $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'will@gmail.com');

    foreach($people as $person => $email) {
        echo $person.' : '.$email;
        echo '<br>';
    }


?>