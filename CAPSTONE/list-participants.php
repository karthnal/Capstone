<html>
    <head>
        <title>List Participants</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
     <h1 style="background-color:aquamarine;">Clim8<span>.</span></h1>
     <h2 style="background-color:aquamarine;">List Participants<span>.</span></h2>
   </body>
   </html>

<?php 
 $host = "localhost"; /* Host name */$user = "root"; /* User */$password = ""; /* Password */$dbname = "sip"; /* Database name */
$con = mysqli_connect("localhost:4306", $user, $password, "sip");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}     
          
     //$select_query = "SELECT count(*) as countpr FROM  participant";
     $select_query = "SELECT * FROM  participant";
    $result = mysqli_query($con,$select_query);
        $row = mysqli_fetch_array($result);
     //$count = $row['countpr'];
     //echo "<p>count is $count</p>"; 

        echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">First Name  </font> </td> 
          <td> <font face="Arial">Last Name      </font> </td> 
          <td> <font face="Arial">Age   </font> </td> 
          <td> <font face="Arial">Email</font> </td> 
      </tr>';
      

      if ($result = $con->query($select_query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["firstname"];
        $field2name = $row["lastname"];
        $field3name = $row["age"];
        $field4name = $row["email"];
   echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 

                  
              </tr>';
    }
    echo "</table>";
    echo "<br>";
    echo "<hr/>";
    echo "<a href=index.php>Back to Home Page</a>";
    $result->free();

} 

 
