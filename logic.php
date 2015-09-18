<?php

class GenProc1{
		public $words = Array('cloud','borrow','tip','pop','jason','water','dog','river');
		public $track = array(''); 
		public $word; 
				
		public function numbers()
		{
			$numbers = isset($_POST['checkbox']) && ($_POST['checkbox'] == "check") ? rand(0,9) : ""; 	
			return $numbers; 
		}
		
		public function char(){	
			$char = chr(rand(33,126));
			$chr = preg_match("/^[\'\"@a-zA-Z0-9]*$/",$char) ? $this->char() : $char;
			return $chr;
		}		
		
		public function wordcount()
		{
			return count($this->words); 
		}
		
		public function rendword()
		{
			if(isset($_POST['words']))
			{
				$post = $_POST['words']; 
				$this->word = $post;
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
			echo $this->numbers();
			echo $this->char();			
		}
}

?>
