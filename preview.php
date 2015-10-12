<?php
	switch($extension) {
		case 'jpg':
		case 'png':
		case 'jpeg':
		case 'gif':
			echo'<img src="storage/' . $filecount . "." . $extension . '" alt="something is wrong here">';
			break;
		case 'mp3':
		case 'ogg':
		case 'wav':
			echo'
				<audio controls>
					<source src="storage/' . $filecount . "." . $extension . '">
					Your browser magically does not support audio tags, faggot
				</audio>
			';
			break;
		case 'webm':
		case 'mp4':
		case 'flv':
			echo'
				<video controls>
					<source src="storage/' . $filecount . "." . $extension . '">
				</video>
			';
			break;
		default:
			echo '
				<p class="text">
					The Filetype ' . $extension . ' is not supported yet, please contact me via Twitter (<a style="text-decoration: none; color: #34495e;" href="www.twitter.com/qwertxzy">@qwertxzy</a>) if you want it to be added <br> <br> <br>
				</p>
			';
	}
?>
