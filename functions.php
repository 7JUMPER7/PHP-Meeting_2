<?php
    function AddNubers($num1, $num2) {
        return $num1 + $num2;
    } 
    function showHeader($color) {
        global $title;
        echo "<h2 style='$color'>$title</h2>";
    }
    function getCounter() {
        static $count;
        echo "<div>".++$count."</div>";
    }
    function incByTen($num) {
        $num += 10;
        echo "<div>$num</div>";
    }
    function incByTenLink(&$num) {
        $num += 10;
        echo "<div>$num</div>";
    }
?>