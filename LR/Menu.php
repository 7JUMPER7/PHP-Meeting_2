<?php
function generateMenu($pages) {
    echo "<header>";
    foreach($pages as $page => $fileName) {
        if(array_key_exists("page", $_GET) && $page == $_GET["page"]) {
            echo "<a href='LR.php?page=$page' class='selected'>".(ucfirst($page))."</a>";
        } else {
            echo "<a href='LR.php?page=$page'>".(ucfirst($page))."</a>";
        }
    }
    echo "</header>";
}
?>