<?php
session_start();

if(!isset($_SESSION['admin']))
{
    include('login.php');
    echo $_SESSION['admin'];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logowanie admin</title>
</head>
<body>
    <form action="" method="post">
        login: <input type="text" name="login">
        hasło: <input type="password" name="haslo">
        <input type="submit" name="przycisk" value="zaloguj się">
    </form>
</body>
</html>

<?php
}
else
{
    header('Location: index.php');
}
?>