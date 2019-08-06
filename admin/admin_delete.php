<?php
	require_once "object.php";;
	$user->set('adminId',$_GET['adminId']);
	$user->remove();
	header('location:admin_list.php');
?>