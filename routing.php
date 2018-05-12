<?php

require_once("PhpFrameworkZero/routing.class.php");

return new PathRouter([
	"" => require("site/routing.php"),
]);

?>
