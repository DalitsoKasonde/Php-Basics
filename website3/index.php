<?php

    // message vars 

    $msg = '';
    $msgClass = '';

    // check for  submit

    if(filter_has_var(INPUT_POST, 'submit')) {
        // echo 'data submitted';

        // get form data 

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // check required fields 

        if(!empty($email) && !empty($name) && !empty($message)){
            // passed 
            // echo 'passed';
            // check email 
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                // Failed 
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                // passed 
                $toEmail = 'dkasonde11@gmail.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'<p/>
                    <h4>Email</h4><p>'.$email.'<p/>
                    <h4>Message</h4><p>'.$message.'<p/>
                ';

                // Email headers 

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .="COntent-Type:text/html;charset=UTF-8" . "\r\n";

                // Aditional headers 

                $headers .= "From: " .$name. "<".$email.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    // email sent
                    $msg = "Your complaint  has been sent";
                    $msgClass = 'alert-success';
                } else {
                    // failed 

                    $msg = 'Your complaint was not sent';
                    $msgClass = 'alert-danger';
                }

            }

        }else {
            // failed 
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Contact Us</title>
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?> </div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <input type="text" name="message" class="form-control" value="<?php echo isset($_POST['message']) ? $message : ''; ?>">
            </div>
            <br>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>            
        </form>
    </div>


</body>

</html>