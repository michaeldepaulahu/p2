/*!
 * P1 Home - Project
 * Michael Depaula
 * Custom js
 */
 
 //	return symbol
 	function symbol(sel, symbol){

		// symbol function
		$(sel).click(function(){
			$('#delimiter').val(symbol);
		}); 
	}
	
	// validate word fields
	function validate(sel, slave, param, param1)
	{
		$(sel).keyup(function(){
			if($(sel).val() == 0 || isNaN($(sel).val()) == true)
			{
				$(slave).addClass(param).removeClass(param1);
			}
			else
			{
				$(slave).addClass(param1).removeClass(param);
			}
		})				
	}
	
	//

 // load custom
	$(document).ready(function(){

		// load custom
		
		// validate word input
		validate("#words", "#words-group","has-error", "has-success");
		validate("#words", "#generate","disabled", "");		
		
		// validate symbol input
		symbol("#at", "@");
		symbol("#hyphen", "-");
		symbol("#hash", "#");
		symbol("#dollar", "$");
		symbol("#under", "_");
		symbol("#mark", "!");
		symbol("#tilde", "~");
		symbol("#comma", ",");
		symbol("#pipe", "|");
		symbol("#colon", ":");
		symbol("#semi", ";");
		
		// animation 
		document.getElementById('anim1').innerHTML = "0.1011010010100101"; 

		//setInterval(function(){ 
			var x = Math.random();
			document.getElementById('anim1').innerHTML = x; 
		//}, 500);
				 	
	});