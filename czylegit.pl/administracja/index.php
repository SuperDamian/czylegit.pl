<?php
session_start();

if(isset($_SESSION['admin']))
{
    
    $db = 'administracja';
    $db_login = 'kod';
    $db_haslo = 'ZAQ!@wertyuiop';
    $db_host = 'localhost';

    $conn = mysqli_connect($db_host, $db_login, $db_haslo, $db);

    $zapytanie = "SELECT * FROM weryfikowanie WHERE status = 2"

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administracja</title>
</head>
<body>
    <?php 
    for($a = 1; $a < 50; $a++)
    {
        echo "
        <div id='pojemnik'> 
        <img src='$dokument'>
        <img src='$kartka'>
        <img src='$twarz'>
        </div>
        "
    }
    ?>
</body>
</html>

<?php
}
else
{
    header('Location: logowanie.php');
}
?>