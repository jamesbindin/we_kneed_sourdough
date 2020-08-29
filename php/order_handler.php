<?php 
    include 'database/DBconnection.php';
    include 'classes/item.php';
    include 'classes/items.php';

    if(isset($_POST)){
        $conn = DBconnection::getInstance();
        $items = new Items();
        $items->loadFromDB($conn);
        echo $items->getAsJson();
    }
?>