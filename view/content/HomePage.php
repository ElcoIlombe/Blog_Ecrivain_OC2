<?php $title = "Jean Forteroche"; ?>

<?php ob_start(); ?>
<nav>
	<h1> Jean Forteroche </h1>
	<ul>
		<li> Accueil </li>
		<li> Histoire </li>
		<li> Connexion Admin.</li>
	</ul>
</nav>
<div class="left_side">
	<img >
	<div class="presentation"></div>
	<div class="news"></div>
</div>
<div class="right_side">
	<div></div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>



