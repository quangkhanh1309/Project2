<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>them san pham</title>
</head>

<body>
	<table border = "1px solid" style="margin: auto; text-align: center;width: 960px">
		<tr class="normal">
			<td colspan="2">Banner</td>
		</tr>
		<tr class="normal">
			<td colspan="2">Top menu</td>
		</tr>
		<tr class="normal">
			<td id="left">
				<a href="insert.php?addProd">Them san pham</a>
			</td>
			<td id="main">
				<?php
					if (isset($_REQUEST["addProd"]))
					{
						include("View/vThemsanpham.php");
					}
				else
				{
					echo "Trang danh cho Admin";
				}
				?>
			</td>
		</tr>
		<tr class="normal">
			<td colspan="2">Footer</td>
		</tr>
	</table>
</body>
</html>