<?php
	//select in the database
	$getproject=PWD()->prepare("SELECT * From prow_my_project Where prow_proj_id = :project_id");
	$getproject->execute([
		'project_id' => 1
	]);

	$project=$getproject->fetch(PDO::FETCH_ASSOC);

	$my_project_name = $project['prow_proj_name'];
	$my_project_address = $project['prow_proj_address'];
	$my_project_title = $project['prow_proj_title'];
	$my_project_origin = $project['prow_proj_origin'];
?>