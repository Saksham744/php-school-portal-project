<?php
session_start();
$mo=$_SESSION['mysession'];
unset($mo);
header("location:./");
	?>