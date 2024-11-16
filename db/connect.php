<?php
	$mysqli = new mysqli("localhost","root","","asm_php1");

	// Check connection
	if ($mysqli -> connect_errno) {
	echo "Không thể kết nối với MySQL: " . $mysqli -> connect_error;
	exit();

}
?>