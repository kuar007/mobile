

<h5>
    Subtraction
</h5>

<?php


$x = 65;
$y = 45;
$subtraction= $x-$y;
echo "The substraction of $x & $y ". $subtraction;
?>

<h3>
    Addition
</h3>

<?php


$x = 97;
$y = 39;
$addition = $x+$y;
echo "The addition of $x & $y ". $addition;
?>


<h2>
    Multiplication
</h2>
<?php
$a=30;
$b=20;
$multiplication= $a*$b;
echo "multiplication of $a & $b ". $multiplication;
?>


<h1>
    Division
</h1>

<?php 
$m = 400;
$n = 25;
$division = $m & $n;
echo "division of $m & $n ".$division;

?>

<?php  
$host= "localhost";
$username= "root";
$password= "";
$database_name= "test";
$conn= new mysqli($host, $username, $password, $database_name);
if ($conn -> connect_error){
    die("connection_failed")
}else{
    echo "<br> connection_successful";
}
?>