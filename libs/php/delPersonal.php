<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // collect value of input field
    $id = $_REQUEST['pdelid'];
    include_once("../includes/db.php");
    try {
        $sql = "DELETE FROM personnel WHERE Id=$id";
        mysqli_query($db_config, $sql);
        $output['status']['code'] = "200";
        $output['status']['name'] = "ok";
        $output['status']['description'] = "success";
        $output['data'] = [];
        echo json_encode($output);
		exit;
        // header('Location: ../../index.html?active=personal');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>