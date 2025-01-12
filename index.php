
<!DOCTYPE html>
<html lang="en-US">
<!-- Hi there! :V -->

<head>
	<meta charset="UTF-8">
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
				<?php require "./action.php"; ?>

			</h2>

			<ul>Yoshis<hr>
				<?php 
				$yoshis = ["blue", "red", "green", "yellow"]; 
				$sites = [
					["name" => "Camberden", "link" => "http://camberden.com"],
					["name" => "Mocha", "link" => "https://mocha2007.github.io"],
				];
				
				?>
				<?php foreach ($yoshis as $yoshi): ?>
				<li><?= "Theres a " . $yoshi . " Yoshi" ?></li>
				<?php endforeach; ?>
			</ul>
			<ul>Sites<hr>
					<?php foreach ($sites as $site) : ?>
						<?php //if ($site["name"] === "Mocha") : ?>
						<li>
							<span><?=$site["name"] . ": "?></span><a href="<?= $site["link"]?>">link!</a>
						</li>
						<?php //endif ?>
					<?php endforeach ?>

			</ul>

		</div>


		<div class="index-item footer">
			<span class="marker" id="footer-text">Made with ❤️ by Chrispy</span>
		</div>

	</main>
	

	<script src="action.js"></script>
</body>

</html>