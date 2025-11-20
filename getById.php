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

        print_r($user);

    }
}
