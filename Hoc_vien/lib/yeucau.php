<?php
	require_once('C:\xampp\htdocs\WEB_CNTT\lib\dbcon.php');
	session_start();
?>
<html>
<head>
		<meta charset="utf-8">
		<link href="../css/yeucau.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
			$mahv = $_SESSION['username'];
			$ketqua = "SELECT * FROM `ketqua` where mahv = '$mahv' ";
			$query = mysqli_query($connect, $ketqua);
			if (mysqli_num_rows($query)>0){
				while ($row = mysqli_fetch_assoc($query)){
					?>
	
						<div class="Content_yeucau">
								<h3>Yêu cầu cấp chứng nhận tạm thời</h3>
								<form>
									<div class="thongtincanhan">
										<h4>Thông tin cá nhân</h4>
										<div><p>Mã học viên:</p><input type="text" name="MHV" value="<?php echo($row["mahv"])?>" size="15" disabled/></div>
										<div><p>Họ và tên</p><input type="text" name="MHV" value="<?php echo($row['Ho_ten'])?>" size="40" disabled/></div>
										<!--<div><p>Giới tính:</p><input type="text" name="GT" value="<?php echo($row['Gioi_tinh'])?>" size="5" disabled/></div>-->
										<div><p>Ngày sinh</p><input type="text" name="NGS" value="<?php echo($row['Ngay_sinh'])?>" size="20" disabled/></div>
										<div><p>Nơi sinh</p><input type="text" name="NOS" value="<?php echo($row['Noi_sinh'])?>"size="90" disabled/></div>
										<div><p>Số CMND</p><input type="text" name="CMND" value="<?php echo($row['CMND'])?>" size="15" disabled/></div>
										<div><p>Nơi cấp</p><input type="text" name="NC" value="<?php echo($row['Noi_cap'])?>" size="20" disabled/></div>
									</div>
									<div class="ketqua">
										<h4>Số điểm đạt được</h4>
										<div><p>Điểm thi trắc nghiệm</p><input type="text" name="DTN" value="<?php echo($row['Diem_trac_nghiem'])?>" disabled/></div>
										<div><p>Điểm thi thực hành</p><input type="text" name="DTT" value="<?php echo($row['Diem_thuc_hanh'])?>" disabled/></div>
										<div><p>Kết quả</p><input type="text" name="KQ" value="<?php echo($row['Ket_qua'])?>" disabled/></div>
									</div>
								</form>
								<form name="xacnhan" method="POST" action="yeucau.php">
									<?php
										//session_start();
										$mahv = $_SESSION['username'];
										include('dbcon.php');
										if(isset($_POST["yeucau"]))
										{
											$sql = "INSERT INTO hop_thu (mahv) VALUES ('$mahv')";
										}
									?>
									<div class="Xacnhan">
										<p><input type="checkbox" id="checkbox" name="checkbox" value=""/>Các thông tin của bạn đã chính xác ?</p>
										<input type="submit" id="button" name="yeucau" value="Gửi yêu cầu" onclick="verifybox()"/>
										<script type="text/javascript">  
											function verifybox() 
											{ 
											if (document.xacnhan.checkbox.checked) 
											{ 
											alert("Yêu cầu của bạn đã được gửi. Trung tâm sẽ liên hệ cụ thể với bạn qua điện thoại. Xin cảm ơn!"); 
											} 
											else 
											{ 
											alert("Bạn vẫn chưa check xác nhận thông tin!"); 
											} 
											} 
										</script>
									</div>
								</form>
						<!--<tr>
							<td><?php echo($row["mahv"])?></td>
							<td><?php echo($row['Ho_ten'])?></td>
							<td><?php echo($row['Gioi_tinh'])?></td>
							<td><?php echo($row['Ngay_sinh'])?></td>
							<td><?php echo($row['Noi_sinh'])?></td>
							<td><?php echo($row['CMND'])?></td>
							<td><?php echo($row['Noi_cap'])?></td>
							<td><?php echo($row['Diem_trac_nghiem'])?></td>
							<td><?php echo($row['Diem_thuc_hanh'])?></td>
							<td><?php echo($row['Ket_qua'])?></td>
						</tr>-->
					<?php
				}
			}
		?>
			
	</body>
</html>