<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Center | University of Rochester</title>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <?php include "inc/nav.php";?>

    	<form class="quiz" method="post" action="quiz-processor.php">

    		<div class="quiz-slide slide-nocolor active slide1">
    			<div class="question">
      					<p>Ready to take the quiz?</p>
    			</div>
    			<div class="answers">
    				
      				<ul>
        				<li><label><input name="start" type="radio"><span>Start</span></label></li>
        				<li><label><input name="start" type="radio"><a href="index.php">Back to Index</a></label></li>
      				</ul>
      				
    			</div>
    		</div>

  			<div class="quiz-slide slide-grey">
    			<div class="question">
      				<p>What's your favorite fruit?</p>
    			</div>
    			<div class="answers">
      				<ul>
        				<li><label><input name="fruit" type="radio" value="2" id="fruit1"><span>Strawberry</span></label></li>
        				<li><label><input name="fruit" type="radio" value="3" id="fruit2"><span>Apple</span></label></li>
        				<li><label><input name="fruit" type="radio" value="5" id="fruit3"><span>Watermelon</span></label></li>
        				<li><label><input type="radio" name="fruit" value="10" id="fruit4"><span>Pineapple</span></label></li>
        				<li><label><input type="radio" name="fruit" value="15" id="fruit5"><span>Orange</span></label></li>
      				</ul>
    			</div>
    		</div>

   			<div class="quiz-slide slide-blue">
    			<div class="question">
      				<p>Where would you most likely to go in your free time?</p>
    			</div>
    			<div class="answers">
      				<ul>
        				<li><label><input name="place" type="radio" value="2" id="place1"><span>Home</span></label></li>
       					<li><label><input name="place" type="radio" value="3" id="place2"><span>Cinema</span></label></li>
       					<li><label><input name="place" type="radio" value="5" id="place3"><span>Park</span></label></li>
       					<li><label><input name="place" type="radio" value="10" id="place4"><span>Shopping Mall</span></label></li>
       					<li><label><input name="place" type="radio" value="15" id="place5"><span>Bar</span></label></li>
      				</ul>
    			</div>
			</div>

   			<div class="quiz-slide slide-yellow">
    			<div class="question">
      				<p>If you can become an animal, what kind of animal you prefer to be?</p>
    			</div>
    			<div class="answers">
      				<ul>
        				<li><label><input name="animal" type="radio" value="2" id="animal1"><span>Cat</span></label></li>
        				<li><label><input name="animal" type="radio" value="3" id="animal2"><span>Horse</span></label></li>
        				<li><label><input name="animal" type="radio" value="5" id="animal3"><span>Elephant</span></label></li>
        				<li><label><input name="animal" type="radio" value="10" id="animal4"><span>Monkey</span></label></li>
        				<li><label><input name="animal" type="radio" value="15" id="animal5"><span>Lion</span></label></li>
      				</ul>
    			</div>
    		</div>

    		<div class="quiz-slide slide-grey">
    			<div class="question">
      				<p>What's your favorite color?</p>
    			</div>
    			<div class="answers">
      				<ul>
        				<li><label><input name="color" type="radio" value="2" id="color1"><span>Yellow</span></label></li>
        				<li><label><input name="color" type="radio" value="3" id="color2"><span>White</span></label></li>
        				<li><label><input name="color" type="radio" value="5" id="color3"><span>Blue</span></label></li>
        				<li><label><input name="color" type="radio" value="10" id="color4"><span>Black</span></label></li>
        				<li><label><input name="color" type="radio" value="15" id="color5"><span>Red</span></label></li>
      				</ul>
    			</div>
    		</div>

   			<div class="quiz-slide slide-blue">
    			<div class="question">
      				<p>What's is your favorite sport?</p>
    			</div>
    			<div class="answers">
      				<ul>
        				<li><label><input name="sport" type="radio" value="2" id="sport1"><span>Yoga</span></label></li>
       					<li><label><input name="sport" type="radio" value="3" id="sport2"><span>Badminton</span></label></li>
       					<li><label><input name="sport" type="radio" value="5" id="sport3"><span>Football</span></label></li>
       					<li><label><input name="sport" type="radio" value="10" id="sport4"><span>Boxing</span></label></li>
       					<li><label><input name="sport" type="radio" value="15" id="sport5"><span>Bungee</span></label></li>
      				</ul>
    			</div>
			</div>

   			<div class="quiz-slide slide-yellow">
    			<div class="question">
      				<p>If you have chance to live in one of the cities, which one will you choose?</p>
    			</div>
    			<div class="answers">
      				<ul>
        				<li><label><input name="city" type="radio" value="2" id="city1"><span>Miami, FL</span></label></li>
        				<li><label><input name="city" type="radio" value="3" id="city2"><span>Austin, TX</span></label></li>
        				<li><label><input name="city" type="radio" value="5" id="city3"><span>Rochester, NY</span></label></li>
        				<li><label><input name="city" type="radio" value="10" id="city4"><span>Los Angeles, CA</span></label></li>
        				<li><label><input name="city" type="radio" value="15" id="city5"><span>New York City, NY</span></label></li>
      				</ul>
    			</div>
    		</div>

    		<div class="quiz-slide slide-nocolor">
    			<div class="question">
      				<p>Last question, what is your name?</p>
    			</div>
    			<div class="answers lastan">
      				<label><input type="text" name="name" id="name" required></label>
      				<button name="send" type="submit" onclick="required()" value="result"></button>
    			</div>
    		</div>

		</form>

<?php include "inc/js.php";?>

<?php include "inc/quizjs.php";?>

</body>

</html>
