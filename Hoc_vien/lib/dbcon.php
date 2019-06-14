<?php
//tạo kết nối
$connect = mysqli_connect('localhost', 'root', '', 'da_1');
mysqli_set_charset($connect,"utf8");
//Kiểm tra kết nối
/*if ($connect->connect_error){
	die("Kết nối thất bại do: ".$connect->connect_error);
}
else {
	echo("Kết nối thành công! ");
}*/
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
}
?>*/
