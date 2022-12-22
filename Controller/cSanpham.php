<?php
	include_once("Model/mSanpham.php");
	class cSanpham
	{
		function layAllSanpham ()
		{
			$p = new mSanpham ();
			$tblProduct = $p->xemAllSanpham();
			return $tblProduct;
		}
		function AddSanpham ($ten, $gia, $giamgia, $mota, $cty, $file, $tenanh, $loaianh, $sizeanh)
		{
			if ($loaianh == "image/jpeg" || $loaianh =="image/png")
			{
				if ($sizeanh <= 2*1024*1024)
				{
					if (move_uploaded_file($file,"image/".$tenanh))
					{
						$p = new mSanpham();
						$ins = $p->InsertSanpham ($ten, $gia, $giamgia, $mota, $tenanh, $cty);
						if($ins)
						{
							return 1;
						}
						else
						{
							return 0; //khong the insert;
						}
					}
					else
					{
						return -1; //khong the upload anh
					}
				}
				else
				{
					return -2; //size kich thuoc lon
				}
			}
			else
			{
				return -3; //khong dung loai file
			}
		}
		function laySanPhamTheoCty ($comp)
		{
			$p = new mSanpham();
			$tblProduct = $p->xemSanPhamTheoCty ($comp);
			return $tblProduct;
		}
	}
?>