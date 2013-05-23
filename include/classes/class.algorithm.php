<?php

/*

	Description : Algorithm class
	Author : Amit Arora
	Date   : 22 May 2013


*/


class algorithm{
/*

 Function name : FizzBuzz
 Argument : 2 
 Description :    - "Fizz" if a multiple of 3
				  - "Buzz" if a multiple of 5
				  - The integer itself otherwise.
 Retun : It will return output Fizz Buzz 11 Fizz 13 14 FizzBuzz 16.
 Author : Amit Arora

*/

public  function FizzBuzz ($inputRange, $configVars){

	 $output='';
	for($i = $inputRange['Start']; $i <= $inputRange['End']; $i++){
		if($i == 0){ continue; }
		$reminder = '';
		foreach ($configVars as $key => $value){
			
			if ($i % $key == 0) {$reminder .= $value;}
		
		}
		if($reminder==''): $result=$i; else: $result=$reminder; endif;
			$output .= $result. ' ';
	}
	return $output;

	} 


/*

 Function name : FizzBuzzBazz
 Argument : 2 
 Description :    - "Fizz" if a multiple of 3
				  - "Buzz" if a multiple of 5
				  - "Bazz" instead of an integer after consecutive Fizzes/Buzzes.
 Retun : It will return output 4 Buzz Fizz Bazz 8 Fizz Buzz Bazz.
 Author : Amit Arora

*/


public function FizzBuzzBazz($inputRange, $configVars){
$output ='';
for($i = $inputRange['Start']; $i <= $inputRange['End']; $i++){
		$reminder = '';
		if($i == 0){ continue; }
		foreach($configVars as $key => $info) {
			if ($i %$configVars[$key]['divisor'] == 0) {$reminder .=  $configVars[$key]['val'];}else{
					$next =($key == 0) ? $key + 1 : 0;
			 if((($i-2) % $configVars[$key]['divisor'] == 0) && (($i-1) % $configVars[$next]['divisor'] == 0))
				$reminder .=  ' Bazz ';
			}
		 }
		 if($reminder==''): $result=$i; else: $result=$reminder; endif;
			$output .= $result. ' ';
	}
	return $output;
}





}

?>