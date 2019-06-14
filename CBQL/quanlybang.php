<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/My template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/menu_tab.css">
<link rel="stylesheet" type="text/css" href="css/content.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="header"><!-- begin header --> 
  <img src="images/webdev_0008s_0000_Layer-2.png" alt="header"/> </div>
<!-- end header -->
<div class="clr"></div>
<div id="menu"> <a id="hinh" href="#"><img src="images/webdev_0001s_0003_home.png" alt="home"/></a>
  <ul>
    <li><a href="#">Thông báo</a></li>
    <li><a href="#">Kế hoạch</a></li>
    <li><a href="#">Tạo biểu mẫu</a></li>
    <li><a href="#">Hộp thư</a></li>
    <li><a href="#">Chấm thi</a></li>
    <li><a href="kythi.php">Thông tin</a></li>
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
	require('lib/dbcon.php');
	if(isset($_POST['them']))
	{
		$capcho = $_POST['capcho'];
		$sinhngay = $_POST['sinhngay'];
		$noisinh = $_POST['noisinh'];
		$DTN = $_POST['DTN'];
		$DTH = $_POST['DTH'];
		$ngaycobang = $_POST['Ngaycobang'];
		$sohieu = $_POST['sohieu'];
		$sovaoso = $_POST['sovaosoCCC'];
		$sql = "INSERT INTO bang_co_ban (Cap_cho,Sinh_ngay,Noi_sinh,Diem_trac_nghiem,Diem_thuc_hanh,Ngay_co_bang,So_hieu,So_vao_so)
		VALUES('$capcho','$sinhngay','$noisinh','$DTN','$DTH','$ngaycobang','$sohieu','$sovaoso')";
		if (mysqli_query($connect, $sql)) 
		{
			echo "<script>";
			echo "alert('Thêm thông tin bằng vào CSDL thành công!');";    
			echo "</script>";   
		}
		else 
		{
			echo "<script>";
			echo "alert('Có lỗi trong quá trình thêm. Vui lòng kiểm tra lại!');";    
			echo "</script>";   
		}
	}
?>
<div class="conten_central">
	<div class="tab">
	  <button class="tablinks active">Thêm</button>
	  <button class="tablinks">Sửa</button>
	  <button class="tablinks">Xóa</button>
	</div>
		<div id="Thêm" class="tabcontent">
			<h3>Thêm</h3>
			<form method="post" name="them_bang" action="">
				<div class="them">
					<p>Cấp cho:</p>
					<input type="text" name="capcho"? onkeyup="check()">
					<p>Sinh ngày:</p>
					<input type="text" name="sinhngay"? onkeyup="check()">
					<p>Nơi sinh:</p>
					<input type="text" name="noisinh"? onkeyup="check()">
					<p>Điểm trắc nghiệm:</p>
					<input type="text" name="DTN"? onkeyup="check()">
					<p>Điểm thực hành:</p>
					<input type="text" name="DTH"? onkeyup="check()">
					<p>Ngày có bằng:</p>
					<input type="text" name="Ngaycobang"? onkeyup="check()">
					<p>Số hiệu:</p>
					<input type="text" name="sohieu"? onkeyup="check()">
					<p>Số vào sổ cấp chứng chỉ:</p>
					<input type="text" name="sovaosoCCC"? onkeyup="check()">
				</div>
				<input type="submit" id="them" name="them" value="Thêm bằng"/>
			</form>
		</div>
		<div id="Sửa" class="tabcontent">
			<h3>Sửa</h3>
			<form method="post" name="tim" action=''>
				<div class="tim">
					<input type="text" name="TK_ten" size="28px"/>
					<input type="submit" name="bt_tim" value="Tìm"/>
				</div>
			</form>
			<table name='table' border="0">
			<?php
				if(isset($_POST['bt_tim']))
				{
					$TK_ten = $_POST['TK_ten'];
					$sql = "SELECT * FROM bang_co_ban WHERE Cap_cho = '$TK_ten'";
					$query = mysqli_query($connect, $sql);
					if (mysqli_num_rows($query)>0){
					while ($row = mysqli_fetch_assoc($query)){
			?>
				<thead>
				<tr>
					<td>Cấp cho</td>
					<td>Sinh ngày</td>
					<td>Nới sinh</td>
					<td>Điểm trắc nghiệm</td>
					<td>Điểm thực hành</td>
					<td>Ngày có bằng</td>
					<td>Số hiệu</td>
					<td>Số vào sổ</td>
					<td></td>
				</tr>
			</thead>
			<tbody>
						<!--<tr>
							<td><?php echo($row["Cap_cho"])?></td>
							<td><?php echo($row["Sinh_ngay"])?></td>
							<td><?php echo($row["Noi_sinh"])?></td>
							<td><?php echo($row["Diem_trac_nghiem"])?></td>
							<td><?php echo($row["Diem_thuc_hanh"])?></td>
							<td><?php echo($row["Ngay_co_bang"])?></td>
							<td><?php echo($row["So_hieu"])?></td>
							<td><?php echo($row["So_vao_so"])?></td>
							<td><a href='lib/edit.php?  ID = "<?php $row["So_vao_so"]?>"'> Edit </a></td>
						</tr>-->
				<?php           
            
                $chuoi = "<tr>";
                $chuoi .= "<td>".$row['Cap_cho']."</td>";
                $chuoi .= "<td>".$row['Sinh_ngay']."</td>";
                $chuoi .= "<td>".$row['Noi_sinh']."</td>";
                $chuoi .= "<td>".$row['Diem_trac_nghiem']."</td>";
                $chuoi .= "<td>".$row['Diem_thuc_hanh']."</td>";
				$chuoi .= "<td>".$row['Ngay_co_bang']."</td>";
				$chuoi .= "<td>".$row['So_hieu']."</td>";
				$chuoi .= "<td>".$row['So_vao_so']."</td>";
                $chuoi .= "<td><a href='lib/edit.php'? ID=". $row["So_vao_so"] . "'> Edit </a></td>";
                $chuoi .= "</tr>";
                echo $chuoi;
            }
        ?>
			<?php
					}
				
				}
			//}
				
			
			?>
			</tbody>
		</table>
		</div>

		<div id="Xóa" class="tabcontent">
			<h3>Xóa</h3>
			
	</div> 
</div>
<script type="text/javascript">
    var buttons = document.getElementsByClassName('tablinks');
    var contents = document.getElementsByClassName('tabcontent');
    function showContent(id){
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }
        var content = document.getElementById(id);
        content.style.display = 'block';
    }
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(){
            var id = this.textContent;
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }
            this.className += " active";
            showContent(id);
        });
    }
    showContent('Thêm');
</script>
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
	<li><a href="Truyxuat1.php">Truy xuất kết quả</a></li>
  </ul>
</div>
<div class="footer"> <img src="images/footer.png" alt="footer" /> </div>
</body>
<!-- InstanceEnd --></html>
