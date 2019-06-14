<?php
//tạo kết nối
$connect = mysqli_connect('localhost', 'root', '', 'da_1');
mysqli_set_charset($connect,"utf8");
//Kiểm tra kết nối
if ($connect->connect_error){
	die("Kết nối thất bại do: ".$connect->connect_error);
}
else {
	echo("Kết nối thành công! ");
}
//Truy vần lấy danh sách kết quả
//$ketqua = "SELECT * FROM `ketqua`";
//$query = mysqli_query($connect, $ketqua);

/*if (mysqli_num_rows($query)>0){
	while ($row=mysqli_fetch_assoc($query)){
		echo("<pre>");
		print_r($row);
		echo("</pre>");
	}
}*/
//Vòng lặ lấy dữ liệu từng dòng
/*while($row = mysqli_fetch_assoc($query))
{
	echo($row["SBD"]);
	echo($row["Ho_ten"]);
	echo($row["Gioi_tinh"]);
	echo($row["Ngay_sinh"]);
	echo($row["Noi_sinh"]);
	echo($row["CMND"]);
	echo($row["Noi_cap"]);
	echo($row["Diem_trac_nghiem"]);
	echo($row["Diem_thuc_hanh"]);
	echo($row["Ket_qua"]."<br>");
}*/
/*?>
<html>
	<head>
		<meta charset="utf-8">
		<link href="../css/content_central.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<table class="Table_ketqua" border="1">
			<thead>
				<tr>
					<td>SBD</td>
					<td>Họ và tên</td>
					<td>Giới tính</td>
					<td>Ngày sinh</td>
					<td>Nơi sinh</td>
					<td>CMND</td>
					<td>Nơi cấp</td>
					<td>Điểm trắc nghiệm</td>
					<td>Điểm thực hành</td>
					<td>Kết quả</td>
				</tr>
			</thead>
			<tbody>
				<?php
					if (mysqli_num_rows($query)>0){
						while ($row = mysqli_fetch_assoc($query)){
							?>
								<tr>
									<td><?php echo($row["SBD"])?></td>
									<td><?php echo($row['Ho_ten'])?></td>
									<td><?php echo($row['Gioi_tinh'])?></td>
									<td><?php echo($row['Ngay_sinh'])?></td>
									<td><?php echo($row['Noi_sinh'])?></td>
									<td><?php echo($row['CMND'])?></td>
									<td><?php echo($row['Noi_cap'])?></td>
									<td><?php echo($row['Diem_trac_nghiem'])?></td>
									<td><?php echo($row['Diem_thuc_hanh'])?></td>
									<td><?php echo($row['Ket_qua'])?></td>
								</tr>
							<?php
						}
					}
				?>
			
			</tbody>
		</table>
	</body>
</html>
*/

 
