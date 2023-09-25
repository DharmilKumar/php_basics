<?php
    
    $cars = array("Volvo", "BMW", "Toyota");
    for($i = 0;$i<count($cars);$i++){
        echo $cars[$i];
        echo "<br>";
    }


    $a = 1;
    while($a <= 3){
        echo "in while loop number is $a<br><br>";
        $a =  $a + 1;
    }

    $do = 1;
    do{
        echo "in do while loop number is $do <br>";
        $do++;
    }while($a <=3 );





?>