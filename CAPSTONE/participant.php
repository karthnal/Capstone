<?php
if(isset($_POST['but_reg'])){

$firstname = mysqli_real_escape_string($con,$_POST['fname']);
$lastname = mysqli_real_escape_string($con,$_POST['lname']);
$age = mysqli_real_escape_string($con,$_POST['dob']);
$email= mysqli_real_escape_string($con,$_POST['email']);
header('Location: questionnaire.php'); 
          
     $insert_query = "INSERT INTO participant (firstname, lastname, age, email) VALUES ('".$firstname."', '".$lastname."', '".$age."', '".$email."')";
    $result = mysqli_query($con,$insert_query);
    echo "<p>result is $result</p>";

}
 