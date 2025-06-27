<?php 
extract($_POST);

if(isset($result_check)){
    $entered_marks = $marks;
    
    if(!is_numeric($entered_marks)){
        echo "please enter number only";
    }elseif($entered_marks < 0){
        echo "please enter number greater than 0";
    }elseif($entered_marks >500){
        echo "number should not be greater than 500";
    }else{
        $per=($entered_marks*100/500). " %";

        echo "you got $entered_marks out of 500 & your percentage is $per";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>Student_Record</title>
</head>

<body>
    <h2>Enter Your Final Marks</h2>

    <form method="POST" action="">
        <label for="marks">Marks (out of 500):</label><br>
        <input type="text" name="marks" min="0" max="500" required><br><br>

        <button type="submit" name="result_check">Check Result</button>
    </form>
    
</body>

</html>