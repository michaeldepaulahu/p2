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
<link href='https://fonts.googleapis.com/css?family=Special+Elite|Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
<!--JS-->
<script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
    <div class="container-fluid">     
        <!--header-->
        <header>
            <div class="row thumb1">
                <div class="col-lg-12 text-center">
                    <p class="title">xkcd Password Generator</p>
                        <form method='POST' action='index_placeholder.php' class="form-inline">
                            <div class="form-group">
                                <label>Number of Words</label>
                                <input type="text" class="form-control" placeholder="#" name='words'>
                            </div>
                            <div class="form-group">
                                <label>Separator</label>
                                <input type="text" class="form-control" placeholder="-" name='delimiter'>
                            </div>
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" name="checkbox"> Add a number
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" name="symbols"> Add a symbol
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                <input type="radio" name="firstcase"> First letter uppercase
                                </label>
                            </div>  
                            <div class="checkbox">
                                <label>
                                <input type="radio" name="uppercase"> All uppercase
                                </label>
                            </div>                       
                                <button type="submit" class="btn btn-default">Submit</button>
                        </form>                                        
                </div>
            </div>
       </header>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 main">
                <div class="generate text-center"><?php require('logic.php');  $process = new GenProc1(); ?></div>
                <div class="text-center"><img src="img/1.png"></div>
            </div>
        </div>       
       </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>