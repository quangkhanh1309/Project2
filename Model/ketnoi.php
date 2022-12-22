<?php
	class ketnoi{
		function ketnoiDB(& $conn)
		{
			$conn = mysql_connect("localhost","thicuoiky","123456");
			mysql_set_charset("utf8");
			if ($conn)
			{
				return mysql_select_db("dbthicuoiky");
			}
			else
			{
				return false;
			}
		}
		function ngatketnoi ($conn)
		{
			mysql_close($conn);
		}
	}
?>