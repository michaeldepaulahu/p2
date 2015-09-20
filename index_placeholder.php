<?php 


	
	
require('logic.php'); 
$process = new GenProc1();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>P2 - Home</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="michaeldepaula">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<!--JS-->
<script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
    <div class="container-fluid"> 
    	<p>xkcd Password Generator</p>
        <form method='POST' action='index_placeholder.php'>
            <label>Number of Words</label><input type='text' name='words'><br>
            <label>Add a number</label><input type="checkbox" name="checkbox"><br> 
            <label>Add a symbol</label><input  type="checkbox" name='symbols'><br>
            <input type='submit' value='generate'>
        </form>     
	</div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>