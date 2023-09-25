<?php
    $file = fopen("hello.txt",'a') or die("error while open");
    fwrite($file,"hello2\n");
    fclose($file);
?>