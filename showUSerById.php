<?php
include('database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') :
    if (isset($_POST)) :
        $id = $_POST['id_user'];

        $sql = "SELECT * FROM users WHERE id=:id;";

        $params = [
            ":id" => $id
        ];
        $result = executQyuery($sql, $params);

        if ($result) :
            $user = $result->fetch();
?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>

            <body>
                <h2>Dades usuari:</h2>
                <form action="updateUserById.php" method="post">
                    <p>
                        <label for="username">Nom usuari:</label>
                        <input type="text" name="username" value="<?= $user['username'] ?> ">
                    </p>
                    <p>
                        <label for="password">Password: </label>
                        <input type="text" name="password" value="<?= $user['password'] ?> ">
                    </p>
                    <p>
                        <input type="hidden" name="id_user" value="<?= $user['id'] ?> ">
                    </p>
                    <p>
                        <input type="submit" value="Actualitza">
                    </p>
                </form>

            </body>

            </html>

<?php
        else:
            echo "<h3 style='color:red'>Usuari no existeix</h3>";
        endif;
    endif;
endif;




?>