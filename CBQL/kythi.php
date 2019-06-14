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
<form method="post" name="truyxuat" action="lib/kythi1.php">	
	<div id="content" style="height: 450px";>
	  <h1>Thông tin về kỳ thi</h1>
		<div id="infor2" style="width: 40%;">
			<ul>
				<li>Năm:</li>
				<select name="Nam">
					<option <?php // if (isset($pay) && $pay == "2018") echo "selected = \"selected\"";  ?> value="2018" >2018</option>
					<option <?php //if (isset($pay) && $pay == "2017") echo "selected=\"selected\"";  ?> value="2017" >2017</option>
				</select>
				<li>Khóa:</li>
				<select name="Khoa">
					<option <?php // if (isset($K) && $K == "K1") echo "selected = \"selected\"";  ?>  value="K1" >K1</option>
					<option <?php //if (isset($K) && $K == "K2") echo "selected = \"selected\"";  ?>  value="K2" >K2</option>
				</select>
				<input type="submit" name="submit" value="Truy xuất"/>
			</ul>
		</div>
	</div>
</form>

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
