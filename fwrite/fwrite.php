<?php
    $myFile = fopen("newfile.txt","w")
                or die("Unable to open file");
    $tekst = "Jhon już tu nie mieksza";
    fwrite( $myFile, $tekst);
    fclose( $myFile);
?>                