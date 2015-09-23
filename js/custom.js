/*!
 * P1 Home - Project
 * Michael Depaula
 * Custom js
 */
 
 	//	return symbol for larger devices
 	function symbol(sel, symbol){

		// symbol function
		$(sel).click(function(){
			$('#delimiter').val(symbol);
		}); 
	}
	
	//	return symbol for smaller devices (avoid conflict)
	function symbol1(sel, symbol){

		// symbol function
		$(sel).click(function(){
			$('#delimiter1').val(symbol);
		}); 
	}
	
	// validate number input fields (second check at client level)
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

 // load custom
	$(document).ready(function(){

		// load custom
		
		// validate word input
		validate("#words", "#words-group","has-error", "has-success");
		validate("#words", "#generate","disabled", "");
		
		// validate word input mobile
		validate("#words1", "#words-group1","has-error", "has-success");
		validate("#words1", "#generate1","disabled", "");		
		
		// validate symbol input (large device)
		symbol1("#at1", "@");
		symbol1("#hyphen1", "-");
		symbol1("#hash1", "#");
		symbol1("#dollar1", "$");
		symbol1("#under1", "_");
		symbol1("#mark1", "!");
		symbol1("#tilde1", "~");
		symbol1("#comma1", ",");
		symbol1("#pipe1", "|");
		symbol1("#colon1", ":");
		symbol1("#semi1", ";");
		
		// validate symbol input (smaller device, avoid conflict)
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

		setInterval(function(){ 
			var x = Math.random();
			document.getElementById('anim1').innerHTML = x; 
		}, 500);		 	
	});