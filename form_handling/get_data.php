<?php
    $email = $_POST["email"];
    $name = $_POST["name"];
    echo "your email is $email <br> Name is $name";
    if(empty($name)){
        echo "Name is empty";
    }
?>