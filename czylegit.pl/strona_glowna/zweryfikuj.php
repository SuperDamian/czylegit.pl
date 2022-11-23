<?php
echo $weryfikacja;
if($weryfikacja == 1)
{
    include('..//php/connect.php');
    include('..//php/info.php');
?>

<div id="zweryfikuj">
    <div id="napis">
        twoje konto nie jest zweryfikowane, możesz to zrobić <a href="zweryfikuj.php">tutaj</a>
    </div>
</div>

<?php
}
?>