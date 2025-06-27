<?php  
    date_default_timezone_set("Asia/Calcutta");
?>

<h4>Date Y-m-d</h4>
<?php  
    $todayDate = date('Y-m-d');

    echo "Today Date is: $todayDate";
?>

<h3> Date Y-d-m</h3>
<?php 
$todayDate= date("Y-d-m");
echo "Today Date is: $todayDate";
?>

<h3> Date m-d-y</h3>
<?php 
$todayDate= date("m-d-Y");
echo "Today Date is: $todayDate";
?>

<h3> Date m/d/y </h3>
<?php
$todayDate= date("m/d/Y");
$timenow= date("H:i:s A");
echo "Today date is: $todayDate <br>";
echo "Current time now: $timenow";
?>

<h3> Date d/m/y </h3>
<?php
$todayDate= date("d/m/Y");
$timenow= date("H:i:s A");
echo "Today date is: $todayDate<br>";
echo "Current time now: $timenow";
?>

<h3> Date y/m/d </h3>
<?php
$todayDate= date("Y/m/d");
$yesterdayDate= date("Y/m/d", strtotime(' -1 day'));
$timenow= date("H:i:s A");
echo "Today date is: $todayDate<br>";
echo "Yesterday date was: $yesterdayDate<br>";
echo "Current time now: $timenow";

?>