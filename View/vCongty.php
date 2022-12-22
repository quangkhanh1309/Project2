<?php
	include_once("Controller/cCongty.php");
	$p = new cCongty();
	$tableCompany = $p->xuatAllCongty();
	if ($tableCompany)
	{
		if (mysql_num_rows($tableCompany)>0)
		{
			while ($row = mysql_fetch_assoc($tableCompany))
			{
				echo "<a href='index.php?Comp=".$row["id_congty"]."'>".$row["tencongty"]."</a>";
				echo "<br>";
			}
		}
		else
		{
			echo "0 result";
		}
			
	}
	else
	{
		echo "Error";
	}
?>