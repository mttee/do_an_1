<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/TemplateHocvien.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Yêu cầu</title>
<!-- InstanceEndEditable -->
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/navigation_bar.css" rel="stylesheet" type="text/css" />
<link href="css/content_left.css" rel="stylesheet" type="text/css" />
<link href="css/content_right.css" rel="stylesheet" type="text/css" />
<link href="css/content_central.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/ketqua1.css" rel="stylesheet" type="text/css" />
<link href="css/yeucau.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="Main">
        <!--Header-->
        <div class="header">
        	<img src="images/Hocvien/header.png" alt="header" />
        </div>
        <!--Điều hướng-->
        <div class="navigation_bar">
        	<div class="Home">
                <a href="#"><img src="images/Hocvien/webdev_0006s_0000_home.png" alt="Home"/></a>
           	</div>
            <ul class="Menu">
                <li>
					<a href="#">Thông báo</a>
				</li>
                <li>
					<a href="#">Giới thiệu</a>
				</li>
                <li>
					<a href="#">Biểu mẫu</a>
				</li>	
                <li>
					<a href="#">Chế độ - chính sách</a>
				</li>
                <li>
					<a href="#">Nội quy</a>
				</li>
                <li>
					<a href="#">Liên hệ</a>
				</li>
          	</ul>
        </div>
        <!--Content-->
        <div class="content">
        	<!--Chức năng trực tuyến-->
        	<div class="content_left">
            	<h3>Chức năng trực tuyến</h3>
           	  	<h4>Tra cứu:</h4>
              	<input type="text" name="tracuu" id="tracuu"/>
                <a href="#">Đăng ký thi lại</a>
				<a href="yeucau.php">Chứng nhận tạm thời</a>
				
            </div>
            <div class="content_right">
           		<!--Tài khoản-->
                <div class="Taikhoan">
                    <h3>Tài khoản</h3>
                    <a href="#">Đổi mật khẩu</a>
                    <a href="#">Đăng xuất</a>
                </div>
                <div class="Chucnang">
                    <h3>Chức năng</h3>
					<a href="#">Thông tin sinh viên</a>
                    <a href="#">Xem lịch học</a>
                    <a href="#">Xem lịch thi</a>
                    <a href="xemketqua.php">Xem kết quả</a>
					<a href="#">Thông tin bảo lưu</a>
                </div>
           	</div>
            <!-- InstanceBeginEditable name="content_central" -->
            <div class="content_central">
              <!--<h3>Yêu cầu cấp chứng chỉ tạm thời</h3>
				<form>
					Mã học viên:<input type="text" name="MHV" disabled/>
					Họ và tên học viên:<input type="text" name="MHV" disabled/>
					Giới tính:<input type="text" name="GT" disabled/>
					Ngày sinh:<input type="text" name="NGS" disabled/>
					Nơi sinh:<input type="text" name="NOS" disabled/>
					Số CMND:<input type="text" name="CMND" disabled/>
					Nơi cấp:<input type="text" name="NC" disabled/>
					Điểm thi trắc nghiệm:<input type="text" name="DTN" disabled/>
					Điểm thi thực hành:<input type="text" name="DTT" disabled/>
					Kết quả:<input type="text" name="KQ" disabled/>
				</form>-->
				<?php
					require('lib/yeucau.php');
				?>
            </div>
            <!-- InstanceEndEditable --></div>
        <!--Footer-->
   	<div class="footer">
   		<img src="images/Hocvien/footer.png" alt="footer"/></div>
	</div>
</body>
<!-- InstanceEnd --></html>
