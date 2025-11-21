<?php
include('database.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST)) {
        $id = $_POST['id_user'];

        $sql = "DELETE FROM users WHERE id=:id;";

        $params = [
            ":id" => $id
        ];
        $result = executQyuery($sql, $params);

        if ($result) {
            echo "<pre>";
            echo "usuari amb id ".$id." esborrat";
            echo "<ore>";
        }
    }
}