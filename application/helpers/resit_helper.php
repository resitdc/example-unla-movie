<?php

if ( ! function_exists('resit_template')){
  function resit_template($view = '', $view_data = array()){
		$CI =& get_instance();
		$title = 'UNLA x DILO';
		$view_data['title'] = (isset($view_data['title']) ? ($view_data['title']." - ".$title) : $title);
		$CI->template->load('main', $view, $view_data);
  }
}