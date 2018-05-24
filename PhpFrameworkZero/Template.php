<?php

require_once "PhpFrameworkZero/functions.php";

class Template {
	public static function render($filename, $context=array()) {
		foreach ($context as $name => $value) {
			$$name = $value;
		}
		$extended = "";
		function extend($name) {
			$extended = $name;
		}
		foreach (scandir(".") as $dir) {
			$path = $dir."/templates/".$filename;
			if (is_file($path)) {
				require_once $path;
			}
		}
		if ($extended) {
			this::render($extended);
		}
	}
}

?>
