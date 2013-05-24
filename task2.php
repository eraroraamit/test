<?php 

	require_once('include/classes/class.layout.php');
	$objlayout = new layout();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xml; charset=utf-8">
	<title>Algorithm</title>
	 <link rel="stylesheet" href="themes/template1/css/style.css">
</head>
<body>
  <section class="container">
    <div class="task">
	<h1>Task 2</h1>
		<div>
		<p><h2>File test.html</h2> </p>
		<p>
		1) Html is wirtten in capital letter .It should be always small letter.</p> 
		<p>2) on line number 4 script type is missing and also script tag is in capital letter.It should be </p>
		<p> <?php echo htmlentities('<script type="text/javascript" charset="utf-8"	src="http://code.jquery.com/jquery-1.7.2.js"></script>');?></p>
		<p>3) on line number 5 script type and charset are missing. Also its not a good idea to do inline jquery.It should be we have to create js file and call in the page.</p>
		<p>4) One line number 16 There should be a class for calling CSS rather written inline css. We have to make css file too and call the file in page.</p>
		<p>5) The <?php echo htmlentities('<center>');?> tag is not supported in HTML5. Use CSS instead.</p>
		<p>6) There should meta tags, Title tags in the HTML</p>
		<p>7)  online 20 Empty script tag should be not there.</p>
		<p>8) SyntaxError: missing ; before statement  in jquery</p>
		</div>
		<div>
		<p> <h2>File getinfo.php</h2></p>
		<p>1) There should be full qualify url path require_once("data.php");</p>
		<p> on line 4 $ArrayURL = split('/', $_SERVER[REQUEST_URI])); syntax error will come.We have to remove one ) from end.</>
		<p>2) There is no dataObj object. Its should be baseObj.Right now this line will print error.</p> 
		<p>3) It will return an fatal error.It should be is_object === or ==  return if base object it will retun array.Also Its should be baseObj.
		<p>4) unknown variable $status</p>
		<p>5) As if the statement is end.It will print as a string variable $status_header. </p>
			<p>eg : $status_header = 'HTTP/1.1 $status';</p>
			<p>Out put :  HTTP/1.1 $status </p>
		<p>6) return json_encode( $data->getAll($id) ); . It will print an error. </p>
		<p>7) Function split() is deprecated.</p>
		<p>8) $ArrayURL = split('/', $_SERVER[REQUEST_URI]);  It will produce notice. It should be like $ArrayURL = split('/', $_SERVER['REQUEST_URI']); </p>
		</div>
		<div>
			<p><h2>data.php</h2></p>
			<p>1) It will not execute statement.It will print an error connect_errno.It should be  mysqli_connect_error.</p> 
			<p>2) We have to validating the $id with mysql_escape_string and also It should be in '.mysql_escape_string($id).'</p>
			<p>3) getAll function we have to also need to pass the name of the table.Currently mysql statement will print an error $res = $this->mysql->query("SELECT * FROM $table WHERE ID = $id"); In this function we are only passing $id. We have also need to pass table name</p>
		</div>
		<div><p><h2>data.sql</h2></p>
			 <p>1) In the Table defination, BIGINT ,TINYINT ,INT  we have to also mention Type.</p>
			 <p>2) Constraint is not specify what will happen on update/delete operation.</p>
			 <p>3) Address need not to be in text type its  memory consuming  </p>
			 <p>4) When you create a table we have to check Create [TEMPORARY] TABLE [IF NOT EXISTS] tbl_name is missing in table defination.</p>
			 <p>5) If we are using the concept of FK its not correct way in the current table defination.</p>
			 <p>6)  "Ceate Table HDB" The sql statement will not executed. </p>
			 <p>7)  Create Table Condo " -- mySql statement will not executed as table defination is incorrect.</p>
		</div>
		<?php echo $objlayout->tasklinks();?>
	  		
	</div>

</section>
</body>
</html>

