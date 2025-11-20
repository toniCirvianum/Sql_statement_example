<?php
include('database.php');

$sql="SELECT * FROM users";

$result = executQyuery($sql);
$users = $result->fetchAll();

foreach ($users as $key => $user) {
        echo"<pre>";
        print_r($user);
        echo "<ore>";
    }