<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Them san pham</title>
</head>
<?php
	include("Controller/cSanpham.php");
	if (isset($_REQUEST["submit"]))
	{
		$ten = $_REQUEST["txtTenSP"];
		$gia = $_REQUEST["txtGiaSP"];
		$giamgia = $_REQUEST["txtGiaSPGiam"];
		$mota = $_REQUEST["txtMota"];
		$cty = $_REQUEST["cboCty"];
		$file = $_FILES["ffile"]["tmp_name"];
		$type = $_FILES["ffile"]["type"];
		$name = $_FILES["ffile"]["name"];
		$size = $_FILES["ffile"]["size"];
		$p = new cSanpham();
		$kq = $p-> AddSanpham ($ten, $gia, $giamgia, $mota, $cty, $file, $name, $type, $size);
		if($kq==1)
		{
			echo "<script>alert('Them du lieu thanh cong')</script>";
			echo header ("refresh:0; url='index.php?Prod'");
		}
		elseif($kq==0)
		{
			echo "<script>alert('Khong the insert')</script>";
		}
		elseif($kq==-1)
		{
			echo "<script>alert('Khong the upload anh')</script>";
		}
		elseif($kq==-2)
		{
			echo "<script>alert('size > 2MB')</script>";
		}
		elseif($kq==-3)
		{
			echo "<script>alert('Khong dung dinh dang')</script>";
		}
		else
		{
			echo "loi gi do";
		}
	}
?>
<body>
	<h2>Quan li san pham - thi cuoi ky</h2>
	<form action="#" method="post" enctype="multipart/form-data">
		<table style="margin: auto; text-align: left">
			<tr>
				<td>Cong ty san xuat</td>
				<td>
					<select name="cboCty">
					<?php
						include("Controller/cCongty.php");
						$comp = new cCongty();
						$table = $comp->xuatAllCongty();
						if (mysql_num_rows($table))
						{
							while ($row = mysql_fetch_assoc($table))
							{
								echo "<option value='".$row["id_congty"]."'>".$row["tencongty"]."</option>";
							}
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nhap Ten san pham</td>
				<td><input type="text" name="txtTenSP" required></td>
			</tr>
			<tr>
				<td>Nhap gia chinh thuc</td>
				<td><input type="text" name="txtGiaSP" required></td>
			</tr>
			<tr>
				<td>Mo ta</td>
				<td><textarea rows="5" cols="22" name="txtMota"></textarea></td>
			</tr>
			<tr>
				<td>Hinh anh</td>
				<td><input type="file" name="ffile" required></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Them" >
					<input type="reset" name="reset" value="Nhap lai">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>