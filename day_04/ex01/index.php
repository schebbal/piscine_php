<?php
/**
 * Created by PhpStorm.
 * User: schebbal
 * Date: 2019-01-25
 * Time: 20:13
 */
session_start();

if (isset($_GET["submit"]) && ($_GET["submit"] === "OK"))
{
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html><body>
<form method="post" action="create.php">
    Identifiant: <input type="text" name="login" value ="<?php if (isset($_SESSION['login'])){ echo $_SESSION['login'];} ?>" />
    <br>
    Mot de passe: <input type="password" name="passwd" value = "<?php if (isset($_SESSION['passwd'])){echo $_SESSION['passwd'];} ?>" />
    <br>
    <input type="submit" name="submit" value="OK" />
</form>
</body></html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
</head>
<body>
<form action="create.php" method="POST">
    Identifiant: <input type="text" name="login" value="" />
    <br />
    Mot de Passe: <input type="password" name="passwd" value="" />
    <input type="submit" name="submit" value="OK" />
</form>
</body>
</html>