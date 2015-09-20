<?php
	
class GenProc1{
	public $words = array();
	public $track = array(); 
	public $password; 
		
	public function __construct()
	{
		// build dictionary
		$this->glossary(); 
		
		// renders words
		$this->rendword(
		$this->checkfield('words')
		); 
		
		// renders numbers
		$this->show(
		$this->numbers(
		$this->checkbox('checkbox')
		));
		
		// renders symbols			
		$this->show(
		$this->char(
		$this->checkbox('symbols')
		));
	}
	
	// loads dictionary 
	public function glossary()
	{
		// 3 second check to pull froms paulnoll large library
		$fp = @fsockopen("www.paulnoll.com@", 80, $errno, $errstr,3);
		if (is_resource($fp))
		{
			$file = file_get_contents($this->rand_pages());
			fclose($fp);
		}	else
		{
			$file = file_get_contents("glossary\short.txt");
		}			
		
		// get contents and source code
		$htmlfile = htmlentities($file);
		
		// build match
		$pattern = htmlspecialchars("<li>[A-Za-z\s]*<\/li>", ENT_QUOTES);
		preg_match_all("/$pattern/", $htmlfile, $read);
		
		// remove tags
		$pattern_r = htmlspecialchars("<li>\s+|\s+<\/li>", ENT_QUOTES);
		foreach ($read[0] as $value)
		{
			array_push($this->words,preg_replace("/$pattern_r/", '', $value,-1)); 
		}			
	}

	// random-select page
	function rand_pages()
	{
		$rando = rand(1,30);
		$url = "http://www.paulnoll.com/Books/Clear-English/words-%02d-%02d-hundred.html";
		
		if($rando % 2 == 0)
		{
			$rand_pages = sprintf($url, $rando-1, $rando);	
			return $rand_pages;
		} 
		else 
		{
			$rand_pages = sprintf($url, $rando, $rando+1);	
			return $rand_pages;
		}
	}
			
	// print post values
	function show($post)
	{
		echo $post;  	
	}
	
	// check returned post
	function checkfield($param)
	{
		if (isset($_POST[$param]))
		{
			return $_POST[$param];
		}
	}

	// check on/off returned checkbox value
	function checkbox($param)
	{
		foreach ($_POST as $value)
		{
			if (isset($_POST[$param]))
			{
				return $_POST[$param];
			}
			else
			{
				$_POST[$param] = "off"; 
				return $_POST[$param];
			}
		}
	}
	
	// return number	
	public function numbers($param)
	{
		$numbers = $param == "on" ? rand(0,9) : ""; 	
		return $numbers; 
	}

	//return character
	public function char($param)
	{	
		if ($param == "on")
		{
			$char = chr(rand(33,126));
			$chr = preg_match("/^[\'\"@a-zA-Z0-9]*$/",$char) ? $this->char($param) : $char;
			return $chr;
		}
	}
	
	// format/generate words
	public function generate($param, $delimiter)
	{
		if($this->checkbox('uppercase') == "on")
		{ 
			echo strtoupper($param.$delimiter);
		}
		else if ($this->checkbox('firstcase') == "on")
		{ 
			echo ucfirst($param.$delimiter);
		}
		else
		{ 
			echo $param.$delimiter;
		}	
	}		
	
	// returns words dictionary count
	public function wordcount()
	{
		return count($this->words); 
	}
	
	// return words
	public function rendword($param)
	{
		$this->word = $param;
		
		for($j=0; $j < $this->word; $j++)
		{
			$rand = rand(0,$this->wordcount()-1);
			
			if (in_array($rand, $this->track))
			{
				$j--;
			}
			else
			{
				array_push($this->track,$rand);
				$j == $this->word-1 ? $delimiter = "" : $delimiter = $this->checkfield('delimiter');
				 
				echo $this->generate( $this->words[$rand], $delimiter);
			}				
		}

	}
}
?>
