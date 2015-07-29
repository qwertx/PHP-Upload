<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<div class="header">
			<h1 class="title">View</h1>
		</div>
		
		<div class="block full-width">
			<?php 
				if (isset($_GET['id'])) {
					$id = htmlspecialchars($_GET['id']);
					$info = explode(".", $id);
					$filecount = $info[0];
					$extension = $info[1];
					include 'preview.php';
					
					echo' 
						<br><br><a class="button" href="storage/' . $filecount . "." . $extension . '" download>Click here to download your File</a>
					';
				}
				else {
					echo' 
						<p class="text">Either the Link is broken or the file you requested is not on the server</p>
					';
				}
			?>
		</div>
		<footer>
			<p class="left text">Made by <a class="no-link" href="http://www.twitter.com/qwertxzy">qwertxzy</a></p>
		</footer>
	</body>
</html>