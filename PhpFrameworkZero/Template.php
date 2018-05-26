<?php

require_once "PhpFrameworkZero/functions.php";

$prefix__extended;
$prefix__blocks;
function extend($prefix__name) {
	global $prefix__extended;
	$prefix__extended = $prefix__name;
}
function startblock($prefix__name) {
	global $prefix__blocks;
	$prefix__blocks[0] = $prefix__name;
	ob_start();
}
function endblock() {
	global $prefix__blocks;
	$prefix__blocks[$prefix__blocks[0]] = ob_get_clean();
	unset($prefix__blocks[0]);
}
function block($prefix__name) {
	global $prefix__blocks;
	echo $prefix__blocks[$prefix__name];
}
function renderTemplate($prefix__filename, $prefix__context = array()) {
	global $prefix__extended, $prefix__blocks;
	// Create variables
	foreach ($prefix__context as $prefix__name => $prefix__value) {
		$$prefix__name = $prefix__value;
	}

	// ===== PRE =====
	// block
	$prefix__blocks = array();

	// ===== RENDER =====
	$prefix__loopguard = 20;
	do {
		$prefix__found = false;
		foreach (scandir(".") as $prefix__dir) {
			$prefix__path = $prefix__dir."/templates/".$prefix__filename;
			if (is_file($prefix__path)) {
				$prefix__extended = "";
				require $prefix__path;
				$prefix__filename = $prefix__extended;
				$prefix__found = true;
				break;
			}
		}
		if (!$prefix__found) throw new Exception("Template not found!");
		$prefix__loopguard--;
	} while (($prefix__filename != "") && $prefix__loopguard);
}
