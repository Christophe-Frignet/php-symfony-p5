<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/style.css">
        
        <?php
        foreach($modules as $style){
            ?>
            <link rel="stylesheet" href="public/css/inc/<?=$style?>.css">
            <?php
        }
        ?>

        <title>Home</title>
    </head>

    <body>
        <header>header</header>
        <div id="container">

            <?php
            foreach($modules as $content){
                include_once('inc/'. $content .'.php');
            }
            ?>

        </div>
        <footer>footer</footer>
    </body>

</html> 
