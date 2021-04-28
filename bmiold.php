<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <title>CJA FITNESS SOLUTIONS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="bootcss.css" />
    <script src="scripts/googleap1.js"></script>
    <script src="scripts/boot.js"></script>
    <script src="scripts/cloud.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">CJA FITNESS SOLUTIONS</a>
	  <button class= "navbar-toggler" type= "button" data-toggle= "collapse" data-target= "#navbarSupportedContent"
	  aria-expanded= "false" aria-label = "Toggle Navigation">
	  <span class= "navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home 
            <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="locality.php">Locality</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shopping.php">Shopping</a>
          </li>
        </ul>
      </div>
    </nav>
	<section class="my-5">
      <div class="py-5">
        <h3 class="text-center">BMI Calculator</h3>
      </div>
	  <div class="w-50 m-auto">
        <form>
          <div class="form-group">
          <label>Your Weight(kg)</label> 
          <input type="number" id="weight" autocomplete="off" class="form-control" /> 
          <label>Your Height(cm)</label> 
          <input type="number" id="height" autocomplete="off" class="form-control" /> 
          <button type="submit" class="btn btn-success" onclick= "sum()">Submit</button></div>
		  <script>
		  function sum()
		  {
			  var w = document.getElementById("weight").value;
			  var h = document.getElementById("height").value;
			  
			  var bmi = w/Math.pow(h,2); 
			  
			 
			  document.alert("Your BMI :" + bmi + " That is You are "+comment(bmi) );
		  }
		  function comment(bmi)
		  {
			if (bmi<18.5)
            var value = "Underweight";
            if (bmi>=18.5 && bmi<=25)
            var value = "Normal";
            if (bmi>=25 && bmi<=30)
            var value = "Obese";
            if (bmi>30)
            var value = "Overweight";
			return value;
		  }
		  </script>
		  <button type="reset" class="btn btn-success">Reset</button></div>
        </form>
      </div>
    </section>
    <footer>
      <p class="p-3 bg-dark text-white text-center">@CJA_FITNESS_SOLUTIONS</p>
    </footer>
  </body>
</html>