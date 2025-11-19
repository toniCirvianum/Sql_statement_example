<!DOCTYPE html>
<html>
<head>
    <title>Login Vulnerable</title>
</head>
<body>
    <h2>Carregar usuaris</h2>
    <a href="addUsers.php">Afegeix usuaris a la BBDD</a>
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
        <p>
            <a href="">Mostra tots els usuaris</a>
        </p>
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
    <form method="POST" action="DelById.php">
        <label>Id:</label><br>
        <input type="text" name="id_user"><br><br>

        <button type="submit">Envia</button>
    </form>
    <hr>
        <h2> Actualitza usuari per Id</h2>
    <form method="POST" action="UpdateById.php">
        <label>Id:</label><br>
        <input type="text" name="id_user"><br><br>

        <button type="submit">Envia</button>
    </form>




</body>
</html>
