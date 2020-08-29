<?php 

    if(isset($_GET['name'])){
        // echo $_GET['name'];
        // echo $_GET['email'];
        // print_r($_GET);
        $name = htmlentities($_GET['name']);
        // echo $name;
    }

    /*

    if(isset($_POST['name'])){
        echo $_GET['name'];
        echo $_GET['email'];
        print_r($_POST);
        $name = htmlentities($_POST['name']);
        echo $name;
    }
    */
    // if(isset($_REQUEST['name'])){
    //     echo $_GET['name'];
    //     echo $_GET['email'];
    //     print_r($_POST);
    //     $name = htmlentities($_REQUEST['name']);
    //     echo $name;
    // }

    // echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="">
        </div>
        <input type="submit" value="submit" >
    </form>
    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
            <a href="get_post.php?name=Joe">Joe</a>
        </li>
    </ul>
    
    <?php echo "{$name}'s Profile"; ?>

</body>
</html>