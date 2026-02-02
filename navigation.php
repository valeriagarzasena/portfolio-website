<?php
if ($page == "home.php"){
	echo '
	<li class="active"><a href="index.php" class="smooth-menu">Home</a></li>
	<li class="smooth-menu"><a href="index.php?page=about">about me</a></li>
	<li class="smooth-menu"><a href="index.php?page=education">education</a></li>
	<li class="smooth-menu"><a href="index.php?page=projects">projects</a></li>
	<li class="smooth-menu"><a href="index.php?page=interests">interests</a></li>
	<li class="smooth-menu"><a href="index.php?page=contact">contact</a></li>
	<li class="smooth-menu"><a href="index.php?page=results">results</a></li>
	';
}
elseif ($page == "about.php") {
	echo '
	<li class="smooth-menu"><a href="index.php">Home</a></li>
	<li class="active"><a href="index.php?page=about" class="smooth-menu">about me</a></li>
	<li class="smooth-menu"><a href="index.php?page=education">education</a></li>
	<li class="smooth-menu"><a href="index.php?page=projects">projects</a></li>
	<li class="smooth-menu"><a href="index.php?page=interests">interests</a></li>
	<li class="smooth-menu"><a href="index.php?page=contact">contact</a></li>
	<li class="smooth-menu"><a href="index.php?page=results">results</a></li>
';
}
elseif ($page == "education.php") {
	echo '
	<li class="smooth-menu"><a href="index.php">Home</a></li>
	<li class="smooth-menu"><a href="index.php?page=about">about me</a></li>
	<li class="active"><a href="index.php?page=education" class="smooth-menu">education</a></li>
	<li class="smooth-menu"><a href="index.php?page=projects">projects</a></li>
	<li class="smooth-menu"><a href="index.php?page=interests">interests</a></li>
	<li class="smooth-menu"><a href="index.php?page=contact">contact</a></li>
	<li class="smooth-menu"><a href="index.php?page=results">results</a></li>
';
}
elseif ($page == "projects.php") {
	echo '
	<li class="smooth-menu"><a href="index.php">Home</a></li>
	<li class="smooth-menu"><a href="index.php?page=about">about me</a></li>
	<li class="smooth-menu"><a href="index.php?page=education">education</a></li>
	<li class="active"><a href="index.php?page=projects" class="smooth-menu">projects</a></li>
	<li class="smooth-menu"><a href="index.php?page=interests">interests</a></li>
	<li class="smooth-menu"><a href="index.php?page=contact">contact</a></li>
	<li class="smooth-menu"><a href="index.php?page=results">results</a></li>
';
}
elseif ($page == "interests.php") {
	echo '
	<li class="smooth-menu"><a href="index.php">Home</a></li>
	<li class="smooth-menu"><a href="index.php?page=about">about me</a></li>
	<li class="smooth-menu"><a href="index.php?page=education">education</a></li>
	<li class="smooth-menu"><a href="index.php?page=projects">projects</a></li>
	<li class="active"><a href="index.php?page=interests" class="smooth-menu">interests</a></li>
	<li class="smooth-menu"><a href="index.php?page=contact">contact</a></li>
	<li class="smooth-menu"><a href="index.php?page=results">results</a></li>
';
}
elseif ($page == "contact.php") {
	echo '
	<li class="smooth-menu"><a href="index.php">Home</a></li>
	<li class="smooth-menu"><a href="index.php?page=about">about me</a></li>
	<li class="smooth-menu"><a href="index.php?page=education">education</a></li>
	<li class="smooth-menu"><a href="index.php?page=projects">projects</a></li>
	<li class="smooth-menu"><a href="index.php?page=interests">interests</a></li>
	<li class="active"><a href="index.php?page=contact" class="smooth-menu">contact</a></li>
	<li class="smooth-menu"><a href="index.php?page=results">results</a></li>
';
}
elseif ($page == "results.php") {
	echo '
	<li class="smooth-menu"><a href="index.php">Home</a></li>
	<li class="smooth-menu"><a href="index.php?page=about">about me</a></li>
	<li class="smooth-menu"><a href="index.php?page=education">education</a></li>
	<li class="smooth-menu"><a href="index.php?page=projects">projects</a></li>
	<li class="smooth-menu"><a href="index.php?page=interests">interests</a></li>
	<li class="smooth-menu"><a href="index.php?page=contact">contact</a></li>
	<li class="active"><a href="index.php?page=results" class="smooth-menu">results</a></li>
';
}
?>