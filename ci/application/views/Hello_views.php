<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
	<h1>HTML helper</h1>
	<p> OL()</p>
	<?php 

	$list =array('a','b','c','d','e','aaa','bbb','ddd');
	echo ol($list);

	echo '<hr>';
	echo ul($list);


	?>





	<hr>
	<h1>Hello World</h1>
	<hr>
	
	<p>br()</p>
	aaa
	<?php echo br(5);?>
	bbbbb
	<hr>
	<p>heading()</p>
	<?php
	echo heading("Text",1);
	echo heading("Text",2);
	echo heading("Text",3);
	echo heading("Text",4);
	echo heading("Text",5);
	echo heading("Text",6);
	?>
	<hr>
	<p>nbs()</p>
	testing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; programming
	<?php
	echo 'mywedsite';
	echo nbs(10);
	echo 'devbanban.com';
	?>
</body>
</html>