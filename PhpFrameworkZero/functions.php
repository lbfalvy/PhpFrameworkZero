<?php

/**
 * {@link str_replace} but only once
 */
function str_replace_first($from, $to, $content)
{
	$from = '/'.preg_quote($from, '/').'/';
	return preg_replace($from, $to, $content, 1);
}

/**
 * Executes php script and gets the output values.
 */
function get_php_results($filename) {
	ob_start();
	require $filename;
	return ob_get_clean();
}

/**
 * {@link explode} but with delimiter array
 */
function multiexplode ($delimiters,$string) {
	$ready = str_replace($delimiters, $delimiters[0], $string);
	$launch = explode($delimiters[0], $ready);
	return  $launch;
}

?>
