

<!doctype html>
<head>
 
<link rel="stylesheet" href="../CAPSTONE/assets/css/login modal.css">   
<link rel="stylesheet" href="../CAPSTONE/assets/css/login.css">
<?php 
include ("header4.php");
$participantid = $_GET["pid"];
$surveyid = $_GET["sid"];
	
?>


</head>


    <body>
        <div class=" container-md mt-5">
        <h1>Survey Questionnaire</h1>
        <div class="mw-100 row col-5">





		<br>
		<!-- Question 1 -->

  <h4 class="fw-bold text-center mt-6"></h4>
  <form class="bg-white px-4" action="">
  <form class="px-4" action="">
    <p class="fw-bold" id="question1" name="question1" > xxxxxx </p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q1" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q1" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q1" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q1" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q1" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
	  


<!-- end of question -->
<!-- Question 2 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question2" name="question2">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q2" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q2" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q2" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q2" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q2" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	
	  
<!-- Question 3 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question3" name="question3">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q3" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q3" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q3" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q3" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q3" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	
<!-- Question 4 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question4" name="question4">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q4" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q4" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q4" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q4" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q4" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->		  
<!-- Question 5 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question5" name="question5">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q5" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q5" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q5" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q5" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q5" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->
<!-- Question 6 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question6" name="question6">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q6" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q6" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q6" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q6" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q6" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->
<!-- Question 7 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question7" name="question7">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q7" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q7" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q7" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q7" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q7" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	
<!-- Question 8 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question8" name="question8">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q8" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q8" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q8" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q8" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q8" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	
<!-- Question 9 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question9" name="question9">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q9" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q9" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q9"value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q9" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q9" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	
<!-- Question 10 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question10" name="question10">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q10" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q10" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q10" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q10" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q10" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->
<!-- Question 11 -->
    <p class="fw-bold" id="question11" name="question11">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q11" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q11" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q11" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q11" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q11" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
	  


<!-- end of question -->

<!-- Question 12 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question12" name="question12">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q12" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q12" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q12" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q12" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q12" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	
	  
<!-- Question 13 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question13" name="question13">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q13" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q13" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q13" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q13" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q13" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	
<!-- Question 14 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question14" name="question14">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q14" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q14" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q14" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q14" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q14" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->		  
<!-- Question 15 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question15" name="question15">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q15" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q15" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q15" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q15" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q15" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->
<!-- Question 16 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question16" name="question16">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q16" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q16" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q16" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q16" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q16" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->
<!-- Question 17 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question17" name="question17">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q17" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q17" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q17" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q17" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q17" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	
<!-- Question 18 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question18" name="question18">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q18" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q18" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q18" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q18" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q18" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	
<!-- Question 19 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question19" name="question19">choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q19" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q19" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q19"value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q19" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q19" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	
<!-- Question 20 -->


  <form class="px-4" action="">
    <p class="fw-bold" id="question20" name="question20"> choose one or more options</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q20" value="1" id="1" />
      <label class="form-check-label" for="flexCheckDefault">
        Agree
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q20" value="2" id="2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Disagree 
      </label>
    </div>

    <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q20" value="3" id="3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Strongly Agree 
      </label>
    </div>



 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q20" value="4" id="4" />
      <label class="form-check-label" for="flexCheckDefault4">
        Strongly Disagree 
      </label>
    </div>
  
 <!-- Checked radio -->
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" data-limit="only-one-in-a-group" name="Q20" value="5" id="5" />
      <label class="form-check-label" for="flexCheckDefault5">
        i dont know  
      </label>
    </div>
  
<br>	
<!-- end of question -->	

 </form>
	
  <div class="card-footer text-end">
	 
	   	  <?php
	include 'getquestions.php'
	?>

    <button type="button" value ="submit" name="but_submit" class="btn btn-primary" id="demo">Submit</button>
	  <p id="output">Value</p>
	  <script>
      
      
		let btn = document.getElementById('demo');
		let output = document.getElementById('output');

		  
		btn.addEventListener('click', () => {  
		let question1 = 3;
		let question2 = 3;
		let question3 = 3;
		let question4 = 3;
		let question5 = 3;
		let question6 = 3;
		let question7 = 3;
		let question8 = 3;
		let question9 = 3;
    	let question10 = 3;
		let question11 = 3;
		let question12 = 3;
		let question13 = 3;
		let question14 = 3;
		let question15 = 3;
		let question16 = 3;
		let question17 = 3;
		let question18 = 3;
		let question19 = 3;
		let question20 = 3;
		let check1 = document.getElementsByName('Q1');
		let check2 = document.getElementsByName('Q2');		
		let check3 = document.getElementsByName('Q3');		
		let check4 = document.getElementsByName('Q4');	
		let check5 = document.getElementsByName('Q5');	
		let check6 = document.getElementsByName('Q6');	
		let check7 = document.getElementsByName('Q7');	
		let check8 = document.getElementsByName('Q8');	
		let check9 = document.getElementsByName('Q9');	
		let check10 = document.getElementsByName('Q10');	
		let check11 = document.getElementsByName('Q11');	
		let check12 = document.getElementsByName('Q12');	
		let check13 = document.getElementsByName('Q13');	
		let check14 = document.getElementsByName('Q14');	
		let check15 = document.getElementsByName('Q15');	
		let check16 = document.getElementsByName('Q15');	
		let check17 = document.getElementsByName('Q17');	
		let check18 = document.getElementsByName('Q18');	
		let check19 = document.getElementsByName('Q19');	
		let check20 = document.getElementsByName('Q20');	
			
			
		check1.forEach((Q1) =>{
			if (Q1.checked){
				question1 = Q1.value
				
			 }
            });		
		  check2.forEach((Q2) =>{
			if (Q2.checked){
				 question2 = Q2.value
			 }
            });
		  check3.forEach((Q3) =>{
			if (Q3.checked){
				 question3 = Q3.value
			 }
            });
		  check4.forEach((Q4) =>{
			if (Q4.checked){
				 question4 = Q4.value
			 }
            });
		  check5.forEach((Q5) =>{
			if (Q5.checked){
				 question5 = Q5.value
			 }
            });
		  check6.forEach((Q6) =>{
			if (Q6.checked){
				 question6 = Q6.value
			 }
            });
		  check7.forEach((Q7) =>{
			if (Q7.checked){
				 question7 = Q7.value
			 }
            });
		  check8.forEach((Q8) =>{
			if (Q8.checked){
				 question8 = Q8.value
			 }
            });
		  check9.forEach((Q9) =>{
			if (Q9.checked){
				 question9 = Q9.value
			 }
            });
		  check10.forEach((Q10) =>{
			if (Q10.checked){
				 question10 = Q10.value
			 }
            });
		check11.forEach((Q11) =>{
			if (Q11.checked){
				 question11 = Q11.value
			 }
            });		
		  check12.forEach((Q12) =>{
			if (Q12.checked){
				 question12 = Q12.value
			 }
            });
		  check13.forEach((Q13) =>{
			if (Q13.checked){
				 question13 = Q13.value
			 }
            });
		  check14.forEach((Q14) =>{
			if (Q14.checked){
				 question14 = Q14.value
			 }
            });
		  check15.forEach((Q15) =>{
			if (Q15.checked){
				 question15 = Q15.value
			 }
            });
		  check16.forEach((Q16) =>{
			if (Q16.checked){
				 question16 = Q16.value
			 }
            });
		  check17.forEach((Q17) =>{
			if (Q17.checked){
				 question17 = Q17.value
			 }
            });
		  check18.forEach((Q18) =>{
			if (Q18.checked){
				 question18 = Q18.value
			 }
            });
		  check19.forEach((Q19) =>{
			if (Q19.checked){
				 question19 = Q19.value
			 }
            });
		  check20.forEach((Q20) =>{
			if (Q20.checked){
				 question20 = Q20.value
			 }
            });
			

			
		var myoutput =  [question1,question2,question3,question4,question5,question6,question7,question8,question9,question10,question11,question12,question13,question14,question15,question16,question17,question18,question19,question20].join(",");
 
					
			
			
			
						var xhr = new XMLHttpRequest();
            xhr.open("POST", "questionsubmit.php?pid=<?= $participantid ?>&sid=<?= $surveyid ?>", true);
            xhr.setRequestHeader('Content-Type', 'text/csv');
            xhr.send(myoutput);
           
			output.innerText = `You selected: ${myoutput}`;

		});
	  </script>
  </div>
</div>

<!-- Question -->

<!-- Question Selection 1 per group -->
<script>
    let cbxes = document.querySelectorAll('input[type="radio"][data-limit="only-one-in-a-group"]');
    [...cbxes].forEach((cbx) => {
        cbx.addEventListener('change', (e) => {
            if (e.target.checked)
                uncheckOthers(e.target);
        });
    });
    function uncheckOthers (clicked) {
        let name = clicked.getAttribute('name');
        // find others in same group, uncheck them
        [...cbxes].forEach((other) => {
            if (other != clicked && other.getAttribute('name') == name)
                other.checked = false;
        });
    }
</script>
<!-- Question Selection 1 per group -->

    </body>

        
</html>

