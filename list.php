<html>
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
    <p class="text" style="text-align:center">Just click on a picture to open up it's page</p>
    <div class="grid">
      <?php
        $dir = scandir('storage');
        for ($i=2; $i <= sizeof($dir) - 2; $i++) {
          $info = explode(".", $dir[$i]);
          $filecount = $info[0];
          $extension = $info[1];
          print('
			<a class="no-link" href="view.php?id=' . $filecount . '.' . $extension . '">    
				<div class="card"> 
          ');
          include 'preview.php';
          print('
				</div>
			</a>
          ');
        }
      ?>
   </div>
   </body>
</html>
