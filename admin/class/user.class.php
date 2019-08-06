<?php
require_once "common.class.php";
require_once "CRUD.php";
 class User extends Common
 {
 	protected $adminId, $name, $username ,$email, $phone, $address, $password, $status, $last_login, $image;

 	function login()
 	{
	 	$sql = "select * from tbl_admin where email='$this->email' and password='$this->password' and status=1";
	 	return $this->select($sql);
 	}
 	function profile()
 	{
	 	$sql = "select * from tbl_admin where password='$this->password'";
	 	return $this->select($sql);
 	}
 	function getUserByEmail(){
 		$sql = "select * from tbl_admin where email='$this->email'";
	 	return $this->select($sql);
 	}
 	function create()
 	{
 		$sql = "insert into tbl_admin (name,username,email,phone,address,password,status,image) values ('$this->name','$this->username','$this->email','$this->phone','$this->address','$this->password','$this->status','$this->image')"; 
 		return $this-> insert($sql);
 	}
 	function index()
 	{
 	 	$sql = "select * from tbl_admin";
 	 	return $this->select($sql);
 	}
 	function remove()
 	{
 	 	$sql = "delete from tbl_admin where adminId='$this->adminId'";
 	 	return $this->delete($sql);
 	}
 	function selectDataById()
 	{
 		$sql = "select * from tbl_admin where adminId='$this->adminId'";
 	 	return $this->select($sql);
 	}
 	function edit(){
 		$sql="update tbl_admin set  name='$this->name' , username='$this->username', email='$this->email', phone='$this->phone', address='$this->address', password='$this->password', status='$this->status', image='$this->image' where adminId='$this->adminId'";
 		return $this->update($sql);
 	}
 }
?>