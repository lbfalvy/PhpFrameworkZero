<?php

require_once "PhpFrameworkZero/Template.php";

$index_view = function($scope) {
	echo "Home page";
	return true;
};

$projects_view = function($scope) {
	echo "Projects page";
	return true;
};

$single_project_view = function($scope) {
	$template = new Template("project.html");
	$template->context = [
		"proj" => $scope["matches"]["project"]
	];
	$template->execute();
	return true;
};

?>
