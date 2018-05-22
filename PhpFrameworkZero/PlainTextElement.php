<?php

require_once "PhpFrameworkZero/TemplateElement.php";

class PlainTextElement extends TemplateElement {
	private $text;
	public function __construct($text) {
		$this->text = $text;
	}
	public function execute($context) {
		return $this->text;
	}
}

?>
