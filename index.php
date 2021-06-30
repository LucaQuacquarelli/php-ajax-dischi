<?php require 'database.php'; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP-AJAX-DISCHI</title>
    </head>
    <body>
        
        <?php include 'header.php'; ?>
        
        <main>
            <div class="card-container">
                <?php foreach ($discs as $disc) { ?>
                    <div class="card">
                        <img src="<?php echo $disc["poster"] ?>" alt="">
                        <h4><?php echo $disc["title"]; ?></h4>
                        <p><?php echo $disc["author"]; ?></p>
                        <p><?php echo $disc["genre"]; ?></p>
                        <p><?php echo $disc["year"]; ?></p>
                    </div>
                <?php } ?>
            </div>
        </main>
       
    </body>
</html>