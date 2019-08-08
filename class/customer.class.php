<?php
require_once "common.class.php";
require_once "CRUD.php";
 class Customer extends Common1
 {
 	protected $customerID, $name, $username ,$email, $mobile, $address, $password, $gender;

 	function create()
 	{
 		$sql = "insert into tbl_customer (name,username,email,mobile,address,password,gender) values ('$this->name','$this->username','$this->email','$this->mobile','$this->address','$this->password','$this->gender')"; 
 		return $this-> insert($sql);
 	}

 	function login()
 	{
	 	$sql = "select * from tbl_customer where email='$this->email' and password='$this->password'";
	 	return $this->select($sql);
 	}
 	function getCustomerByEmail(){
 		$sql = "select * from tbl_customer where email='$this->email'";
	 	return $this->select($sql);
 	}
 	
 }
?>