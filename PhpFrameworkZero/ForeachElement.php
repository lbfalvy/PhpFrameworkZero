<?php

require_once "PhpFrameworkZero/LoopElement.php";

class ForeachElement extends LoopElement {
    private $block;
    private $arr_expression;
    private $iterator;
	public function __construct($iterator, $array, $block) {
        $this->iterator = $iterator;
        $this->arr_expression = $array;
        $this->block = $block;
	}
	public function execute($context) {
        $res = "";
        foreach ($this->arr_expression->execute($context) as $item) {
            $context[$this->iterator] = $item;
            foreach ($this->block as $element) {
                $res .= $element->execute($context);
            }
        }
        return $res;
	}
}

?>
