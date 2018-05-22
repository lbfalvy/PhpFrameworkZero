<?php

require_once "PhpFrameworkZero/TemplateElement.php";
require_once "PhpFrameworkZero/ExpressionElement.php";

class IfElement extends TemplateElement {
	private $expression;
	private $block;
	public function __construct($expression, $block) {
		$this->expression = $expression;
		$this->block = $block;
	}
	public function execute($context) {
		$str = "";
		if ( $this->expression->execute($context) ) {
			foreach ($this->block as $element) $str .= $element->execute($context);
		}
		return $str;
	}
	public const END = "Constant_marking_end_of_if_element";
}

?>
