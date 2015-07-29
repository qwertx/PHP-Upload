<?php

	// post_max_size and upload_max_size in php.ini were set to 32M

try {
	
	//Ceck if file is existent
	if (!isset($_FILES['file'])) {
		throw new Exception("Something went wrong.");
	}
	
	//Check Filesize
	if($_FILES['file']['size'] > 1073741824) {
		throw new Exception('Selected file too large!');
	}
	
	//Define Upload Directory
	$uploaddir = __DIR__ . '\\storage\\';
  
	//Counts existing Files in Directory
	$files = scandir($uploaddir);
	$filecount = count($files) - 2;
	
	//Gets File Extension, thanks Quad (Fuck your policies I'm Snoop Dogg)
	$extension = explode('.', $_FILES['file']['name']);
	$extension = strtolower(end($extension));
	
	//Stick it all together
	$uploadfile = $uploaddir . $filecount . "." . $extension;
	
	//Move uploaded File
	if (!move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
		throw new Exception("File movement went wrong, did you pick a file?");
		$upload_sucessfull = 0;
	}
}
//Magic Exception thing I didn't fully understand yet
catch (Exception $e) {
	echo $e->getMessage();
}
?>
<head>
	<title>Upload finished!</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
		if ($upload_sucessfull = 1) {
			echo'
				<div class="header">
					<h1 class="title">Your Upload has probably finished</h1>
					<p class="sidenote">only unless there are no error stated below or above</p>
				</div>
				<div class="block full-width">
			';
			
				//Preview all the things!
			switch($extension) {
				case 'jpg':
				case 'png':
				case 'jpeg':
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
							This Filetype is not supported yet, please contact me via Twitter (<a style="text-decoration: none; color: #34495e;" href="www.twitter.com/qwertxzy">@qwertxzy</a>) if you want it to be added <br> <br> <br>
						</p>
					';
			}
			echo' 
				<a class="button" href="storage/' . $filecount . "." . $extension . '" download>Click here to download your File</a>
			';	
			echo' 
				</div>
			';
		}
		else {
			echo 'Errors happened!';
		}
	?>
</body>