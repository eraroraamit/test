<?php 

	require_once('include/classes/class.algorithm.php');
	require_once('include/classes/class.layout.php');
	$objalgorithm = new algorithm();
	$objlayout = new layout();
	$flag=false;
	if(isset($_POST['submit'])){
		$configVars = array (3 => "Fizz", 5 => "Buzz"); 
		$inputRange = array ("Start" =>$_POST['rangestart'] , "End" => $_POST['rangeend']); 
		$fizzBuzz=$objalgorithm->FizzBuzz($inputRange, $configVars); 
		$flag=true;
	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xml; charset=utf-8">
	<title>Algorithm</title>
	 <link rel="stylesheet" href="themes/template1/css/style.css">
	 <script type="text/javascript" src="http://www.thestudio.com/crm/js/jquery-1.8.0.min.js"></script>
	<script src="themes/template1/js/validation.js"></script>

</head>
<body>
  <section class="container">
    <div class="algorithm">
	<h1>Task 1</h1>
	<div align="center"><span id="msg" style="padding:7px 1px">
	
	<?php
					if($flag==true):echo $fizzBuzz;endif;
					
				?>
	</span></div>
      		 <?php echo $objlayout->layoutform(); ?>

	  		
	</div>

</section>
</body>
</html>

