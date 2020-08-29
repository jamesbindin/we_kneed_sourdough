<?php 
    include 'database/DBconnection.php';
    if(isset($_POST)){

        // $db = new DBConnection();
        $db = DBconnection::getInstance();
        echo json_encode($db);
        // $db->get_instance();
        // $connection = $db->getInstance();
        // echo json_encode($connection);

        // $servername = "localhost";
        // $username = "root";
        // $password = "j";
        // $conn = new mysqli($servername, $username, $password);
        // // echo json_encode($conn);
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // echo "Connected successfully";
    }
?>