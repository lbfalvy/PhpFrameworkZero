<?php

require_once "PhpFrameworkZero/TemplateElement.php";
require_once "PhpFrameworkZero/ExpressionElement.php";

class EchoElement extends TemplateElement {
	private $expression;
	function __construct($string) {
		$this->expression = new ExpressionElement($string);
	}
	function execute($context) {
		return $this->expression->execute($context);
	}
}

?>
