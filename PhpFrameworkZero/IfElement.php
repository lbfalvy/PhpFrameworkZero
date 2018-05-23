<?php

require_once "PhpFrameworkZero/TemplateElement.php";
require_once "PhpFrameworkZero/ExpressionElement.php";

class IfElement extends TemplateElement {
	private $expression;
	private $block = array();
	private $else_block = array();
	public function __construct($expression, $block) {
		$this->expression = $expression;
		for ($i = 0; $i < count($block); $i++) {
			if ($block[$i] instanceof ElseElement) {
				$this->else_block = array_slice($block, $i+1);
				break;
			}
			elseif ($block[$i] instanceof ElsifElement) {
				$sub_expression = $block[$i]->expression;
				$sub_block = array_slice($block, $i+1);
				$sub_if = new IfElement($sub_expression, $sub_block);
				$this->else_block = [$sub_if];
				break;
			}
			array_push($this->block, $block[$i]);
		}
	}
	public function execute($context) {
		$str = "";
		if ( $this->expression->execute($context) ) {
			foreach ($this->block as $element) $str .= $element->execute($context);
		} elseif ( count($this->else_block) > 0 ) {
			foreach ($this->else_block as $element) $str .= $element->execute($context);
		}
		return $str;
	}
	public const END = "Constant_marking_end_of_if_element";
}

class ElseElement extends TemplateElement {
	public function execute($context) { throw new Exception("else block outside if"); }
}

class ElsifElement extends TemplateElement {
	public $expression;
	public function __construct($expression) { $this->expression = $expression; }
	public function execute($context) { throw new Exception("elsif block outside if"); }
}
?>
