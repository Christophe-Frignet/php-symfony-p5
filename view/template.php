<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/modules/header.css">

        <!-- modules inner css -->
        <?php foreach($modules as $css) : ?>
            <link rel="stylesheet" href="css/modules/<?= $css ?>.css">
        <?php endforeach; ?>

        <!-- Tablet and desktop css -->
        <link rel="stylesheet" href="css/responsive/<?= $responsive ?>.css">

        <title><?=$title?></title>
    </head>

    <body>
        <header>
            <?php include_once('module/header.php');?>
        </header>

        <div id="container">
            <?php
            foreach($modules as $module){
                include_once('module/'. $module .'.php');
            }
            ?>
        </div>

        <footer>
            <?php include_once('module/footer.php');?>
        </footer>
    </body>

</html> 
