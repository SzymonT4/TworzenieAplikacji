<?php

setcookie("promocja", "wycieczka", time() + 2 * 24 * 3600); 

if (isset($_COOKIE['promocja'])) {
    echo "Plik cookie 'promocja' został utworzony.<br>";
    echo "Wartość: " . $_COOKIE['promocja'] . "<br>";
} else {
    echo "Nie udało się utworzyć pliku cookie 'promocja'.<br>";
}

if (isset($_COOKIE['promocja'])) {
    setcookie("promocja", "", time() - 3600); 
    echo "Plik cookie 'promocja' został usunięty.<br>";
} else {
    echo "Plik cookie 'promocja' nie istnieje.<br>";
}
?>




