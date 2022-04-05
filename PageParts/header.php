<!DOCTYPE html>
<html lang="fr">

<!-- La "tête" sert à définir des propriétés globales de la page -->

<head>
	<meta charset="UTF-8">
	<title>Mon mini blog</title>
	<link rel="stylesheet" href="./Styles/formstyle.css">
	<link rel="stylesheet" href="./Styles/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="icon" href="/Images/dute_favicon_128x128.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<meta name="theme-color" content="#000000" />
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		(function(html) {
			html.className = html.className.replace(/\bno-js\b/, 'js')
		})(document.documentElement);
	</script>
</head>

<!-- Le "corps" de la page définit le contenu affiché dans la fenêtre du navigateur -->

<body>
	<header class="header">

		<a href="#" class="title"><span>b</span>logger</a>

		<nav class="navbar">
			<a href="./index2.php">Accueil</a>
			<a href="./index.php">Se Connecter</a>
			<a href="./index3.php">A propre de Moi</a>
		</nav>

		<div class="icons">
			<i class="fas fa-bars" id="menu-bars"></i>
			<i class="fas fa-search" id="search-icon"></i>
		</div>

		<form action="" class="search-form">
			<input type="search" name="" placeholder="search here..." id="search-box">
			<label for="search-box" class="fas fa-search"></label>
		</form>

	</header>

	<section class="banner" id="banner">

		<div class="content">
			<h3>explore this wibsite</h3>
			<p>Bienvenue sur le blog que j'ai créé</p>
			<a href="./index.php" class="btn">Se Connecter</a>
		</div>

	</section>