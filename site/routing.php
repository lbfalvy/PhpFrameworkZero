<?php

require_once "PhpFrameworkZero/PathRouter.php";
require_once "site/views.php";

return new PathRouter([
	"/" => $index_view,
	"/projects" => $projects_view,
	"/projects/<string:project>" => $single_project_view,
]);

?>
