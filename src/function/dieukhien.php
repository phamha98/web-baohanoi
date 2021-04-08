<?php
include('ketnoi.php');
class taikhoan
{
	public function tim_email($email)
	{
		global $conn;
		$sql="select * from taikhoan where email='$email'";
		$run=mysqli_query($conn,$sql);
		$num = mysqli_num_rows($run);
		return $num;
	}
	public function tim_pass($email,$pass)//thong qua mail
	{
		global $conn;
		$sql="select * from taikhoan where email='$email' and pass='$pass'";
		$run=mysqli_query($conn,$sql);
		$num = mysqli_num_rows($run);
		return $num;
	}
	public function laythongtin_email($email)//modul dung cho php hienthi
	{
		global $conn;
		$sql="select * from thongtin where email='$email'";
		$run=mysqli_query($conn,$sql);
		$data=array();
		if($run)
		{while($rows=mysqli_fetch_array($run))
			{$data[]=$rows;}
			
		}
		return $data;
	}
	public function up_file($dau,$cuoi)
	{
		return move_uploaded_file($dau,'anhcuatui/'.$cuoi);
		}
	public function capnhat($em,$ho,$gi,$ng,$di,$an)
	{
		global $conn;
		$sql = "update thongtin set hoten='$ho',gioitinh='$gi',ngaysinh='$ng',diachi='$di',anh='$an' where email='$em'";
		$run=mysqli_query($conn,$sql);
		return $run;
		
	}
	public function insert_tk($email,$pass)
	{
		global $conn;
		$sql="insert into taikhoan(email,pass) values('$email','$pass') ";
		$run=mysqli_query($conn,$sql);
		return $run;
	}
	public function insert_thongtin($email)
	{
		global $conn;
		$sql="insert into thongtin(email) value('$email') ";
		$run=mysqli_query($conn,$sql);
		return $run;
	}
	public function kiemtra($email) 
		{
			global $conn;
			$sql = "select * from taikhoan where email='$email'";
			$run = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($run);
			return $num;
			
		}
		public function laytat_thongtin_taikhoan()
		{	global $conn;
			$sql = "select * from thongtin ";
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		public function xoataikhoan($email)
		{
			global $conn;
			$sql = "delete from taikhoan where email='$email'";
			$run=mysqli_query($conn,$sql);
			return $run;
			}
			public function xoatttaikhoan($email)
		{
			global $conn;
			$sql = "delete from thongtin where email='$email'";
			$run=mysqli_query($conn,$sql);
			return $run;
			}
		
}
 class tintuc{
	public function laychude()
	{   global $conn;
		$sql="select * from chude ";
		$run=mysqli_query($conn,$sql);
		$data=array();
		if($run)
		{while($rows=mysqli_fetch_array($run))
			{$data[]=$rows;}}
		return $data;
	}
	public function laybaiviet_theochude($chude)
	{
		global $conn;
		$sql="select * from baiviet where chude='$chude' ";
		$run=mysqli_query($conn,$sql);
		$data=array();
		if($run)
		{while($rows=mysqli_fetch_array($run))
			{$data[]=$rows;}}
		return $data;
	}
	public function laynoidung_theoid($id)
	{
		global $conn;
		$sql="select * from baiviet where id='$id' ";
		$run=mysqli_query($conn,$sql);
		$data=array();
		if($run)
		{while($rows=mysqli_fetch_array($run))
			{$data[]=$rows;}}
		return $data;
	}
	public function laytat_thongtin_chude()
		{	global $conn;
			$sql = "select * from chude ";
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		public function laytat_thongtin_baiviet()
		{	global $conn;
			$sql = "select * from baiviet ";
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		
		public function timchude($chude)
		{
			global $conn;
			$sql="Select * from chude where chude='$chude'"; 
			$run=mysqli_query($conn, $sql);
			$num = mysqli_num_rows($run);
			return $num;			
			}
		public function themchude($chude,$capdo,$anh)
		{global $conn;
		$sql="insert into chude(chude,capdo,anh) value('$chude','$capdo','$anh')  ";
		$run=mysqli_query($conn,$sql);
		return $run;
		}
		public function capnhatchude($chude,$capdo,$anh)
		{global $conn;
		$sql="update chude set capdo='$capdo',anh='$anh' where chude='$chude' ";
		$run=mysqli_query($conn,$sql);
		return $run;
		}
		
		public function timbaiviet($tieude)
		{
			global $conn;
			$sql="Select * from baiviet where tieude='$tieude'"; 
			$run=mysqli_query($conn, $sql);
			$num = mysqli_num_rows($run);
			return $num;			
			}
		public function timbv_id($id)
		{	global $conn;
			$sql="Select * from baiviet where id='$id'"; 
			$run=mysqli_query($conn, $sql);
			$num = mysqli_num_rows($run);
			return $num;
		}
		public function thembaiviet($chude,$tieude,$tomtat,$noidung,$anh)
		{global $conn;
		$sql="insert into baiviet(tieude,chude,tomtat,noidung,anh) value('$tieude','$chude','$tomtat','$noidung','$anh')  ";
		$run=mysqli_query($conn,$sql);
		return $run;
		}
		public function capnhatbaiviet($chude,$tieude,$tomtat,$noidung,$anh,$id)
		{global $conn;
		$sql="update baiviet set chude='$chude', tieude='$tieude',tomtat='$tomtat' ,noidung='$noidung',anh='$anh' where id='$id'";
		$run=mysqli_query($conn,$sql);
		return $run;
		}
		
		public function xoachude($chude)
		{
			global $conn;
			$sql = "delete from chude where chude='$chude'";
			$run=mysqli_query($conn,$sql);
			return $run;
			}
		public function xoachude_baiviet($chude)
		{
			global $conn;
			$sql = "delete from baiviet where chude='$chude'";
			$run=mysqli_query($conn,$sql);
			return $run;
			}	
		public function xoabaiviet($id)
		{
			global $conn;
			$sql = "delete from baiviet where id='$id'";
			$run=mysqli_query($conn,$sql);
			return $run;
			}
		public function up_file($dau,$cuoi)
	{
		return move_uploaded_file($dau,'anhcuatui/'.$cuoi);
		}
	}
?>