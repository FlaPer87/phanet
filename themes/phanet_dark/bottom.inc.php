<?php

function showThemeBottom() {
	/*
	$output[] = '<div id="site_bottom">Phanet does not generate contents each post belongs to the author.<br/>';
	$output[] = '© 2008 - <a href="http://www.phanet.net" >Phanet</a> is under GPLv2</div>';
	$output[] = '</div>';//-->content
	$output[] = '</div>';//-->site
	$output[] = '</body>';
	$output[] = '</html>'; */
	
	$output[] = require('child_theme/footer.php');
	
	echo join("\n", $output);
}
