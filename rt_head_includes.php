<?php

// This information has been pulled out of index.php to make the template more readible.
//
// This data goes between the <head></head> tags of the template

?>

<link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/images/favicon.ico" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/template_css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/<?php echo $tstyle; ?>.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl ?>/templates/system/css/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl ?>/templates/system/css/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/typography.css" rel="stylesheet" type="text/css" />
<?php if($mtype=="moomenu" or $mtype=="suckerfish") :?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/rokmoomenu.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<style type="text/css">
	div.wrapper { <?php echo $template_width; ?>padding:0;}
	div.main-column-left { width:<?php echo $leftcolumn_width; ?>px;padding:0;}
	div.main-column-right { width:<?php echo $rightcolumn_width; ?>px;padding:0;}
	div.main-column-middle { margin-left:<?php echo $leftcolumn_width; ?>px;margin-right:<?php echo $rightcolumn_width; ?>px;padding:0;}
	#main-content2 { margin-right:<?php echo $inset_width; ?>px;padding:0;}
	#inset { width:<?php echo $inset_width; ?>px;padding:0;}
</style>	
<?php if (rok_isIe7()) :?>
<!--[if IE 7]>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/template_ie7.css" rel="stylesheet" type="text/css" />	
<![endif]-->	
<?php endif; ?>
<?php if (rok_isIe6()) :?>
<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/template_ie6.php" rel="stylesheet" type="text/css" />
<![endif]-->
<?php endif; ?>
<?php if (rok_isIe6()) : ?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/rokiefix.js"></script>
<?php endif; ?> 
<?php if(rok_isIe6() and $enable_ie6warn=="true") : ?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/rokie6warn.js"></script>
<?php endif; ?>
<?php if($mtype=="moomenu") :?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/rokmoomenu.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/mootools.bgiframe.js"></script>
<script type="text/javascript">
window.addEvent('domready', function() {
	new Rokmoomenu($E('ul.menutop '), {
		bgiframe: <?php echo $moo_bgiframe; ?>,
		delay: <?php echo $moo_delay; ?>,
		animate: {
			props: ['width', 'opacity'],
			opts: {
				duration:<?php echo $moo_duration; ?>,
				fps: <?php echo $moo_fps; ?>,
				transition: Fx.Transitions.<?php echo $moo_transition; ?>
			}
		}
	});
});
</script>
<?php endif; ?>
<?php if((rok_isIe6() or rok_isIe7()) and ($mtype=="suckerfish" or $mtype=="splitmenu")) :
  echo "<script type=\"text/javascript\" src=\"" . $this->baseurl . "/templates/" . $this->template . "/js/ie_suckerfish.js\"></script>\n";
endif; ?>