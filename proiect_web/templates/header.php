<?php
include(dirname(__DIR__).'/assets/util.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World lately</title>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/styles/main.css">
	<link rel="stylesheet" href="assets/styles/nav.css">
	<link rel="stylesheet" href="assets/styles/forms.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/6f78ace1ca.js" crossorigin="anonymous"></script>
	<!-- <script src="assets/js/main.js" defer></script> -->
</head>
<body>
    <header class="text-neutral100 bg-primary">
		<nav class="menu">
			<button class="menu-toggler" aria-control="primary-navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="hamburger"></span>
			</button>
			<a class="menu__logo text-neutral100" id="logo" href="index.php"> InkTrail </a>
			<ul class="menu__list bg-primary" id="primary-navigation">

				<li class="menu__item">
						<li class="menu__item">
							<a class="menu__link text-neutral100 fs-link shiny-item" href="index.php?category=arta"> Artistic </a>
						</li>
						<li class="menu__item">
							<a class="menu__link text-neutral100 fs-link shiny-item" href="index.php?category=tehnica">
								Tehnic
							</a>
						</li>
						<li class="menu__item">
							<a class="menu__link text-neutral100 fs-link shiny-item" href="index.php?category=stiinta">
								Stiinta
							</a>
						</li>
						<li class="menu__item">
							<a class="menu__link text-neutral100 fs-link shiny-item" href="index.php?category=moda">
								Moda
							</a>
						</li>

				<li class="menu__item menu__item--pos sign-in">
					<a class="menu__link framed-item text-neutral100 fs-link b-neutral100 shiny-item" href="login.php"> Sign In </a>
				</li>
				<li class="menu__item register">
					<a class="menu__link framed-item text-neutral100 fs-link b-neutral100 shiny-item" href="register.php"> Sign Up </a>
				</li>
			</ul>
		</nav>
	</header>
	<main class="my-row">
</body>
</html>
