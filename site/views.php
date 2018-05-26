<?php

require_once "PhpFrameworkZero/Template.php";

// array database
$projects = [
	[
		"name" => "test",
		"finished" => 100,
		"abandoned" => false,
	],
	[
		"name" => "framework",
		"finished" => 20,
		"abandoned" => false,
	],
	[
		"name" => "website",
		"finished" => 0,
		"abandoned" => false,
	],
	[
		"name" => "tree",
		"finished" => 0.05,
		"abandoned" => 2017,
	],
];

// execute a template in one row
$index_view = function($scope) {
	renderTemplate("home.php");
	return true;
};

$projects_view = function($scope) {
	$context = [
		"projects" => array(),
		"prepath" => "projects/",
	];
	global $projects;
	foreach ($projects as $proj) {
		array_push($context["projects"], $proj["name"]);
	}
	renderTemplate("projects.php", $context);
	return true;
};

$single_project_view = function($scope) {
	global $projects;
	foreach ($projects as $proj) {
		if ($proj["name"] != $scope["matches"]["project"]) continue;
		$context = [
			"proj" => $proj["name"],
			"progress" => $proj["finished"],
			"abandoned" => $proj["abandoned"],
			"complete" => $proj["finished"] == 100,
		];
		renderTemplate("project.php", $context);
		return true;
	}
	echo "project not found";
	return true;
};
