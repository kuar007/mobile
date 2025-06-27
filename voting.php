<?php 
extract($_POST);
if(isset($result_check)){
$entered_age = $age;
if(!is_numeric ($entered_age)){
    echo "please enter numeric number";
}elseif($entered_age<0){
    echo "please enter number greater than 0";
}elseif($entered_age>100){
    echo "number should less than 100";
}elseif($entered_age>=18 && $entered_age<100){
    echo "eligible to vote in india";
}elseif($entered_age>=0 && $entered_age<18){
    echo "non eligible voter";
}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Voter_Record</title>
</head>
<body>
   <h2>Enter Your Age</h2> 

   <form method="POST" action="">
    
        <label for="age"> </label><br>
        <input type="text" name="age" required><br><br>

        <button type="submit" name="result_check">Check Result</button>
    </form>
</body>
</html>