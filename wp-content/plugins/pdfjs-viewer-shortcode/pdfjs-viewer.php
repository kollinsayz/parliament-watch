<?php
/*
Plugin Name: PDFjs Viewer
Plugin URI: http://tphsfalconer.com
Description: View PDFs with pdf.js
Version: 1.2
Author: Ben & Josh
Author URI: http://tphsfalconer.com
License: GPLv2
*/
//tell wordpress to register the pdfjs-viewer shortcode
add_shortcode("pdfjs-viewer", "pdfjs_handler");

function pdfjs_handler($incomingfrompost) {
  //set defaults 
  $incomingfrompost=shortcode_atts(array(
    'url' => 'bad-url.pdf',  
    'viewer_height' => '1360px',
    'viewer_width' => '100%',
    'fullscreen' => 'true',
    'download' => 'true',
    'print' => 'true',
    'openfile' => 'false'
  ), $incomingfrompost);
  //run function that actually does the work of the plugin
  $pdfjs_output = pdfjs_function($incomingfrompost);
  //send back text to replace shortcode in post
  return $pdfjs_output;
}

function pdfjs_function($incomingfromhandler) {
  $siteURL = home_url();
  $viewer_base_url= $siteURL."/wp-content/plugins/pdfjs-viewer-shortcode/web/viewer.php";
  
  $file_name = $incomingfromhandler["url"];
  $viewer_height = $incomingfromhandler["viewer_height"];
  $viewer_width = $incomingfromhandler["viewer_width"];
  $fullscreen = $incomingfromhandler["fullscreen"];
  $download = $incomingfromhandler["download"];
  $print = $incomingfromhandler["print"];
  $openfile = $incomingfromhandler["openfile"];
  
  if ($download != 'true') {
      $download = 'false';
  }
  
  if ($print != 'true') {
      $print = 'false';
  }
  
  if ($openfile != 'true') {
      $openfile = 'false';
  }
  
  $final_url = $viewer_base_url."?file=".$file_name."&download=".$download."&print=".$print."&openfile=".$openfile;
  
  $fullscreen_link = '';
  if($fullscreen == 'true'){
       $fullscreen_link = '<a href="'.$final_url.'">View Fullscreen</a><br>';
  }
  $iframe_code = '<iframe width="'.$viewer_width.';" height="'.$viewer_height.';" src="'.$final_url.'"></iframe> ';
  
  return $fullscreen_link.$iframe_code;
}
?>