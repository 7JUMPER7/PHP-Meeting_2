<?php
    include("functions.php");

    echo addNubers(4, 7);

    $title = "Заголовок 1";
    if($title == "Заголовок 1"){
        showHeader('#145a8c');
    }
    else {
        echo 'test';
    }

    getCounter();

    $x1 = 4;
    incByTen($x1);
    echo $x1;

    incByTenLink($x1);
    echo $x1;
?>