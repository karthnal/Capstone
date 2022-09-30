<html>
    <head>
        <title>Add Question</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
     <h1 style="background-color:aquamarine;">Clim8<span>.</span></h1>
     <h2 style="background-color:aquamarine;">Add Question<span>.</span></h2>
   </body>
   </html>
 
<?php

$host = "localhost"; /* Host name */$user = "root"; /* User */$password = ""; /* Password */$dbname = "sip"; /* Database name */
$con = mysqli_connect("localhost:4306", $user, $password, "sip");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
            $submit = $_POST['submit'];
            if ($submit == "Cancel") {
              $con->close();
              header('location: index.php');
              exit;
            } 

            if (!isset($_POST['survey_id']) || empty($_POST['survey_id'])) {
              echo "survey_id field not supplied.";
              $con->close();
              exit;
            }
            
            if (!isset($_POST['question_text']) || empty($_POST['question_text'])) {
              echo "Question Text field not supplied.";
              $con->close();
              exit;
            }
          
          $question_text = mysqli_real_escape_string($con,$_POST['question_text']);
          $survey_id = mysqli_real_escape_string($con,$_POST['survey_id']);
          
          try
          {

            $insert_query = "INSERT INTO questions (survey_id, question_text) VALUES ('".$survey_id."','".$question_text."')";
                   $result = mysqli_query($con,$insert_query);
                   echo "<p>result is $result</p>";

                     if ($result == 1) {
                    echo "Successfully added a new question!!!<br>";
                    echo "<a href=\"index.php\">Back to Home Page</a>";
                    echo "<br><hr>";
                    exit; 
                  }
                 }
          catch (Exception $e)
            {
               echo " *** Record cannot be added ***" ;
               echo "<br>";
               echo " *** survey id: $survey_id not found on the parent table ***" ;
               echo "<br>";
            }
          

}
else
{

          echo <<<END
                    <form action="" method="POST">

                      <label>Enter Survey Id  :</label>
                      <input type="number" name="survey_id" value="" required="required">
                      <br>
                      <br>
                      <label>Add new question :</label>
                      <input type="text" name="question_text" value="" required="required">
                       
                      <br><hr>
                    <input type="submit" name="submit" value="Add">
                    <input type="submit" name="submit" value="Cancel"> 
                  </form>
          END;

     }
     echo "<a href=index.php>Back to Home Page</a>"; 
     
 
