<!DOCTYPE html>
<html>

<head>
    <title>SQL Statement</title>
</head>

<body>
    <h2><a href="createTableUser.php">Crear Taula users</a></h2>
    <hr>
    <h2><a href="addUsers.php">Afegeix usuaris a la BBDD</a></h2>
    <hr>
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>

        <label>Password:</label><br>
        <input type="text" name="password"><br><br>

        <button type="submit">Login</button>
    </form>
    <hr>
    <div>
        <h2> <a href="showUsers.php">Mostra tots els usuaris</a> </h2>
    </div>
    <hr>
    <h2> Selecciona usuari per Id</h2>
    <form method="POST" action="getById.php">
        <label>Id:</label><br>
        <input type="text" name="id_user"><br><br>

        <button type="submit">Envia</button>
    </form>
    <hr>
    <h2> Elimina usuari per Id</h2>
    <form method="POST" action="deleteById.php">
        <label>Id:</label><br>
        <input type="text" name="id_user"><br><br>

        <button type="submit">Envia</button>
    </form>
    <hr>
    <h2> Actualitza usuari per Id</h2>
    <form method="POST" action="showUserById.php">
        <label>Id:</label><br>
        <input type="text" name="id_user"><br><br>

        <button type="submit">Envia</button>
    </form>




</body>

</html>