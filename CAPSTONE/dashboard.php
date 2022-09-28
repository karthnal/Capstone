<?php
include ("config.php");


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
            <input id="logout"  onclick="location.href = '.../CAPSTONE/index.php';"type="submit" value="Logout" name="but_logout" >
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
	<!-- bar CHART -->
<body>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'></script>	
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>	
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>	
 <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row">
         <!--   <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <div class="card"> -->
                        <div class="card-header">Response Chart</div>
                        <div class="card-body" style="height: 420px"> 
                            <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
								
                            </div> <canvas id="chart-line" width="299" height="100" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
							<script>
							    $(document).ready(function() {
									var testnum = 3700;
							     var ctx = $("#chart-line");
       							 var myLineChart = new Chart(ctx, {
         						type: 'bar',
         						 data: {
         						labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7', 'Q8', 'Q9', 'Q10', 'Q11', 'Q12', 'Q13', 'Q14', 'Q15', 'Q16', 'Q17', 'Q18', 'Q19', 'Q20'],
         						datasets: [{
         						data: [testnum, 20, 30, 40, 50, 60, 60, 60, 60, 60, 20, 30, 40, 50, 60, 60, 60, 60, 60, 20],
         						 label: "agree",
         						 borderColor: "#458af7",
         						 backgroundColor:'#458af7',
         						fill: false
         						}, {
         						 data: [282, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267],
         						label: "disagree",
         						 borderColor: "#8e5ea2",
         						fill: true,
          						 backgroundColor:'#8e5ea2'
                    
           						}, {
           						 data: [168, 170, 178, 190, 203, 276, 408, 547, 675, 734],
           						 label: "somewhat agree",
           						borderColor: "#3cba9f",
               					fill: false,
              					 backgroundColor:'#3cba9f'
                    
            					}]
          						},
          						 options: {
         						title: {
         						 display: true,
        						 text: 'Resonses to survey'
       							 }
      							 }
   							  	});
  							  });
                         </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- bar CHART -->	

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
	<!-- bar CHART -->
<body>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'></script>	
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>	
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>	
 <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row">
         <!--   <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <div class="card"> -->
                        <div class="card-header">other Chart</div>
                        <div class="card-body" style="height: 420px"> 
                            <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
								
                            </div> <canvas id="chart-line2" width="299" height="100" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
							<script>
							    $(document).ready(function() {
									var testnum = 3700;
							     var ctx = $("#chart-line2");
       							 var myLineChart = new Chart(ctx, {
         						type: 'bar',
         						 data: {
         						labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7', 'Q8', 'Q9', 'Q10', 'Q11', 'Q12', 'Q13', 'Q14', 'Q15', 'Q16', 'Q17', 'Q18', 'Q19', 'Q20'],
         						datasets: [{
         						data: [testnum, 20, 30, 40, 50, 60, 60, 60, 60, 60, 20, 30, 40, 50, 60, 60, 60, 60, 60, 20],
         						 label: "agree",
         						 borderColor: "#458af7",
         						 backgroundColor:'#458af7',
         						fill: false
         						}, {
         						 data: [282, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267],
         						label: "disagree",
         						 borderColor: "#8e5ea2",
         						fill: true,
          						 backgroundColor:'#8e5ea2'
                    
           						}, {
           						 data: [168, 170, 178, 190, 203, 276, 408, 547, 675, 734],
           						 label: "somewhat agree",
           						borderColor: "#3cba9f",
               					fill: false,
              					 backgroundColor:'#3cba9f'
                    
            					}]
          						},
          						 options: {
         						title: {
         						 display: true,
        						 text: 'Resonses to survey'

       							 }
      							 }
   							  	});
  							  });
                         </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- bar CHART -->	

 <!-- Horizontal bar CHART -->
<body>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'></script>	
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>	
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>	

 <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row">
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <div class="card">
                        <div class="card-header">Horizontal Bar chart</div>
                        <div class="card-body" style="height: 420px">
                            <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div> <canvas id="chart-line3" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
							<script>
							$(document).ready(function() {
							        var ctx = $("#chart-line3");
							       var myLineChart = new Chart(ctx, {
 							           type: 'horizontalBar',
 							           data: {
 							               labels: [1500, 1600, 1700, 1750, 1800, 1850, 1900, 1950, 1999, 2050],
  							              datasets: [{
    							                data: [86, 114, 106, 106, 107, 111, 133, 221, 783, 2478],
    							                label: "Africa",
    														                borderColor: "#458af7",
     							               backgroundColor: '#458af7',
    							                fill: false
     							           }, {
      							              data: [168, 170, 178, 190, 203, 276, 408, 547, 675, 734],
     							               label: "Europe",
      							              borderColor: "#3cba9f",
       							             fill: false,
       							             backgroundColor: '#3cba9f'
       							         }]
       							     },
       							     options: {
       							         title: {
       							             display: true,
       							             text: 'World population per region (in millions)'
       							         }
      							      }
      							  });
   							 });
							</script>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
  <!-- Horizontal bar CHART -->
	
	
<!--  CHART blank -->
<body>
<div>
<script> </script>
<script> </script>	
</div>	
</body>		
<!--  CHART blank -->	
		

<!-- Spacer -->
<br>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
</p>
<br>
	

	
</html>


	<?php 
include ("footer.php")
?>


