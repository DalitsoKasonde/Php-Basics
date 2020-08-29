<?php include 'server-info.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>System Info</title>
</head>

<body>
    <div class="container">

    <!-- for server  -->

        <h1>Server & file info </h1>
        <?php if ($server) : ?>
            <ul class="list-group">
                <?php foreach ($server as $key => $value) : ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?></strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

<!-- for client info  -->

<h1>Client & file info </h1>
        <?php if ($client) : ?>
            <ul class="list-group">
                <?php foreach ($client as $key => $value) : ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?></strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </div>
</body>

</html>