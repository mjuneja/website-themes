<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );

global $tstyle;

// set default vars
$fontstyle = "f-" . $default_font;
$fontfamily = $font_family;
$tstyle = $default_style;
$mtype = $menu_type;
$thisurl = $_SERVER['PHP_SELF'] . rebuildQueryString($template_properties);


//array of properties to look for and store
foreach ($template_properties as $tprop) {
    $my_session = JFactory::getSession();


    if ($my_session->get($cookie_prefix.$tprop)) {
        $$tprop = $my_session->get($cookie_prefix.$tprop);
    } elseif (isset($_COOKIE[$cookie_prefix. $tprop])) {
    	$$tprop = JRequest::getVar($cookie_prefix. $tprop, '', 'COOKIE', 'STRING');
    }    
}

// rebuild the querystring when needed
function rebuildQueryString($template_properties) {

  if (!empty($_SERVER['QUERY_STRING'])) {
      $parts = explode("&", $_SERVER['QUERY_STRING']);
      $newParts = array();
      foreach ($parts as $val) {
          $val_parts = explode("=", $val);
          if (!in_array($val_parts[0], $template_properties)) {
            array_push($newParts, $val);
          }
      }
      if (count($newParts) != 0) {
          $qs = implode("&amp;", $newParts);
      } else {
          return "?";
      }
      return "?" . $qs . "&amp;"; // this is your new created query string
  } else {
      return "?";
  } 
}
?>
