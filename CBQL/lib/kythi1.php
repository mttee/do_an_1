<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/My template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/menu_tab.css">
<link rel="stylesheet" type="text/css" href="../css/content.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="header"><!-- begin header --> 
  <img src="../images/webdev_0008s_0000_Layer-2.png" alt="header"/> </div>
<!-- end header -->
<div class="clr"></div>
<div id="menu"> <a id="hinh" href="#"><img src="../images/webdev_0001s_0003_home.png" alt="home"/></a>
  <ul>
    <li><a href="#">Thông báo</a></li>
    <li><a href="#">Kế hoạch</a></li>
    <li><a href="#">Tạo biểu mẫu</a></li>
    <li><a href="#">Hộp thư</a></li>
    <li><a href="#">Chấm thi</a></li>
    <li><a href="../kythi.php">Thông tin</a></li>
  </ul>
</div>
<div id="function">
  <h1>Chức năng trực tuyến</h1>
  <h2>Tìm kiếm thông tin:</h2>
	<input type="text" name="timkiem" id="timkiem"/>
  <ul>
    <li><a href="#">Xếp lớp học</a></li>
    <li><a href="#">Xếp lớp thi</a></li>
    <li><a href="#">Gửi yêu cầu</a></li>
  </ul>
</div>
<!-- InstanceBeginEditable name="content" -->
<?php	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//$nam = $_POST['Nam'];
		//$khoa = $_POST['Khoa'];
		$error = array();
    	if (empty($_POST['Nam']) && empty($_POST['Khoa'])) {
       // $error['Nam'] = "";
		//$K['Khoa']="";
    	} 
		else {
        $pay = $_POST['Nam'];
		$K = $_POST['Khoa'];
    	}
    // Ki?m tra có l?i hay không
   // if (empty($error)) {
       
        // X? lý d? li?u khi không g?p l?i nh?p li?u
    }
		
		
	//}
	
	
?>
<div id="content">
	
	<form method="post" name="truyxuat" action="">
	  <h1>Thông tin về kỳ thi</h1>
		<div id="infor2" style="width: 40%;">
			<ul>
				<li>Năm:</li>
				<select name="Nam">
					<option <?php if (isset($pay) && $pay == "2018") echo "selected = \"selected\"";  ?> value="2018" >2018</option>
					<option <?php if (isset($pay) && $pay == "2017") echo "selected=\"selected\"";  ?> value="2017"  >2017</option>
				</select>
				<li>Khóa:</li>
				<select name="Khoa">
					<option <?php if (isset($K) && $K == "K1") echo "selected = \"selected\"";  ?>  value="K1" >K1</option>
					<option <?php if (isset($K) && $K == "K2") echo "selected = \"selected\"";  ?>  value="K2" >K2</option>
				</select>
				<input type="submit" name="submit" value="Truy xuất"/>
			</ul>
		</div>
		<table border="0">
			<thead>
				<tr>
					<td>Phòng thi</td>
					<td>Ngày thi</td>
					<td>Số lượng</td>
					<td>Khóa</td>
					<td>Cán Bộ</td>
				</tr>
			</thead>
			<tbody>
				<?php
					require_once('C:\xampp\htdocs\CBQL\lib\dbcon.php');
					if(isset($_POST['Nam']) && ($_POST['Khoa']) )
					{
						//$nam = $_POST['Nam'];
						//$khoa = $_POST["Khoa"];
						$sql = "select * from `kythi` where Nam = '$pay' and Khoa = '$K' ";
							$query = mysqli_query($connect,$sql);
							if (mysqli_num_rows($query)>0){
								while ($row = mysqli_fetch_assoc($query)){
					

				?>
				<tr>
					<td><?php echo($row["Phong_thi"])?></td>
					<td><?php echo($row["Ngay_thi"])?></td>
					<td><?php echo($row["So_luong"])?></td>
					<td><?php echo($row["Khoa"])?></td>
					<td><?php echo($row["Can_bo"])?></td>
				</tr>
				<?php
								}
							}
				}
					
	?>
			</tbody>
			
			
		</table>
<?php
require('C:\xampp\htdocs\CBQL\lib\dbcon.php');
require('C:\xampp\htdocs\CBQL/Classes/PHPExcel.php');
if(isset($_POST['export']))
{
	$objExcel = new PHPExcel;
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('ky thi');
	
	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount,'Phòng thi');
	$sheet->setCellValue('B'.$rowCount,'Ngày thi');
	$sheet->setCellValue('C'.$rowCount,'Số lượng');
	$sheet->setCellValue('D'.$rowCount,'Khóa');
	$sheet->setCellValue('E'.$rowCount,'Cán bộ');
	
	//$lp = $lop;
	//$ketqua = $KQ;
	//$sql = "select * from `ketqua` where lop = '$lp' and Ket_qua = '$ketqua'  ";
	$query = mysqli_query($connect,$sql);
	if (mysqli_num_rows($query)>0){
		while ($row = mysqli_fetch_array($query)){
			$rowCount++;
			$sheet->setCellValue('A'.$rowCount,$row['Phong_thi']);
			$sheet->setCellValue('B'.$rowCount,$row['Ngay_thi']);
			$sheet->setCellValue('C'.$rowCount,$row['So_luong']);
			$sheet->setCellValue('D'.$rowCount,$row['Khoa']);
			$sheet->setCellValue('E'.$rowCount,$row['Can_bo']);
		}
		//$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
		$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
		$filename = 'thongtinkythi.xlsx';
		ob_end_clean();
		$objWriter->save($filename);

		header('Content-Disposition: attachment; filename="' . $filename . '"');  
		header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');  
		header('Content-Length: ' . filesize($filename));  
		header('Content-Transfer-Encoding: binary');  
		header('Cache-Control: must-revalidate');  
		header('Pragma: no-cache');  
		readfile($filename);  
		return;

	}
}
?>
		<input type="submit" id="export"  name="export" value="Xuất danh sách"/>
		</form>
	</div>
<!-- InstanceEndEditable -->
<div id="taikhoan">
  <h1>Tài khoản</h1>
  <ul>
  <li><a href="#">Đăng Xuất</a></li>
  <li><a href="#">Đổi mật khẩu</a></li>
  </ul>
</div>
<div id="function2">
  <h1>Chức năng</h1>
  <ul>
    <li><a href="#">Nhập điểm</a></li>
    <li><a href="#">Xem lịch dạy</a></li>
    <li><a href="#">Xem lịch coi thi</a></li>
    <li><a href="#">Báo cáo</a></li>
    <li><a href="#">Danh sách thí sinh</a></li>
	<li><a href="../Truyxuat1.php">Truy xuất kết quả</a></li>
  </ul>
</div>
<div class="footer"> <img src="../images/footer.png" alt="footer" /> </div>
</body>
<!-- InstanceEnd --></html>
