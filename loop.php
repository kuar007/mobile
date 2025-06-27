<h4>For loop</h4>
<?php  
    $num = 10;
    for($i=1; $i <= $num; $i++){
        echo $i .' , ' ;
    }
?>


<h4>While loop</h4>
<?php  
    $num = 10;
    $a = 1;
     while ($a <= $num) {
        echo $a.' , ';
        $a++;
     }
?>

<h4>foreach loop</h4>
<?php  
    $arr = [1 , 2 , 3 , 4, 5, 6];
    $add = 0;

    foreach($arr as $a){
        if($a % 2 != 0){
            echo $a. ' , ';
        }
    }

    // echo $add;
    echo "<br><br><br><br>";
?>

<h4>key value foreach loop</h4>
<?php  
    $arr = [1 , 2 , 3 , 4, 5, 6];
    
    $add = 0;

    foreach($arr as $key => $a){
        echo $key.' . '.$a;
        echo "<br>";
        // if($a % 2 != 0){
        //     echo $a. ' , ';
        // }
    }

    // echo $add;
    echo "<br><br><br><br>";
?>
