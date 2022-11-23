<?php
session_start();
include('connect.php');
include('info.php');

if(isset($_POST['przycisk']))
{
    if($weryfikacja == 1)
    { 
        $dokument = $_FILES['dokument']['tmp_name'];
        $kartka = $_FILES['kartka']['tmp_name'];
        $twarz = $_FILES['twarz']['tmp_name'];
        
        $con_weryfikacja = mysqli_connect('sql88.lh.pl', 'serwer167528', '07.06.2005r.Da', 'administracja');

        $zmiana_statusu = "UPDATE uzytkownik SET weryfikacja = 2";

        function generuj_nazwe()
        {
            $znaki = "qwertyuiopasdfghjklzxcvbnm1234567890";
            $wynik = "";
            for($a = 1; $a < 10; $a++)
            {
                $los = random_int(1, 30);
                $wynik .= $znaki[$los];
            }
            return $wynik;
        }

        $nazwa_dokumentu = "";
        $nazwa_kartki = "";
        $nazwa_twarzy = "";
        
        //-------------------- zapisywanie dokumentu --------------------
        $sciezka_png = 'weryfikacja/' . generuj_nazwe() . '.png';
        if(!file_exists($sciezka_png))
        {
            move_uploaded_file($dokument,  $sciezka_png);
            $nazwa_dokumentu = $sciezka_png;
        }
        else
        {
            while(file_exists($sciezka_png))
            {
                $sciezka_png = 'weryfikacja/' . generuj_nazwe() . '.png';
                $nazwa_dokumentu = $sciezka_png;
            }
            move_uploaded_file($dokument,  $sciezka_png);
        }

        //-------------------- zapisywanie twarzy --------------------
        $sciezka_mp4 = 'weryfikacja/' . generuj_nazwe() . '.mp4';
        if(!file_exists($sciezka_mp4))
        {
            move_uploaded_file($twarz,  $sciezka_mp4);
            $nazwa_twarzy = $sciezka_mp4;
        }
        else
        {
            while(file_exists($sciezka_mp4))
            {
                $sciezka_mp4 = 'weryfikacja/' . generuj_nazwe() . '.mp4';
                $nazwa_twarzy = $sciezka_mp4;
            }
            move_uploaded_file($dokument,  $sciezka_mp4);
        }

        //-------------------- zapisywanie kartki --------------------
        $sciezka_png = 'weryfikacja/' . generuj_nazwe() . '.png';
        if(!file_exists($sciezka_png))
        {
            move_uploaded_file($kartka,  $sciezka_png);
            $nazwa_kartki = $sciezka_png;
        }
        else
        {
            while(file_exists($sciezka_png))
            {
                $sciezka_png = 'weryfikacja/' . generuj_nazwe() . '.png';
                $nazwa_kartki = $sciezka_png;
            }
            move_uploaded_file($kartka,  $sciezka_png);
        }

        $zmiana_statusu_wywolanie = mysqli_query($con, $zmiana_statusu);

        $weryfikowanie = "INSERT INTO weryfikowanie (id_uzytkownika, dokument, kartka, twarz) VALUES ('$id', '$nazwa_dokumentu', '$nazwa_kartki', '$nazwa_twarzy')";
        $weryfikowanie_wywolanie = mysqli_query($con_weryfikacja, $weryfikowanie);
    }
    else
    {
        header('Location: ../index.php');
    }
}
?>