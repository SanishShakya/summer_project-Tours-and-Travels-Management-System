<?php
	require_once "object.php";
	$enquiry->set('enquiryId',$_GET['enquiryId']);
	$enquiry->remove();
	header('location:manage_enquiry.php');
?>