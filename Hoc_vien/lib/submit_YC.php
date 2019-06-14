<?php
	session_start();
	$mahv = $_SESSION['username'];
    include('dbcon.php');
    if(isset($_POST["yeucau"]))
    {
        $sql = "INSERT INTO hop_thu (mahv) VALUES ('$mahv')";
    }
?>






<!--<?php
session_start();
//Gọi file connection.php ở bài trước
require_once('C:\xampp\htdocs\WEB_CNTT\lib\dbcon.php');
	$mahv = $_SESSION['username'];

	$sql = "INSERT INTO hop_thu (mahv) VALUES ('$mahv')";
	$query = mysqli_query($connect,$sql);
		if (mysqli_query($connect, $sql)) {
    	echo "Thêm record thành công";
		} 
		else {
    	echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
		}

?>-->