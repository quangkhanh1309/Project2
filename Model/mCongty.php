<?php
	include_once("ketnoi.php");
	class mCongty
	{
		function XemAllCongTy()
		{
			$conn;
			$p = new ketnoi();
			if ($p->ketnoiDB($conn))
			{
				$string = "select * from congty";
				$table = mysql_query($string);
				$p->ngatketnoi($conn);
				return $table;
			}
			else
			{
				return false;
			}
		}
	}
?>