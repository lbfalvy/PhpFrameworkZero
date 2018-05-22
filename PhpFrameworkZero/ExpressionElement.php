<?php

require_once "PhpFrameworkZero/TemplateElement.php";

/**
 * This is a placeholder, the real class will be so big that it will
 * require splitting the current file into several smaller ones.
 *
 * TODO
 * math[ + - ++ -- += -= * , / ^ ^^ % sqrt nroot int < > == ]
 * logic[ ! || && ]
 * string[ . ]
 * meta[ () "" $ ]
 */
class ExpressionElement extends TemplateElement {
	private $name;
	public function __construct($string) {
		$matches = array();
		if (preg_match('/^\s*\$(?P<name>[a-zA-Z0-9_]+)\s*$/', $string, $matches) === 0) {
			throw new Exception("Expression not supported: [".$string."]");
		}
		$this->name = $matches["name"];
	} // TODO implement this; given expression as string
	public function execute($context) {
		return $context[$this->name];
	} // TODO implement this; returns result as string
}

?>
