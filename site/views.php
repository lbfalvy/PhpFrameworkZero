<?php

require_once "PhpFrameworkZero/template.php";

$index_view = function($scope) {
	echo "Home page";
	return true;
};

$projects_view = function($scope) {
	echo "Projects page";
	return true;
};

$single_project_view = function($scope) {
	echo "Page for project ".$scope["matches"]["project"];
	return true;
};

?>
