<?php 
require('logic.php');
$process = new GenProc1('words');

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
<link href='https://fonts.googleapis.com/css?family=Special+Elite|Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
<!--JS-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
    <div class="container-fluid">     
        <!--header-->
        <header>
            <div class="row thumb1 text-center">
                <div class="col-lg-12">
                    <p class="title">xkcd Password Generator</p>
                        <form method='POST' action='index_placeholder.php' class="form-inline">
                            <div class="form-group" id="words-group">
                                <label>Number of Words (Max. 9)</label>
                                <input type="text" class="form-control" name='words' id='words' value="<?php echo $_SESSION['nW']; ?>" maxlength="1">
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
                                <input type="checkbox" name="firstcase"> First letter uppercase
                                </label>
                            </div>  
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" name="uppercase"> All uppercase
                                </label>
                            </div><br>             
                            <div class="form-group">
                                <label>Separator</label>
                                <!--<input type="text" class="form-control" placeholder="-" name='delimiter'>-->
                                <input type="hidden" class="form-control" name='delimiter' id='delimiter' value="">
                                <button class="btn btn-default symbols" type="button" id="at">@</button>
                                <button class="btn btn-default symbols" type="button" id="hyphen">-</button>
                                <button class="btn btn-default symbols" type="button" id="hash">#</button>
                                <button class="btn btn-default symbols" type="button" id="dollar">$</button>
                                <button class="btn btn-default symbols" type="button" id="under">_</button>
                                <button class="btn btn-default symbols" type="button" id="mark">!</button>
                                <button class="btn btn-default symbols" type="button" id="tilde">~</button> 
                                <button class="btn btn-default symbols" type="button" id="comma">,</button>  
                                <button class="btn btn-default symbols" type="button" id="pipe">|</button>  
                                <button class="btn btn-default symbols" type="button" id="colon">:</button>  
                                <button class="btn btn-default" type="button" id="semi">;</button>                                    
                            </div>
                                      
                                <button type="submit" class="btn btn-default" id="generate">Generate</button>
                        </form>  
                        <div class="status_info">
                			<img src="img/off.png"> Offline dictionary - 500 words | 
                            <img src="img/on.png"> Online dictionary - 3000 words
                        </div>
		          </div>
            </div>
		</header>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 main">
                <div class="generate text-center"><?php $process->display(); ?></div>
                <div class="text-center" id="anim"><img src="img/<?php echo rand(1,13);?>.png"></div>
                <div id="anim1" class="animate text-center"></div>
                <div class="animate text-center status"><?php echo  $process->word_status; ?></div>
            </div>
        </div>       
	</div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>