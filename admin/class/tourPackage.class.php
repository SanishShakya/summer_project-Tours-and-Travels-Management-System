<?php
require_once "common.class.php";
require_once "CRUD.php";
 class Tour extends Common
 {
 	protected $tourId, $packageName, $description ,$amount, $category, $days, $photo, $adminId, $location, $status, $created_at, $created_by, $feature;

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
 		$sql = "insert into tbl_tourPackage (packageName,description,amount,category,days,photo,status,location,created_at,feature,created_by) values ('$this->packageName','$this->description','$this->amount','$this->category','$this->days','$this->photo','$this->status','$this->location','$this->created_at','$this->feature','$this->created_by')"; 
 		return $this->insert($sql);
 	}
 	
 	function index()
 	{
 	 	$sql = "select * from tbl_tourPackage order by created_at desc";
 	 	return $this->select($sql);
 	}
 	function remove()
 	{
 	 	$sql = "delete from tbl_tourPackage where tourId='$this->tourId'";
 	 	return $this->delete($sql);
 	}
 	function selectDataById()
 	{
 		$sql = "select t.*,a.name as aname from tbl_tourPackage as t join tbl_admin as a on t.created_by=a.adminId where t.tourId='$this->tourId'";
 	 	return $this->select($sql);
 	}
 	function edit(){
 		$sql="update tbl_tourPackage set  packageName='$this->packageName' , description='$this->description', amount='$this->amount', category='$this->category', days='$this->days', photo='$this->photo', status='$this->status', location='$this->location', feature='$this->feature' where tourId='$this->tourId'";
 		return $this->update($sql);
 	}
 	function getTourPackages(){
 		$sql = "select tourId,packageName,description,amount,category,days,photo,location,created_at,feature from tbl_tourPackage where status = 1 order by created_at desc";
 	 	return $this->select($sql);
 	}
 	function getLimitTourPackages(){
 		$sql = "select tourId,packageName,description,amount,category,days,photo,location,created_at,feature from tbl_tourPackage where status = 1 order by created_at desc limit 3";
 	 	return $this->select($sql);
 	}
 	function selectTourById()
 	{
 	 $sql = "select * from tbl_tourPackage where tourId='$this->tourId'";
 	 	return $this->select($sql);
 	}
 }
?>