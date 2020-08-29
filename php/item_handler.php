<?php 
    include 'database/DBconnection.php';
    include 'classes/items.php';

    if(isset($_POST)){
        if(isset($_POST['items_get_from_db'])){
            $conn = DBconnection::getInstance();
            $items = new Items();
            $items->loadFromDB($conn);
            echo $items->getAsJson();
        }
    }
?>