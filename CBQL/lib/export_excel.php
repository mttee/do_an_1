<?php
require('C:\xampp\htdocs\CBQL\lib\dbcon.php');
require('C:\xampp\htdocs\CBQL/Classes/PHPExcel.php');
if(isset($_POST['export']))
{
	$objExcel = new PHPExcel;
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('Kết quả');
	
	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount,'Mã học viên');
	$sheet->setCellValue('B'.$rowCount,'Họ và tên');
	$sheet->setCellValue('C'.$rowCount,'Giới tính');
	$sheet->setCellValue('D'.$rowCount,'Ngày sinh');
	$sheet->setCellValue('E'.$rowCount,'Điểm trắc nghiệm');
	$sheet->setCellValue('F'.$rowCount,'Điểm thực hành');
	$sheet->setCellValue('G'.$rowCount,'Kết quả');
	
	$lop = $_POST["lop"];
	$KQ = $_POST["KQ"];
	$sql = "select * from `ketqua` where lop = '$lop' and Ket_qua = '$KQ'  ";
		$query = mysqli_query($connect,$sql);
		if (mysqli_num_rows($query)>0){
			while ($row = mysqli_fetch_assoc($query)){
				$rowCount++;
				$sheet->setCellValue('A'.$rowCount,$row['mahv']);
				$sheet->setCellValue('B'.$rowCount,$row['Ho_ten']);
				$sheet->setCellValue('C'.$rowCount,$row['Gioi_tinh']);
				$sheet->setCellValue('D'.$rowCount,$row['Ngay_sinh']);
				$sheet->setCellValue('E'.$rowCount,$row['Diem_trac_nghiem']);
				$sheet->setCellValue('F'.$rowCount,$row['Diem_thuc_hanh']);
				$sheet->setCellValue('G'.$rowCount,$row['Ket_qua']);
			}
			$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
			$filename = 'ketqua.xlsx';
			$objWriter->save($filename);
			
			header('Content-Disposition: attachment; filename="' .$filename. '"');
			header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheettml.sheet');
			header('Content-Length: ' . filesize($filename));
			header('Content-Transfer-Encoding: binary');
			header('Cache-Control: must-revalidate');
			header('Pragma: no-cache');
			readfile($filename);
			return;
			
		}
}
?>







