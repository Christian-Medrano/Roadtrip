<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roadtrip</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<main class="container text-center py-4">
		<h1>Let's go on a roadtrip!</h1>
		<?php @include 'images/svg-roadtrip.php'; ?>
	</main>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

	<script>
		$( document ).ready(function() {
			$( ".body" ).click(function() {
			  $(this).toggleClass('is-red');
			});
			$('.road').click(function() {
				$('#car').toggleClass('in-lane-2');
			});
		});
	</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>