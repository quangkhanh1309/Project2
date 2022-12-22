<?php
	include_once("Controller/cSanpham.php");
	$p = new cSanpham ();
		if (isset($_REQUEST["Comp"]))
		{
			$cty = $_REQUEST["Comp"];
			$tblProduct = $p->laySanPhamTheoCty($cty);
		}
		else
		{
			$tblProduct = $p->layAllSanpham ();
		}
	if ($tblProduct)
	{
		if (mysql_num_rows($tblProduct) > 0)
		{
			$dem = 0;
			echo "<table style='width:100%'>";
			while ($row = mysql_fetch_assoc($tblProduct))
			{
				if($dem == 0)
				{
					echo "<tr>";
				}
				echo "<td style='width:25%; height:100px'>";
				echo "<image width=100px height=150px src='image/".$row['hinh']."'/>";
				echo "<br>".$row['tensanpham']."<br>".$row['gia'];echo "</td>";
				$dem++;
				if ($dem%4==0)
				{
					echo "</tr>";
				}
			}
			echo "</table>";
		}
		else
		{
			echo "0 result";
		}
	}
	else
	{
		echo "khong co gia tri";
	}
?>