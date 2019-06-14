<?php ob_start() ?>
<?php           
        //Neu co ton tai ID
        if(isset($_REQUEST["ID"]))
        {
            $connect = mysqli_connect('localhost', 'root', '', 'da_1'); //Ket noi den MySQL
			mysqli_set_charset($connect,"utf8");
            //mysql_query("SET NAMES 'utf8'"); //Hien thi unicode
 
            if($connect)
            {
                mysql_select_db("da_1", $connect); //Chon co so du lieu
 
                if ($_REQUEST["flag"])  //Neu nhan nut cap nhat
                {
                    /*$query ="UPDATE Nhanvien SET TenNhanvien='" . $_POST["txtTennhanvien"] . "',
                    Dienthoai = '". $_POST["txtDienthoai"]."',
                    Email = '". $_POST["txtEmail"]."',
                    Diachi = '". $_POST["txtDiachi"] ."'
                    WHERE MaNhanvien='". $_REQUEST["ID"] . "'";
                     
                    $result = mysql_query($query); //Thuc thi cau lenh
                    if($result)
                    {
                        header("location:nhanvien4edit.php"); //Tro ve trang truoc
                        exit();
                    }*/
                }
                else
                {                 
                    if(isset($_REQUEST['ID']))
                    {
                        $query = "SELECT * FROM bang_co_ban WHERE So_vao_so = '".$_REQUEST['ID']. "'" ;
                         
                        $rowCollection = mysql_query($query);
                        while($row = mysql_fetch_array($rowCollection))
                        {
                            $tennhanvien = $row["Cap_cho"];
                            $email = $row["Email"];
                            $dienthoai = $row["Dienthoai"];
                            $diachi = $row["Diachi"];
                        }
                    }                  
                }
            }
            else
            {      
                die("Khong ket noi duoc database: ". mysql_error());
            }
 
            mysql_close($connect);
        }      
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
</head>
<body>
<form name="form1" method="post" action="edit.php?flag=1&ID=<?= $_REQUEST['ID'] ?>" >
 
    Mã nhân viên: <input name="txtManhanvien" type="text" readonly="true" value="<?= $_REQUEST['ID'] ?>" /> <hr>
    Tên nhân viên: <input name="txtTennhanvien" type="text" value="<?= $tennhanvien ?>" /><hr>
    Email: <input name="txtEmail" type="text" value="<?= $email ?>" /><hr>
    Điện thoại: <input name="txtDienthoai" type="text" value="<?= $dienthoai ?>" /><hr>
    Địa chỉ: <input name="txtDiachi" type="text" value="<?= $diachi ?>" /><hr>
    <input type="submit" name="Submit" value="Cập nhật" />   
</form>
</body>
</html>