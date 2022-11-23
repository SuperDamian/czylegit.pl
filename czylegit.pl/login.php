<?php
session_start();
if(!isset($_SESSION["id"]))
{
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div id="form">
        <form action="" method="post">
            login: <input type="text" id="login" name="login">
            hasło: <input type="password" id="haslo" name="haslo">
            <input type="submit" id="przycisk" name="przycisk" value="zaloguj się">
        </form>
        <?php include("php/login.php") ?>
    </div>
</body>
</html>

<?php
}
else
{
    header("Location: index.php");
}
?>