<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>--personal page--</title>

	<link rel="stylesheet" href="styles/site.css">
</head>





<?php include('functions.php'); ?>




<?php 

	$pageId="home";
	if ( isset($_GET["page"]) ) {
		$pageId = $_GET["page"];
	}

	echo $pageId;

	if ($pageId == "home") {
		$json = file_get_contents('data/pages/home.json');
		$pageData = json_decode($json, true);
	}

	if ($pageId == "projects") {
		$json = file_get_contents('data/projects.json');
		$projectsData = json_decode($json, true);
	}

	if ($pageId == "project") {
		$json = file_get_contents('data/projects.json');
		$projectsData = json_decode($json, true);
		foreach ($projectsData as $project) {
			if ($project["id"] == $_GET["id"]) {
				$projectData = $project;
			}
		}
	}


// renderPageTemplate(); 

?>

<body>
	 
 <header class="site-header">
	<p>?<?=queryString();?></p>
	<?php include('templates/partials/site-menu.php');?>
		
</header>

<?php

	if ($pageId == "home") {
		include('templates/pages/home.php');
	}

	if ($pageId == "projects") { //projects list page
		include('templates/pages/projects.php');
	}

	if ($pageId == "project") { //project detail page
	include('templates/pages/project.php');
	}

?>


</body>

</html>