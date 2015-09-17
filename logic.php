<?php

class GenProc1{
		public $words = Array('cloud','borrow','tip','pop','jason','water','dog','river');
		public $track = array(''); 
		public $word; 
		
		public function wordcount()
		{
			return count($this->words); 
		}
		
		public function rendword($post)
		{
			if(isset($post))
			{
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
		}
}

?>
