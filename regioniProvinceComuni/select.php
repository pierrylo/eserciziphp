<?php

include_once 'select.class.php';
$opt = new SelectList();

if(isset($_POST['id_reg']))
{
	echo $opt->ShowProvince();
	die;
}

if(isset($_POST['id_pro']))
{
	echo $opt->ShowComuni();
	die;
}


?>