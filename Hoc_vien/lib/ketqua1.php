<?php
	require_once('C:\xampp\htdocs\WEB_CNTT\lib\dbcon.php');
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kết quả thí sinh</title>
<link href="../css/ketqua1.css" rel="stylesheet" type="text/css" />
</head>

<body>
	
	<!--<div class="Content">
			<h3>Kết quả thi</h3>
			<h3>Họ và tên:</h3>
			<div class="Ketqua">
				<p>Mã học viên:</p>
				<p>Giới tính:</p>
				<p>Ngày sinh:</p>
				<p>Nơi sinh:</p>
				<p>CMND:</p>
				<p>Nơi cấp:</p>
				<p>Điểm thi trắc nghiệm:</p>
				<p>Điểm thi thực hành:</p>
				<p>Kết quả:</p>-->
			<?php
				$mahv = $_SESSION['username'];
				$ketqua = "SELECT * FROM `ketqua` where mahv = '$mahv' ";
				$query = mysqli_query($connect, $ketqua);
				if (mysqli_num_rows($query)>0){
					while ($row = mysqli_fetch_assoc($query)){
						?>
							<div class="Content">
								<h3>Kết quả học tập</h3>
								<h2><?php echo($row['Ho_ten'])?></h2>
								<div class="Ketqua">
									<div class="chitiethv">
										<h4>Mã học viên:&nbsp; </h4> 
										<p><?php echo($row["mahv"])?></p>
									</div>
									<div class="chitiethv">
										<h4>Giới tính:&nbsp; </h4>
										<p><?php echo($row['Gioi_tinh'])?></p>
									</div>
									<div class="chitiethv">
										<h4>Ngày sinh:&nbsp; </h4>
										<p><?php echo($row['Ngay_sinh'])?></p>
									</div>
									<div class="chitiethv">
										<h4>Nơi sinh:&nbsp; </h4>
										<p><?php echo($row['Noi_sinh'])?></p>
									</div>
									<div class="chitiethv">
										<h4>CMND:&nbsp; </h4>
										<p><?php echo($row['CMND'])?></p>
									</div>
									<div class="chitiethv">
										<h4>Nơi cấp:&nbsp; </h4>
										<p><?php echo($row['Noi_cap'])?></p>
									</div>
									<div class="chitiethv">
										<h4>Điểm thi trắc nghiệm:&nbsp; </h4>
										<p><?php echo($row['Diem_trac_nghiem'])?></p>
									</div>
									<div class="chitiethv">
										<h4>Điểm thi thực hành:&nbsp; </h4>
										<p><?php echo($row['Diem_thuc_hanh'])?></p>
									</div>
									<div class="chitiethv">
										<h4>Kết quả:&nbsp; </h4>
										<p><?php echo($row['Ket_qua'])?></p>
									</div>
								</div>
							</div>
						<?php
					}
				}
			?>
	
</body>
</html>