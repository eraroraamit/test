<?php

/*
	@Name : layout
	@Author : Amit Arora
	@Date   : 22 May 2013


*/


class layout{


/*
	@Function : layoutform
	@Description : It will return form.
	@Aurgument : No Argument.
	@Author : Amit Arora
	@Date   : 22 May 2013


*/


function layoutform(){

	$html='';
	$html .='<form method="post" action="">
		<p><input type="text" name="rangestart" id="rangestart" value="" placeholder="Range Start"></p>
		<p><input type="text" name="rangeend" id="rangeend" value="" placeholder="Range End"></p>
		<p class="submit"><input type="submit" name="submit" id="submit" value="submit"></p>
	  </form>';
	$html .=$this->tasklinks();
	return $html;

	}
/*
	@Function : tasklinks
	@Description : It will return form.
	@Aurgument : No Argument.
	@Author : Amit Arora
	@Date   : 22 May 2013


*/

function tasklinks(){

	$html='<p> <a href="task1a.php">Task 1</a> | <a href="task1b.php"> Task 1.1</a> | <a href="task2.php">Task 2</a></p>';
	return $html;

}


}
?>