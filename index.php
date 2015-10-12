<head>
		<title>qwertload</title>
		<link rel="stylesheet" href="style.css">
</head>

<body>
	<ul class="navbar">
		<li class="navbar-element"><a class="no-link" href="list.php">List Files</a></li>
		<li class="navbar-element"><a class="no-link" href="index.php">Home</a></li>
		<li class="navbar-element"><a class="no-link" href="about.html">About</a></li>
	</ul>
	<div class="header">
		<h1 class="title">qwertload</h1>
	</div>
	<div class="block right">
		<p class="text">
			This is some kind of upload-ish piece of site that nobody will ever use. <br>
			Anyway if you do, please don't upload childporn or other illegal stuff, I take no responsibility.
		</p>
	</div>
	<div class="block left">
		<form id="form" action="upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file" id="filepicker"> <br>
			<input type="submit" name="uploadbutton" id="submitbutton" value="Upload">
		</form>

	</div>

	<footer>
		<p class="left text">Made by <a class="no-link" href="http://www.twitter.com/qwertxzy">qwertxzy</a></p>
	</footer>
</body>
