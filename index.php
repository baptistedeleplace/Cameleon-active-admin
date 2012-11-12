<?php

mb_internal_encoding( 'UTF-8' );

require_once('../bootstrap.php');


if(
	isset($_REQUEST['model']) and
	!empty($_REQUEST['model']) and
	in_array($_REQUEST['view'], array('index', 'show', 'edit'))
){

	include_once('controller/' . $_REQUEST['view'] . '.php');
	include_once('view/' . $_REQUEST['view'] . '.php');

}else{

	include_once('view/default.php');

}
