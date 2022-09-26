

<!doctype html>
<head>
 
<link rel="stylesheet" href="../CAPSTONE/assets/css/login modal.css">   
<link rel="stylesheet" href="../CAPSTONE/assets/css/login.css">
<?php 
include ("header4.php")
?>


</head>


    <body>
        <div class=" container-md mt-5">
        <h1>Survey Questionnaire</h1>
        <div class="mw-100 row col-5">
  <h4 class="fw-bold text-center mt-6"></h4>
  <form class="bg-white px-4" action="">
    <p class="fw-bold">Q1. Populate questions from database</p>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" name="agree" id="radioAgree" />
      <label class="form-check-label" for="radioAgree">
        Agree
      </label>
    </div>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" name="stronglyAgree" id="radioStronglyAgree" />
      <label class="form-check-label" for="radioStronglyAgree">
        Strongly Agree
      </label>
    </div>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" name="disagree" id="radioDisagree" />
      <label class="form-check-label" for="radioDisagree">
        Disagree
      </label>
    </div>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" name="stronglyDisagree" id="radioStronglyDisagree" />
      <label class="form-check-label" for="radioStronglyDisagree">
        Strongly Disagree
      </label>
    </div>
    <div class="form-check form-check-inline mb-2">
      <input class="form-check-input" type="radio" name="dontKnow" id="radioDontKnow" />
      <label class="form-check-label" for="radioDontKnow">
        Don't know
      </label>
    </div>
  </form>

  <!-- submit button -->
  <div class="text-end ">
    <button href="../CAPSTONE/index.php"type="button" class="btn btn-primary" onclick="backButton()">Back</button>
    <button type="button" class="btn btn-primary">Submit</button>
    <script>
        function backButton(){
            location.href = "../CAPSTONE/index.php"
        }
    </script>
  </div>
</div>
</div>


    </body>

        
</html>

