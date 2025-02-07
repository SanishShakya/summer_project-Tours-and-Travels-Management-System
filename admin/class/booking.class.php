<?php
require_once "common.class.php";
require_once "CRUD.php";
 class Booking extends Common
 {
 	protected $bookingId, $date, $customerName, $comment, $packageName, $customerEmail;

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
 		$sql = "insert into tbl_booking (packageName,comment,customerName,date,customerEmail) values ('$this->packageName','$this->comment','$this->customerName','$this->date','$this->customerEmail')"; 
 		return $this-> insert($sql);
 	}
 	
 	function index()
 	{
 	 	$sql = "select * from tbl_booking order by date desc";
 	 	return $this->select($sql);
 	}
 	function remove()
 	{
 	 	$sql = "delete from tbl_booking where bookingId='$this->bookingId'";
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
 	function selectDataByIdd()
 	{
 	 $sql = "select * from tbl_booking where bookingId='$this->bookingId'";
 	 	return $this->select($sql);
 	}

	function updateBookingStatus(){
 		$sql="update tbl_booking set  status='$this->status' where bookingId='$this->bookingId'";
 		return $this->update($sql);
 	}
 	
 }
?>