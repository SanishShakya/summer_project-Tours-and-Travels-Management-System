<?php
require_once "common.class.php";
require_once "CRUD.php";
 class Enquiry extends Common
 {
 	protected $enquiryId, $name, $email, $subject, $description, $status, $created_at;

 	function login()
 	{
	 	$sql = "select * from tbl_customer where email='$this->email' and password='$this->password'";
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
 		$sql = "insert into tbl_enquiry (name,subject,email,description,created_at) values ('$this->name','$this->subject','$this->email','$this->description','$this->created_at')"; 
 		return $this-> insert($sql);
 	}
 	
 	function index()
 	{
 	 	$sql = "select * from tbl_enquiry order by created_at desc";
 	 	return $this->select($sql);
 	}
 	function remove()
 	{
 	 	echo $sql = "delete from tbl_enquiry where enquiryId='$this->enquiryId'";
 	 	return $this->delete($sql);
 	}
 	function selectDataById()
 	{
 		$sql = "select t.*,a.name as aname from tbl_tourPackage as t join tbl_admin as a on t.created_by=a.adminId where t.tourId='$this->tourId'";
 	 	return $this->select($sql);
 	}
 	function edit(){
 		$sql="update tbl_admin set  name='$this->name' , username='$this->username', email='$this->email', phone='$this->phone', address='$this->address', password='$this->password', status='$this->status', image='$this->image' where adminId='$this->adminId'";
 		return $this->update($sql);
 	}
 	
 }
?>