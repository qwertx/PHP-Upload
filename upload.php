<html>
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
		<title>qwertload</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<ul class="navbar">
			<li class="navbar-element"><a class="no-link" href="index.php">Home</a></li>
			<li class="navbar-element"><a class="no-link" href="list.php">List Files</a></li>
			<li class="navbar-element"><a class="no-link" href="about.html">About</a></li>
		</ul>

		<h1 class="title">qwertload</h1>
		<?php
			if ($upload_sucessfull = 1) {
				echo'
					<div class="header">
						<p class="text" style="text-align: center;">The Upload has finished.</p>
						<p class="text" style="text-align: center;">You can access the file <a class="no-link" href="view.php?id=' . $filecount . "." . $extension .'">here</a>.</p>
					</div>
					<div class="block full-width">
				';

					//Preview all the things!
				include 'preview.php';

				echo'
					</div>
				';
				echo'
					<br><br><a class="button" href="storage/' . $filecount . "." . $extension . '" download>Click here to download your File</a>
				';
			}
			else {
				echo 'Errors happened!';
			}
		?>
		<footer>
			<p class="left text">Made by <a class="no-link" href="http://www.twitter.com/qwertxzy">qwertxzy</a></p>
		</footer>
	</body>
</html>
