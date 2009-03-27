window.addEvent('domready', function() {
	var x = 0, y = 0, offset = 0, child = 0, horiznav = $('horiznav') || $$('#horiz-menu2 .menutop')[0] || null;
		
	if ($('horiznav') && $('horiz-menu2')) {
		var topnav = horiznav.getChildren();

		if (topnav.length) {
			x += horiznav.getCoordinates().width + $('horiz-menu2').getStyle('margin-left').toInt() + $('horiz-menu2').getStyle('margin-right').toInt() + $('horiz-menu2').getStyle('padding-left').toInt() + $('horiz-menu2').getStyle('padding-right').toInt();

			$('horiz-menu').setStyles({'position': '', 'width': x});
		};
	
	}
	
	var block = $$('#bottommodules2 div.block');
	if (block.length) {
		block[0].setStyle('border-left', '0pt none');
	}
});