<?php
include('database.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST)) {
        $id = $_POST['id_user'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //per afegir dades a la BBDD cal fer un INSERT INTO table nom_columnes VALUES valros_columnes
        //amb mètodes de Strings cal preparar els nom_columnes i valros_columnes
        //els valors de les columnes han d'anar amb els dos punts per fer SQL statement

        //utilitzem el meode implode --> converteix els valors de un Array a String
        $newUser = [
            'id' =>$id,
            'username' => $username,
            'password' => $password
        ];
        $set="";
        foreach ($newUser as $key => $value) {
            if ($key != 'id') {
                $set = $set . $key."=:".$key.", ";
            }
        }
        $set = substr($set,0,-2); //eliminem , i epai del final



        //creem els params del SQL Statement
        $params = [];
        foreach ($newUser as $key => $value) {
            $params[":" . $key] = $value;
        }

        // echo $colums . "<br>" . $values;
        // var_dump($params);

        $sql = "UPDATE users SET $set WHERE id=:id;";
        $result = executQyuery($sql, $params);

        //comprovació del resultat
        // Comprovació resultat
        if ($result) {
            echo "<h3 style='color:green'>Usuari actualitzat </h3>";
        } else {
            echo "<h3 style='color:red'>Error a l'actualitzar usuari</h3>";
        }


        // Mostrem la consulta per entendre què està passant
        echo "<p><b>Consulta executada:</b> $sql</p>";
        echo "params<br>";
        echo "<pre>";
        print_r($params);
        echo "<pre>";
    }
}
