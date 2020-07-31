<?php
	include("check.php");	
?>
 
<!doctype html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>The wall project Nick Deenik</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<script src="js/modernizr.custom.js"></script>
				<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/toucheffects.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
	</head>
	<body>
		<div class="wrapper">
        	<div class="nieuws">
                <ul class="knoppen">
                    <li id="home" class="actief"><a href="#1">The wall</a></li>
                    <li><a href="#2">Upload</a></li>
					<li id="search"><a href="#4">Search</a></li>
					<li><a href="#3">Logout</a></li>
                </ul>
				<br>
                <div id="1" class="paneel actief">
					<div class="wall">
					<h1>Image wall</h1>
					<?php
					include("images.php");
					?>
					</div>
                </div>
				<div id="2" class="paneel">
					<div class="upload">
					<h1>Upload your images</h1>
					<form action="upload.php" method="post" enctype="multipart/form-data">
    					Title:
						<input type="text" name="title" required="required "/>
						<br>
						Description:
						<input type="text" name="description" required="required "/>
						<br>
						Tag:
						<input type="text" name="tag" required="required "/>
						<br>
						Select image to upload:
    					<input type="file" name="fileToUpload" id="fileToUpload">
    					<input type="submit" value="Upload Image" name="submit">
					</form>
					</div>
                </div>
				<div id="3" class="paneel">
					<div class="logout">
						<h1>Logout</h1>
						<br>
						<a href="logout.php" style="font-size:18px">Logout?</a>
					</div>
				</div>
				<div id="4" class="paneel">
					<h1>Search the wall</h1>
					<?php include("image_search.php"); ?>
				</div>
        	<div class="push"></div>
    	</div>
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="js/tabPaneel.js"></script>
	</body>
</html>