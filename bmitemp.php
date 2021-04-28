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
	<script type="text/javascript">
	function bmi () {
var height = Number(document.getElementById("height").value);
var weight = Number(document.getElementById("weight").value);
var result = weight / (height * height);
document.getElementById("result").innerHTML = "Your bmi score is : " + result;
}
	</script>
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
        <form style= "background-color: grey;
    display: inline-block;
    box-sizing: border-box;
    box-shadow: 2px 2px 20px 5px black;
    margin: 0;
    padding: 10px;
    width:100%;
    max-width: 400px;">
		<div class="form-group">
            <input id="weight" type="text" placeholder="Your weight in kilograms"/>
            <br />
            <br />
            <input id="height" type="text" placeholder="Your height in meters" />
            <br />
            <br />
            <input class = "submit" type="button"  value="Submit" onclick="bmi()" />
            <p id="result">Here will be your result</p>
			</div>
        </form>
      </div>
    </section>
    <footer>
      <p class="p-3 bg-dark text-white text-center">@CJA_FITNESS_SOLUTIONS</p>
    </footer>
  </body>
</html>