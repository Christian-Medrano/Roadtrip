<?php 
	$tod = 12;
	$isNight = false;
	@include 'functions.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roadtrip</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<main class="container-fluid text-center py-4">

		<h1>Let's go on a roadtrip!</h1>
		<div class="row">
			<div class="col screen">
				<?php include 'images/svg-roadtrip.php'; ?>
				<?php include 'images/svg-radio.php'; ?>
			</div>
		</div>
		<audio controls autoplay>
		  <source src="audio/music/Rascal-Flatts _Life-is-a-Highway.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
		</audio>

		<div class="container">
			<button class="btn btn-default control-tod"><h3>☼</h3></button>
		</div>
	</main>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

	<script>
		$( document ).ready(function() {
			$( ".body" ).click(function() {
			  $(this).toggleClass('is-red');
			});
			$('.road').click(function() {
				$('#car').toggleClass('in-lane-2');
				$carIsInLane2 = true;
			});
			$( ".control-tod" ).click(function() {
			  $('.sky').toggleClass('at-night');
			});
			$( "#scan-knob" ).click(function() {
			  $(this).toggleClass('scanning');
			});
		});
	</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>