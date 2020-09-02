<?php
    $user = ['name' => 'Dee', 'email' => 'test@test.com', 'age' => 24];

    $user =  serialize($user);
    
    setcookie('user', $user, time() + (86400 *30));

    $user = unserialize($_COOKIE['user']);

    echo $user['name'];
?>