<?php
include ("config.php");



// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
  header('Location: index.php');
}
?>

<!doctype html>
<head>
 
<link rel="stylesheet" href="../CAPSTONE/assets/css/login modal.css">	
<link rel="stylesheet" href="../CAPSTONE/assets/css/login.css">
<?php 
include ("header2.php")
?>

</head>


    <body>
        <h1>Homepage</h1>
        <form method='post' action="" >
            <input id="logout"  onclick="location.href = '.../CAPSTONE/index.php';"type="submit" value="Logout" name="but_logout" >
        </form>
    </body>
	
	<li><a href="../CAPSTONE/dashboard.php">dashboard</a></li>
</html>



