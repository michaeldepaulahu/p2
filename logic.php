<?php
	
class GenProc1{
	public $words = Array('cloud','borrow','tip','pop','jason','water','dog','river');
	public $track = array(''); 
	
	public function __construct()
	{
		// renders words
		$this->show(
		$this->rendword(
		$this->checkfield('words')
		)); 
		
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
				echo $this->words[$rand];
			}				
		}
	}
}
?>
