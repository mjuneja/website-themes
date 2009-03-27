<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
require( YOURBASEPATH.DS."rt_styleswitcher.php");
JHTML::_( 'behavior.mootools' );
								
	$live_site        			= $mainframe->getCfg('live_site');
	$template_path 				= $this->baseurl . '/templates/' .  $this->template;
	$default_style 				= $this->params->get("defaultStyle", "style1");
	$enable_ie6warn             = ($this->params->get("enableIe6warn", 1)  == 0)?"false":"true";
	$font_family                = $this->params->get("fontFamily", "default");
	$template_width 			= $this->params->get("templateWidth", "962");
	$leftcolumn_width			= $this->params->get("leftcolumnWidth", "250");
	$rightcolumn_width			= $this->params->get("rightcolumnWidth", "250");
	$inset_width				= $this->params->get("insetWidth", "200");
	$splitmenu_col				= $this->params->get("splitmenuCol", "rightcol");
	$menu_name 					= $this->params->get("menuName", "mainmenu");
	$menu_type 					= $this->params->get("menuType", "moomenu");
	$default_font 				= $this->params->get("defaultFont", "default");
	$show_breadcrumbs 			= ($this->params->get("showBreadcrumbs", 0)  == 0)?"false":"true";
	$show_logo		 			= ($this->params->get("showLogo", 1)  == 0)?"false":"true";
	$show_copyright 			= ($this->params->get("showCopyright", 1)  == 0)?"false":"true";
	$show_frontpage_content 	= ($this->params->get("showFrontpageContent", 0)  == 0)?"false":"true";
	
	// moomenu options
	$moo_bgiframe     			= ($this->params->get("moo_bgiframe'","0") == 0)?"false":"true";
	$moo_delay       			= $this->params->get("moo_delay", "500");
	$moo_duration    			= $this->params->get("moo_duration", "600");
	$moo_fps          			= $this->params->get("moo_fps", "200");
	$moo_transition   			= $this->params->get("moo_transition", "Sine.easeOut");	
	
	require(YOURBASEPATH . DS . "rt_styleloader.php");
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
	<jdoc:include type="head" />
	<?php
	require(YOURBASEPATH . DS . "rt_utils.php");
	require(YOURBASEPATH . DS . "rt_head_includes.php");

?>
</head>
	<body id="ff-<?php echo $fontfamily; ?>" class="<?php echo $fontstyle; ?> iehandle">
		<div id="page-bg">
			<?php if ($this->countModules('banner')) : ?>
			<div id="top-banner">
				<div class="wrapper">
					<jdoc:include type="modules" name="banner" style="xhtml" />
				</div>
			</div>
			<?php endif; ?>
			<!-- Begin Header -->
			<div id="header">
				<div class="wrapper">
					<?php if($mtype != "splitmenu") : ?>
					<div class="padding">
					<?php endif; ?>
						<?php if($show_logo == "true") : ?>
							<a href="<?php echo $this->baseurl; ?>" class="nounder"><img src="<?php echo $template_path; ?>/images/blank.gif" border="0" alt="" id="logo" /></a>
						<?php else: ?>
							<div class="logo-module">
								<jdoc:include type="modules" name="icon" style="xhtml" />
							</div>
						<?php endif; ?>
						<div id="topmod">
							<jdoc:include type="modules" name="top" style="xhtml" />
						</div>
						<div class="clr"></div>
						<!-- Begin Horizontal Menu -->
						<?php if($mtype == "splitmenu") : ?>
						<div id="menu-surround">
							<div id="menu-surround2">
								<div id="horiz-menu" class="<?php echo $mtype; ?>">
									<?php echo $topnav; ?>
								</div>
								<?php if($subnav == "0") : ?>
								<div id="sub-bar"></div>
								<?php else: ?>
								<div id="sub-menu">
									<?php echo $subnav; ?>
								</div>
								<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if($mtype == "moomenu" or $mtype == "suckerfish") : ?>
							<div class="menu-surround">
								<div id="horiz-menu" class="<?php echo $mtype; ?>">
									<?php echo $topnav; ?>
								</div>
							</div>
						<?php endif; ?>
						<?php if($mtype == "module") : ?>
							<div class="menu-surround">
								<div id="horiz-menu" class="<?php echo $mtype; ?>">
									<jdoc:include type="modules" name="toolbar" style="none" />
								</div>
							</div>
						<?php endif; ?>
					<?php if($mtype != "splitmenu") : ?>
					</div>
					<?php endif; ?>
					<!-- End Horizontal Menu -->
				</div>
			</div>
			<div class="clr"></div>
			<!-- End Header -->
			<!-- Begin Section One -->
			<?php if ($this->countModules('user1') or $this->countModules('user2') or $this->countModules('user3')) : ?>
			<div id="section-one">
				<div class="wrapper">
					<div class="showcase-top"><div class="showcase-top2"><div class="showcase-top3"></div></div></div>
					<div class="showcase-left"><div class="showcase-right"><div class="showcase">
						<div id="mainmodules" class="spacer<?php echo $mainmod_width; ?>">
							<?php if ($this->countModules('user1')) : ?>
								<div class="block">
									<jdoc:include type="modules" name="user1" style="rounded" />
								</div>
							<?php endif; ?>
							<?php if ($this->countModules('user2')) : ?>
								<div class="block">
									<jdoc:include type="modules" name="user2" style="rounded" />
								</div>
							<?php endif; ?>
							<?php if ($this->countModules('user3')) : ?>
								<div class="block">
									<jdoc:include type="modules" name="user3" style="rounded" />
								</div>
							<?php endif; ?>
						</div>
					</div></div></div>
					<div class="showcase-bottom"><div class="showcase-bottom2"><div class="showcase-bottom3"></div></div></div>
				</div>
			</div>
			<?php endif; ?>
			<!-- End Section One -->
			<!-- Begin Section Two -->
			<div id="section-two">
				<div class="top">
					<?php if ($this->countModules('search') or $this->countModules('advert1')) : ?>
						<div class="top2">
							<div class="wrapper">
								<div class="column2">
									<div class="padding">
										<?php if ($this->countModules('search')) : ?>
											<div id="searchmod">
												<jdoc:include type="modules" name="search" style="xhtml" />
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="column1">
									<div class="padding">
										<?php if ($this->countModules('advert1')) : ?>
											<div id="advert">
												<jdoc:include type="modules" name="advert1" style="xhtml" />
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<div class="clr"></div>
				<div id="section-two-main">
					<div class="wrapper">
						<!-- Begin Right Column -->
						<?php if (($sidenav and $splitmenu_col=="rightcol") or $this->countModules('right') or $this->countModules('right2') or $this->countModules('right3')) : ?>
						<div class="main-column-right">
							<div class="padding">
								<?php if($sidenav and $splitmenu_col=="rightcol") : ?>
									<div id="side-menu"><div class="rightmod-top1"><div class="rightmod-top2"><div class="rightmod-top3"></div></div></div>
									<div class="rightmod1"><div class="rightmod2"><?php echo $sidenav; ?></div></div>
									<div class="rightmod-bottom1"><div class="rightmod-bottom2"><div class="rightmod-bottom3"></div></div></div></div>
								<?php endif; ?>
								<?php if ($this->countModules('right')) : ?>
									<div class="rightmod-top1"><div class="rightmod-top2"><div class="rightmod-top3"></div></div></div>
									<div class="rightmod1"><div class="rightmod2"><jdoc:include type="modules" name="right" style="xhtml" /></div></div>
									<div class="rightmod-bottom1"><div class="rightmod-bottom2"><div class="rightmod-bottom3"></div></div></div>
								<?php endif; ?>
								<?php if ($this->countModules('right2')) : ?>
									<div class="rightmod-top1"><div class="rightmod-top2"><div class="rightmod-top3"></div></div></div>
									<div class="rightmod1"><div class="rightmod2"><jdoc:include type="modules" name="right2" style="xhtml" /></div></div>
									<div class="rightmod-bottom1"><div class="rightmod-bottom2"><div class="rightmod-bottom3"></div></div></div>
								<?php endif; ?>
								<?php if ($this->countModules('right3')) : ?>
									<div class="rightmod-top1"><div class="rightmod-top2"><div class="rightmod-top3"></div></div></div>
									<div class="rightmod1"><div class="rightmod2"><jdoc:include type="modules" name="right3" style="xhtml" /></div></div>
									<div class="rightmod-bottom1"><div class="rightmod-bottom2"><div class="rightmod-bottom3"></div></div></div>
								<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						<!-- End Right Column -->
						<!-- Begin Left Column -->
						<?php if (($sidenav and $splitmenu_col=="leftcol") or $this->countModules('left') or $this->countModules('left2') or $this->countModules('left3')) : ?>
						<div class="main-column-left">
							<div class="padding">
								<?php if($sidenav and $splitmenu_col=="leftcol") : ?>
									<div id="side-menu"><div class="leftmod-top1"><div class="leftmod-top2"><div class="leftmod-top3"></div></div></div>
									<div class="leftmod1"><div class="leftmod2"><?php echo $sidenav; ?></div></div>
									<div class="leftmod-bottom1"><div class="leftmod-bottom2"><div class="leftmod-bottom3"></div></div></div></div>
								<?php endif; ?>
								<?php if ($this->countModules('left')) : ?>
									<div class="leftmod-top1"><div class="leftmod-top2"><div class="leftmod-top3"></div></div></div>
									<div class="leftmod1"><div class="leftmod2"><jdoc:include type="modules" name="left" style="xhtml" /></div></div>
									<div class="leftmod-bottom1"><div class="leftmod-bottom2"><div class="leftmod-bottom3"></div></div></div>
								<?php endif; ?>
								<?php if ($this->countModules('left2')) : ?>
									<div class="leftmod-top1"><div class="leftmod-top2"><div class="leftmod-top3"></div></div></div>
									<div class="leftmod1"><div class="leftmod2"><jdoc:include type="modules" name="left2" style="xhtml" /></div></div>
									<div class="leftmod-bottom1"><div class="leftmod-bottom2"><div class="leftmod-bottom3"></div></div></div>
								<?php endif; ?>
								<?php if ($this->countModules('left3')) : ?>
									<div class="leftmod-top1"><div class="leftmod-top2"><div class="leftmod-top3"></div></div></div>
									<div class="leftmod1"><div class="leftmod2"><jdoc:include type="modules" name="left3" style="xhtml" /></div></div>
									<div class="leftmod-bottom1"><div class="leftmod-bottom2"><div class="leftmod-bottom3"></div></div></div>
								<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						<!-- End Left Column -->
						<!-- Begin Middle Column -->
						<div class="main-column-middle">
							<?php if ($this->countModules('header')) : ?>
								<div class="main-column-header1">
									<div class="main-column-header2">
										<div id="main-column-header">
											<jdoc:include type="modules" name="header" style="xhtml" />
										</div>
									</div>
								</div>
							<?php endif; ?>
							<?php if ($this->countModules('header2')) : ?>
							<div id="main-column-header2">
								<div class="showcase-top"><div class="showcase-top2"><div class="showcase-top3"></div></div></div>
								<div class="showcase-left"><div class="showcase-right"><div class="showcase">
										<jdoc:include type="modules" name="header2" style="xhtml" />
								</div></div></div>
								<div class="showcase-bottom"><div class="showcase-bottom2"><div class="showcase-bottom3"></div></div></div>
							</div>
							<?php if ($this->countModules('header2') and (JRequest::getVar('view') != 'frontpage') or $show_frontpage_content=="true") : ?>
							<div class="main-content-arrow"></div>
							<?php endif; ?>
							<?php endif; ?>
							<?php if (JRequest::getVar('view') != 'frontpage' or $show_frontpage_content=="true") : ?>
							<div id="main-content">
								<?php if ($show_breadcrumbs == "true") : ?>
									<div id="pathway">
										<jdoc:include type="module" name="breadcrumbs" style="none" />
									</div>
								<?php endif; ?>
								<?php if ($this->countModules('newsflash')) : ?>
									<div id="newsflash">
										<div class="padding">
											<jdoc:include type="modules" name="newsflash" style="xhtml" />
										</div>
									</div>
								<?php endif; ?>
								<?php if ($this->countModules('inset')) : ?>
								<div id="inset">
									<div class="padding">
										<jdoc:include type="modules" name="inset" style="xhtml" />
									</div>
								</div>
								<?php endif; ?>
								<div id="main-content2">
									<div class="padding">
										<jdoc:include type="message" />
										<jdoc:include type="component" />
									</div>
								</div>
								<?php if ($this->countModules('advert2')) : ?>
									<div id="advert-bottom">
										<div class="padding">
											<jdoc:include type="modules" name="advert2" style="xhtml" />
										</div>
									</div>
								<?php endif; ?>
							</div>
							<?php endif; ?>
							<div class="clr"></div>
						</div>
						<!-- End Middle Column -->
					</div>
				</div>
				</div>
			</div>
			<!-- End Section Two -->
			<!-- Begin Section Three -->
			<?php if ($this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
			<div id="section-three-top"></div>
			<div id="section-three">
				<div id="section-three2">
					<div class="wrapper">
						<div id="s3modules" class="spacer<?php echo $s3mod_width; ?>">
							<?php if ($this->countModules('user4')) : ?>
								<div class="block">
									<jdoc:include type="modules" name="user4" style="rounded" />
								</div>
							<?php endif; ?>
							<?php if ($this->countModules('user5')) : ?>
								<div class="block">
									<jdoc:include type="modules" name="user5" style="rounded" />
								</div>
							<?php endif; ?>
							<?php if ($this->countModules('user6')) : ?>
								<div class="block">
									<jdoc:include type="modules" name="user6" style="rounded" />
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<!-- End Section Three -->
			<!-- Begin Section Four -->
			<?php if ($this->countModules('user7') or $this->countModules('user8') or $this->countModules('user9')) : ?>
			<div id="section-four">
				<div id="section-four2">
					<?php if ($this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
					<div id="section-three-bottom"></div>
					<?php endif; ?>
					<div class="wrapper">
						<div id="s4modules" class="spacer<?php echo $s4mod_width; ?>">
							<?php if ($this->countModules('user7')) : ?>
								<div class="block">
									<jdoc:include type="modules" name="user7" style="rounded" />
								</div>
							<?php endif; ?>
							<?php if ($this->countModules('user8')) : ?>
								<div class="block">
									<jdoc:include type="modules" name="user8" style="rounded" />
								</div>
							<?php endif; ?>
							<?php if ($this->countModules('user9')) : ?>
								<div class="block">
									<jdoc:include type="modules" name="user9" style="rounded" />
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<div class="clr"></div>
			<!-- End Section Four -->
			<!-- Begin Section Five -->
			<?php if (($show_copyright == "true") or $this->countModules('bottom') or $this->countModules('user10') or $this->countModules('user11') or $this->countModules('user12')) : ?>
				<div id="bottom-menu">
					<div class="wrapper">
						<jdoc:include type="modules" name="bottom" style="xhtml" />
					</div>
				</div>
				<div id="section-five">
					<div id="section-five2">
						<div class="wrapper">
							<div id="s5modules" class="spacer<?php echo $s5mod_width; ?>">
								<?php if ($this->countModules('user10')) : ?>
									<div class="block">
										<jdoc:include type="modules" name="user10" style="rounded" />
									</div>
								<?php endif; ?>
								<?php if ($this->countModules('user11')) : ?>
									<div class="block">
										<jdoc:include type="modules" name="user11" style="rounded" />
									</div>
								<?php endif; ?>
								<?php if ($this->countModules('user12')) : ?>
									<div class="block">
										<jdoc:include type="modules" name="user12" style="rounded" />
									</div>
								<?php endif; ?>
							</div>
							<?php if ($show_copyright == "true") : ?>
								<div class="copyright">
									<p>&copy; 2009 Vinsol. All rights reserved. valid XHTML and CSS</p>
								</div>
							<?php else: ?>
								<div class="footer-mod">
									<jdoc:include type="modules" name="footer" style="xhtml" />
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<!-- End Section Five -->
			<jdoc:include type="modules" name="debug" style="none" />
		</div>
	</body>
</html>