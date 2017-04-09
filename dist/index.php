<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roadtrip</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
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
		<audio id="audio" controls autoplay loop>
			<source id="mp3Source" src="audio/music/life-is-a-highway.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
		</audio>

		<div class="container">
			<button class="btn btn-default control-tod"><h3>☼</h3></button>
		</div>
	</main>
	<script>
		$( document ).ready(function() {
			$( ".body" ).click(function() {
			  $(this).toggleClass('is-red');
			});
			$('.road').click(function() {
				$('#car').toggleClass('in-lane-2');
			});
			$( ".control-tod" ).click(function() {
			  $('.sky').toggleClass('at-night');
			});
			$( ".scan-knob" ).click(function() {
			  $('.scan-knob', '#marker').toggleClass('scanning');
			});
		});
	</script>
	<script src="js/functions.js"></script>

</body>
</html>