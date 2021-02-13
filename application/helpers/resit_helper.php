<?php

if ( ! function_exists('resit_template')){
  function resit_template($view = '', $view_data = array()){
		$CI =& get_instance();
		$title = 'UNLA x DILO';
		$view_data['title'] = (isset($view_data['title']) ? ($view_data['title']." - ".$title) : $title);
		$CI->template->load('main', $view, $view_data);
  }
}


if ( ! function_exists('youtube_link')){
  function youtube_link($youtube_id = ''){
    $hasil = "";

    if(!empty($youtube_id)){
      $hasil = "https://www.youtube-nocookie.com/embed/".$youtube_id."?loop=1&autoplay=0&controls=1&disablekb=1&playsinline=1&cc_load_policy=0&cc_lang_pref=auto&noCookie=true&rel=0&showinfo=0&iv_load_policy=3&modestbranding=1&enablejsapi=1&widgetid=1";
    }

    return $hasil;
  }
}