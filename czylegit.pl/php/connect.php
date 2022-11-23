<?php
//baza danych: uzytkownik
//tabela: uzytkownik

//elementy uzytkownika:
//id
//login
//email
//haslo
//zdjecie_profilowe
//zdjecie_dowodu
//nagranie_twarzy
//zdjecie_z_kartka
//czy_zweryfikowany

$db = 'serwer167528_uzytkownicy';
$db_login = 'serwer167528';
$db_haslo = '07.06.2005r.Da';
$db_host = 'sql88.lh.pl';

$con = mysqli_connect($db_host, $db_login, $db_haslo, $db);
?>