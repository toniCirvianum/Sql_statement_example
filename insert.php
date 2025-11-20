<?php
include('database.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //PEr afegir a la BBDD insert into table colums VALUES valors
        //SQL STATEMENT
        //INSERT INTO users (username,password) VALUES (:usernaem,:password)

        $newUser = [
            "username"=>$username,
            "password"=>$password
        ];

        $colums = implode(",", array_keys($newUser));

        // echo $colums;

        $values =":". implode(",:",array_keys($newUser));
        // echo "<br>".$values;
        $sql = "INSERT INTO users ($colums) VALUES ($values);";
        // echo $sql;

        //params
        // [
        //     ":username"=>$username,
        //     ":password"=>$pasword
        // ]
        $params=[];

        foreach ($newUser as $key => $value) {
            $params[":".$key]=$value;
        }

        // echo "<pre>";
        // print_r($params);
        // echo "</pre>";

        $result = executQyuery($sql,$params,true);


    }
}

