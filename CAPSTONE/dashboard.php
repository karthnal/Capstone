<?php
include ("config.php");
$surveyId = $_GET["sid"];

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
  header('Location: index.php');
}
?>
<?php 
include ("header2.php")
?>
<!doctype html>

<html>
    <head></head>
    <body>
        <h1>Dashboard</h1>
        <form method='post' action="" >
            <input id="logout"  onclick="location.href = 'index.php';"type="submit" value="Logout" name="but_logout" >
        </form>
		

				

<div class="container-fluid" width=100%>
 <div class="row">
    <div class="col"><!--COL1  -->
		<br>
		<br>
		<div class="card" style="width=50%">
  <div class="card-body">
    <h5 class="card-title">Total Number of response</h5>
	  7
  </div>
</div>
<div class="card" style="width=50%">
  <div class="card-body">
    <h5 class="card-title">% of agree</h5>
	  20%
  </div>
</div>
				<div class="card" style="width=50%">
  <div class="card-body">
   <h5 class="card-title">% of disagree</h5>
	  7
  </div>
</div>
				<div class="card" style="width=50%">
  <div class="card-body">
    <h5 class="card-title">% of somewhatagree</h5>
	  7
  </div>
</div>
	</div>
    <div class="col"><!--COL2  -->
		
	<?php
	include("selector.php");


    ?>


	
	<?php
	include("tablevars.php");
		

	?>


	<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
    <br>

	
</html>


	<?php 
include ("footer.php")
?>


