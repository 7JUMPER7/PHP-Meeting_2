<?php
    $pages = ["home" => "homepage.php", "about" => "about.php", "contact" => "info.php"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LR</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    <?php
        include_once('Menu.php');
        generateMenu($pages);
    ?>

    <?php
        if(array_key_exists("page", $_GET)) {
            include_once($pages[$_GET["page"]]);
        } else {
            include_once($pages["home"]);
        }
    ?>
</body>
</html>