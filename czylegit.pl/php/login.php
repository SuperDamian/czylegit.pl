<?php
include('connect.php');

if(isset($_POST['przycisk']))
{
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $zapytanie = "SELECT * FROM uzytkownik WHERE login = '$login' and haslo = '$haslo'";
    $rezultat = mysqli_query($con, $zapytanie);
    $odpowiedz = mysqli_fetch_assoc($rezultat);

    if(mysqli_num_rows($rezultat) == 0)
    {
        echo "błędny login lub hasło";
    }
    else
    {
        $_SESSION['id'] = $odpowiedz['id'];
        header('Location: index.php');
    }
}
?>