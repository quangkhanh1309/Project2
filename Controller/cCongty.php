<?php
	include_once("Model/mCongty.php");
	class cCongty
	{
		function xuatAllCongty()
		{
			$p = new mCongty();
			$tableCompany = $p->XemAllCongTy();
			return $tableCompany;
		}
	}
?>