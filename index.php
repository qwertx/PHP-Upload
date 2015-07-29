<head>
		<title>Upload a file!</title>
		<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="header">
		<h1 class="title">Upload!</h1>
	</div>
	<div class="block right">
		<p class="text">
			This is some kind of upload-ish piece of site that will do nothing. <br>
			Also this paragraph is here for nothing.
		</p>
	</div>
	<div class="block left">
		<form id="form" action="upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file" id="filepicker"> <br>
			<input type="submit" name="uploadbutton" id="submitbutton" value="Upload">
		</form>
	</div>
</body>