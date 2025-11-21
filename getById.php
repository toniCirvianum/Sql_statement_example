<?php
include('database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST)) {
        $id=$_POST['id_user'];

        $sql = "SELECT * FROM users WHERE id=:id;";

        $params = [
            ":id"=>$id
        ];

        $result = executQyuery($sql,$params);
        $user = $result -> fetch();

                if ($result) {
            echo "<pre>";
            print_r($result->fetch());
            echo "<ore>";
        } else {
            echo "<h3 style='color:red'>Usuari no existeix</h3>";
        }

    }
}
