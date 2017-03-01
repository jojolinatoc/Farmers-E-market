<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @param string $page
 * @param string $template
 * @param boolean $setToVar (optional)
 * @return string
 */
function render($page, $template, $setToVar = false){
	$CI =& get_instance();
	$data['content'] = $CI->load->view($page, null, true);
	return $CI->load->view('templates/' . $template . '.php', $data, $setToVar);
}

?>