<!DOCTYPE html>
<html lang="en-US">
<!-- Hi there! :V -->

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="assets/image-crystal-chrispy-favicon.png">
	<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
	<link href="https://fonts.googleapis.com/css?family=Lora:400italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker:400" rel="stylesheet" type="text/css">
	<title>Chrispy's PHP Playground</title>
</head>

<body>
	
	<main class="index-grid">

		<h1 id="camberden">camberden</h1>

		<div class="index-item site-info">
			<p>	
				Welcome to camberden's php stuff.<br>
				Here you will find practice.<br>
				Nothing but fun practice.<br>
				An expression of my being! I guess.
			</p>
		</div>

		<div class="plaything">
			<h2>
				<?php 
					echo "Hello, you.<br>";
					echo "Echoed from the depths.";
					
					$yoshis = [
						"Red",
						"Blue",
						"Yellow",
						"Light Blue",
						"White",
						"Orange",
						"Pink",
					];

					$containers = [
						[
							"Crate" => "Apple",
							"Bottle" => "Water",
						],
						[
							"Bin" => "Banana",
							"Bucket" => "Juice",
						],
					];

					function filterYoshis($yoshis) {
						return $yoshis[0];
					}

				?>

			</h2>

			<ul>Yoshis<hr>
				<?php foreach ($yoshis as $yoshi) {
					echo "<li>Hi</li>";
				};	
				?>
				<hr>
				<?php foreach ($yoshis as $yoshi): ?>
				<li><?=$yoshi?></li>
				<?php endforeach; ?>
				<li> <?= filterYoshis($yoshis); ?> </li>

			</ul>


		</div>




		<div class="index-item footer">
			<p class="marker" id="footer-text">Made with ❤️ by Chrispy</span></p>
		</div>

	</main>

	

	<!-- <script src="action.js"></script> -->
</body>

</html>