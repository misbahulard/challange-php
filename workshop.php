<?php

	/* Your own simple template engine
	 * it's good to separate php logic from html
	 * that's why using template engine is considered best practice
	 * */
	
	
	
	if(isset($_GET['nama'])){
		$nama = $_GET['nama'];
		$date = date('d-m-Y'); // get today's date
		$time = time('h:m:s'); // get today's date
		$html = file_get_contents('workshop-result.html'); // get html content from other file
		$html = str_replace('{{date}}', $date, $html); // replace {{date}} with our $now variable
		$html = str_replace('{{time}}', $time, $html); // replace {{date}} with our $now variable
		$html = str_replace('{{nama}}', $nama, $html); // replace {{date}} with our $now variable
	
	}
	
	echo $html;
?>
