<?php
session_start();
include('php/connect.php');
include('php/info.php');
if($weryfikacja == 1)
{
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weryfikacja</title>
    <link rel="stylesheet" href="strona_glowna/weryfikacja.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <div id="form">
        <form action="php/weryfikacja.php" method="post" enctype="multipart/form-data">
            <div class="input">zdjęcie dokumentu tożsamości: <input type="file" id="dokument" name="dokument"></div>
            <div class="input">zdjęcie z kartką: <input type="file" id="kartka" name="kartka"></div>
            <div class="input">nagranie twarzy: <input type="file" id="twarz" name="twarz"></div>
            <div class="input"><input type="submit" id="przycisk" name="przycisk"></div>
        </form>
    </div>

    <div id="instrukcja">
        <div id="zdjecie_dokumentu">
            <h3>zdjęcie dokumentu tożsamości</h3>
            zdjęcie musi być czytelne z widocznymi wszystkimi informacjami, możliwe dokumenty do wyboru:
            <ul>
                <li>dowód osobisty</li>
                <li>paszport</li>
                <li>prawo jazdy</li>
                <li>legitymacja szkolna</li>
            </ul>
        </div>
        <div id="zdjecie_kartki">
            <h3>zdjęcie z kartką</h3>
                <div class="tekst">zrób zdjęcie siebie trzymającego kartkę z napisem:
                <i>"(imię, nazwisko, nick) zdjęcie weryfikacyjne dla czylegit.pl"</i>, przykład:</div>
                <img src="media/2.png" alt="">
        </div>
        <div id="nagranie_twarzy">
            <h3>nagranie twarzy</h3>
                <div class="tekst">nagraj swoją twarzy w następujący sposób:</div>
                <img src="media/1.png" alt="">
        </div>
    </div>
</body>
</html>

<?php
}
else
{
    echo $weryfikacja;
    header('Location: index.php');
}
?>