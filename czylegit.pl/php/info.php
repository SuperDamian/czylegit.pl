<?php
$id = $_SESSION["id"];

$zapytanie_info = "SELECT * FROM uzytkownik WHERE id = '$id'";
$rezultat_info = mysqli_query($con, $zapytanie_info);
$odpowiedz_info = mysqli_fetch_assoc($rezultat_info);

$login = $odpowiedz_info['login'];
$email = $odpowiedz_info['email'];
$haslo = $odpowiedz_info['haslo'];
$zdjecie_profilowe = $odpowiedz_info['zdjecie_profilowe'];
$zdjecie_dowodu = $odpowiedz_info['zdjecie_dowodu'];
$nagranie_twarzy = $odpowiedz_info['nagranie_twarzy'];
$zdjecie_z_kartka = $odpowiedz_info['zdjecie_z_kartka'];
$weryfikacja = $odpowiedz_info['weryfikacja'];
?>