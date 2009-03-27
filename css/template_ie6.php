<?php header("Content-type: text/css"); ?>
<?php
$template_path = dirname( dirname( $_SERVER['SCRIPT_NAME'] ) );
?>
/** IE6 is a hunk of crap!!! due to limitations in the CSS capabilities of IE, these hacks are required **/

#ff-optima h1,#ff-optima h2,#ff-optima h3,#ff-optima h4,#ff-optima h5,#ff-optima h6, #ff-lucida h1,#ff-lucida h2,#ff-lucida h3,#ff-lucida h4,#ff-lucida h5,#ff-lucida h6 {letter-spacing: -0.07em;}
body#ff-optima, body#ff-lucida {letter-spacing: -0.03em;}
body#ff-georgia, body#ff-georgia.f-default {font-size: 12px;}
.menu span {cursor:pointer;}

#horiz-menu, .main-column-middle, .main-column-right, .main-column-left, .rightmod1, .rightmod2, .leftmod1, .leftmod2, #horiz-menu.splitmenu li.active a, #horiz-menu.splitmenu li.active, #horiz-menu.splitmenu li.active a, #horiz-menu.splitmenu li.active .separator, #horiz-menu.splitmenu li.active, #horiz-menu.splitmenu li.active span, #horiz-menu li.active a, #horiz-menu li.active .separator, #horiz-menu li.active, #horiz-menu li.active span, .showcase, .showcase-top, .showcase-top2, .showcase-top3, .showcase-left, .showcase-right, .showcase-bottom, .showcase-bottom2, .showcase-bottom3, #news-rotator .divider, div.shield, #main-content2, #sub-bar, #sub-menu, #section-two .top {zoom:1;}

img#logo {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path; ?>/images/logo.png', sizingMethod='crop');
   	background-image: none;
	zoom: 1;
}

.showcase-top, .showcase-top2, .showcaes-top3, .showcase-bottom, .showcase-bottom2, .showcase-bottom3 {line-height: 0; font-size: 0;}

a#active_menu.sublevel {font-weight:bold;}
#horiz-menu li.active span, #sub-menu li span {display: inline;}
#horiz-menu li.active {margin-bottom: -10px;}
#sub-menu {height: 34px;}
#sub-bar {font-size:0;}
#sub-menu {padding-top:5px;}
#sub-menu a, #sub-menu li.active a {height: 34px;line-height: 34px;}
div.promo {width: 444px;height: 274px;}
#sl_vert #sl_submitbutton input.button { padding: 0 6px;}
#sl_vert #sl_pass input#mod_login_password {margin-top: 0;}
#sl_lostpass, #sl_register {margin-right: 10px;margin-top: 0;}
#sl_pass {height: 20px;}
#news-rotator .image {left: 0;}
.moduletable-sidemenu table div {height: 20px;margin-top: 5px;margin-bottom: 5px;}

/* ie6 warning */
#iewarn {background: #C6D3DA url(../images/error.png) 10px 20px no-repeat;position: relative;z-index: 1;opacity: 0;margin: -150px auto 0;font-size: 110%;color: #001D29;z-index: 8000;}
#iewarn div {position: relative;border-top: 5px solid #95B8C9;border-bottom: 5px solid #95B8C9;padding: 10px 80px 10px 220px;	}
#iewarn h4 {color: #900;font-weight: bold;line-height: 120%;}
#iewarn a {color: #296AC6;font-weight: bold;}
#iewarn_close {background: url(../images/close.png) 50% 50% no-repeat;display: block;cursor: pointer;position: absolute;width: 61px;height: 21px;top: 25px;right: 12px;}
#iewarn_close.cHover {background: url(../images/close_hover.png) 50% 50% no-repeat;}
/* end ie6 warning */

/*
   NEW PURE CSS PNG FIX SOLUTION  
   use class="png" to implement 
*/

html .png,
div .png {
	azimuth: expression(
		this.pngSet?this.pngSet=true:(this.nodeName == "IMG" && this.src.toLowerCase().indexOf('.png')>-1?(this.runtimeStyle.backgroundImage = "none",
		this.runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + this.src + "', sizingMethod='image')",
		this.src = "<?php echo $template_path; ?>/images/blank.gif"):(this.origBg = this.origBg? this.origBg :this.currentStyle.backgroundImage.toString().replace('url("','').replace('")',''),
		this.runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + this.origBg + "', sizingMethod='crop')",
		this.runtimeStyle.backgroundImage = "none")),this.pngSet=true
	);
}

/* page peel overrides for demo site */
a.fliptip {display: block;z-index: 100000;position: relative;}