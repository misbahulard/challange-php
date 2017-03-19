<?php

	/* Your own simple template engine
	 * it's good to separate php logic from html
	 * that's why using template engine is considered best practice
	 * */
	
	$now = date('Y-m-d'); // get today's date
	$html = file_get_contents('workshop.html'); // get html content from other file
	$html = str_replace('{{date}}', $now, $html); // replace {{date}} with our $now variable
	$html = str_replace('{{member1}}', "Yaqien", $html); // replace {{member1}} with Yaqien's name
	$html = str_replace('{{member2}}', "Gema", $html); // replace {{member2}} with Gema's name
	
	echo $html;
?>
