<?php
if(isset($_POST['przycisk']))
{
    $db = 'administracja';
    $db_login = 'serwer167528';
    $db_haslo = '07.06.2005r.Da';

    $con = mysqli_connect($db_host, $db_login, $db_haslo, $db);

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $zapytanie = "SELECT * FROM administratorzy WHERE login = '$login' AND haslo = '$haslo'";
    $wykonanie = mysqli_query($con, $zapytanie);
    $rezultat = mysqli_fetch_assoc($wykonanie);

    if(mysqli_num_rows($wykonanie) == 0)
    {
        echo "zły login lub hasło";
    }
    else
    {
        $_SESSION['admin'] = 1;
        header('Location: index.php');
    }
}
?>