<?php
include ("header3.php")
?>
<?php

 $host = "localhost"; /* Host name */$user = "root"; /* User */$password = ""; /* Password */$dbname = "sip"; /* Database name */
$con = mysqli_connect("localhost:4306", $user, $password, "sip");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
     
        
     //$select_query = "SELECT count(*) as countpr FROM  participant";
     $select_query = "SELECT * FROM  survey";
    $result = mysqli_query($con,$select_query);
        $row = mysqli_fetch_array($result);
     //$count = $row['countpr'];
     //echo "<p>count is $count</p>"; 

        echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Survey Id</font> </td> 
          <td> <font face="Arial">Created By</font> </td> 
          <td> <font face="Arial">Created Date</font> </td> 
          <td> <font face="Arial">survey Description</font> </td> 
      </tr>';

      if ($result = $con->query($select_query)) {
    while ($row = $result->fetch_assoc()) {
        $field0name = $row["id"];
        $field1name = $row["created_by"];
        $field2name = $row["created_date"];
        $field3name = $row["survey_description"];
         
   echo '<tr>   
                  <td>'.$field0name.'</td>
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td>  
              </tr>';
    }
    $result->free();
} 

