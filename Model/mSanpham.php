<?php
include_once("ketnoi.php");
	class mSanpham
	{
		function xemAllSanpham()
		{
			$con;
			$p = new ketnoi ();
			if ($p->ketnoiDB($con))
			{
				$string = "select * from sanpham";
				$table = mysql_query($string);
				$p->ngatketnoi($con);
				return $table;
			}
			else
			{
				return false;
			}
		}
		function InsertSanpham ($ten, $gia, $mota, $hinh, $cty)
		{
			$con;
			$p = new ketnoi();
			if ($p->ketnoiDB($con))
			{
				$string = "insert into sanpham (tensanpham, gia, mota, hinh, id_congty) values ";
				$string .= "(N'".$ten."',".$gia.",N'".$mota."',N'".$hinh."',".$cty.")";
				$kq = mysql_query($string);
				$p->ngatketnoi($con);
				return $kq;
			}
			else
			{
				return false;
			}
		}
		function timSanPham ($mota)
		{
			$con;
			$p = new ketnoi();
			if ($p->ketnoiDB($con))
			{
				$string = "Select * from SanPham where mota like N'@mota'";
				$kq = mysql_query($string);
				$p->ngatketnoi($con);
				return $kq;
			}
			else
			{
				return false;
			}
		}
	}
?>