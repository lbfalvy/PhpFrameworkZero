<?php

require_once "PhpFrameworkZero/TemplateElement.php";
require_once "PhpFrameworkZero/ExpressionElement.php";

class EchoElement extends TemplateElement {
	private $expression;
	public function __construct($expression) {
		$this->expression = $expression;
	}
	public function execute($context) {
		return $this->expression->execute($context);
	}
}

?>
