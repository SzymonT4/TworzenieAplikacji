<?php
$wzorzec = '/((\nhhtps?:\/\/)|(\bwww\.))\S*/';
$tekst = "adres: www.zsgsucha.pl";


if(preg_match($wzorzec, $tekst)){
    echo "znaleziono adres www";
} else {
    echo "nie adresu www!";
};
echo "<br> znaleziono: ".preg_match_all($wzorzec,$tekst);
?>
