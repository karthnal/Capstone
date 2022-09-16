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
	
<!-- Jquery -->	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Jquery -->	
	
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
	
<!-- Login Modal Links & style Start -->
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../CAPSTONE/assets/css/login modal.css">
	
<link rel="stylesheet" href="../CAPSTONE/assets/css/login.css">

<!-- Login Modal End -->
	


  <!-- =======================================================
  * Template Name: Impact - v1.0.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<!-- ======= Header ======= -->
    
<section id="topbar" class="topbar d-flex align-items-center">

      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Impact<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
	<!-- Login Modal start  -->
	<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="#myModal" class="trigger-btn" data-toggle="modal">Login</a>
</div>


			

		
		<!-- -->
		
			
			
          <li><a href="../CAPSTONE/index.php">Home</a></li>
			<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
         
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Impact</span></h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
<html>
    <head></head>
    <body>
        <h1>Dashboard</h1>
        <form method='post' action="" >
            <input id="logout"  onclick="location.href = '.../CAPSTONE/index.php';"type="submit" value="Logout" name="but_logout" >
        </form>
		
		


<!-- PIE CHART -->
<body>
<div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js" type="text/javascript"></script>
 <canvas id="countries" width="600" height="400"></canvas>
    <script>
        var pieData = [
            {
                value: 20,
                color:"#878BB6"
            },
            {
                value : 40,
                color : "#4ACAB4"
            },
            {
                value : 10,
                color : "#FF8153"
            },
            {
                value : 30,
                color : "#FFEA88"
            }
        ];
        // Get the context of the canvas element we want to select
        var countries= document.getElementById("countries").getContext("2d");
        new Chart(countries).Pie(pieData);
    </script>
</div>
</body>
<!-- PIE CHART -->

<!--  CHART blank -->
<body>
<div>
<script> </script>	
<canvas> </canvas>
<script> </script>	
</div>	
</body>		
<!--  CHART blank -->
		
<!-- bar CHART -->
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
                        <div class="card-header">Bar chart</div>
                        <div class="card-body" style="height: 420px">
                            <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
								
                            </div> <canvas id="chart-line" width="299" height="140" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
							<script>
							    $(document).ready(function() {
									var testnum = 37;
							     var ctx = $("#chart-line");
       							 var myLineChart = new Chart(ctx, {
         						type: 'bar',
         						 data: {
         						labels: [1500, 1600, 1700, 1750, 1800, 1850, 1900, 1950, 1999, 2050],
         						datasets: [{
         						data: [testnum, 114, 106, 106, 107, 111, 133, 221, 783, 2478],
         						 label: "Africa",
         						 borderColor: "#458af7",
         						 backgroundColor:'#458af7',
         						fill: false
         						}, {
         						 data: [282, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267],
         						label: "Asia",
         						 borderColor: "#8e5ea2",
         						fill: true,
          						 backgroundColor:'#8e5ea2'
                    
           						}, {
           						 data: [168, 170, 178, 190, 203, 276, 408, 547, 675, 734],
           						 label: "Europe",
           						borderColor: "#3cba9f",
               					fill: false,
              					 backgroundColor:'#3cba9f'
                    
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

</body>

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


