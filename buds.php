<?php 

$a=1;
for($a=1; $a<=10; $a++){
    echo $a . "<br>";
}
?>

<?php 
$fruits=["apple", "banana","cherry", "dognot", "emli", "fig"];
foreach($fruits as $veg){
echo $veg . "<br>";
}

?>

<?php   
$i=1;
for($i=5; $i>=1; $i--){
for($j=1; $j<=$i; $j++){
    echo "*";
}
echo "<br>";
}
?>

<?php 

$a=1;
for($a=1; $a<=100; $a++){
    if($a  == 8){
    break;
}
echo "series of :" . $a ."<br>";
}
?>


<?php 
function hello(){
    echo "shri ram", "<br>";
}
hello ();
hello ();
hello  ();
hello ();
hello ();
hello ();
hello ();
?>