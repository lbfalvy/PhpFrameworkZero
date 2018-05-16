<?php

require_once "PhpFrameworkZero/TemplateElement.php";

class PlainTextElement extends TemplateElement {
	private $text;
	function __construct($text) {
		$this->text = $text;
	}
	function execute($context) {
		return $this->text;
	}
}

?>
