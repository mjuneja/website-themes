<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );

global $Itemid, $modules_list;

if ($mtype!="module") :
	// menu code
	$document	= &JFactory::getDocument();
	$renderer	= $document->loadRenderer( 'module' );
	$options	 = array( 'style' => "raw" );
	$module	 = JModuleHelper::getModule( 'mod_mainmenu' );
	$topnav = false; $subnav = false; $sidenav = false;
	if ($mtype=="splitmenu") :
		$module->params	= "menutype=$menu_name\nstartLevel=0\nendLevel=1\nclass_sfx=top";
		$topnav = $renderer->render( $module, $options );
		
		$module	 = JModuleHelper::getModule( 'mod_mainmenu' );
		$module->params	= "menutype=$menu_name\nstartLevel=1\nendLevel=2\nclass_sfx";
		$subnav = $renderer->render( $module, $options );
		
		$module	 = JModuleHelper::getModule( 'mod_mainmenu' );
		$module->params	= "menutype=$menu_name\nstartLevel=2\nendLevel=9\nclass_sfx";
		$options = array( 'style' => "submenu");
		$sidenav = $renderer->render( $module, $options );
	elseif ($mtype=="moomenu" or $mtype=="suckerfish") :
		$module->params	= "menutype=$menu_name\nshowAllChildren=1\nclass_sfx=top";
		$topnav = $renderer->render( $module, $options );
	endif;

endif;

// make sure subnav is empty
if (strlen($subnav) < 10) $subnav = false;
//Are we in edit mode
$editmode = false;
if (JRequest::getCmd('task') == 'edit' ) :
	$editmode = true;
endif;

$mainmod_count = ($this->countModules('user1')>0) + ($this->countModules('user2')>0) + ($this->countModules('user3')>0);
$mainmod_width = $mainmod_count > 0 ? ' w' . floor(99 / $mainmod_count) : '';
$s3mod_count = ($this->countModules('user4')>0) + ($this->countModules('user5')>0) + ($this->countModules('user6')>0);
$s3mod_width = $s3mod_count > 0 ? ' w' . floor(99 / $s3mod_count) : '';
$s4mod_count = ($this->countModules('user7')>0) + ($this->countModules('user8')>0) + ($this->countModules('user9')>0);
$s4mod_width = $s4mod_count > 0 ? ' w' . floor(99 / $s4mod_count) : '';
$s5mod_count = ($this->countModules('user10')>0) + ($this->countModules('user11')>0) + ($this->countModules('user12')>0);
$s5mod_width = $s5mod_count > 0 ? ' w' . floor(99 / $s5mod_count) : '';

$leftcolumn_width = ($this->countModules('left')>0 or ($sidenav and $splitmenu_col=="leftcol")) ? $leftcolumn_width : "0";
$rightcolumn_width = ($this->countModules('right')>0 or ($sidenav and $splitmenu_col=="rightcol")) ? $rightcolumn_width : "0";
$inset_width = ($this->countModules('inset')>0) ? $inset_width : "0";
$template_width = 'margin: 0 auto; width: ' . $template_width . 'px;';

$template_path = $this->baseurl . "/templates/" . $this->template;

function rok_isIe7() {
	$agent=$_SERVER['HTTP_USER_AGENT'];
	if (stristr($agent, 'msie 7')) return true;
	return false;
}

function rok_isIe6() {
	$agent=$_SERVER['HTTP_USER_AGENT'];
	if (stristr($agent, 'msie 6')) return true;
	return false;
}

?>