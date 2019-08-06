<?php
	require_once "object.php";;
	$tour->set('tourId',$_GET['tourId']);
	$tour->remove();
	header('location:tour_list.php');
?>