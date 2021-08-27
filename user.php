<?php //เมื่อ log in เสร็จเรียบร้อยแล้ว ก็จะให้เข้าไปใช้งาน หน้า search น.ส.ปวันรัตน์ สร้างเมือง 6130613051
if($_COOKIE['User'] == "")
{
echo "Please Login!";
exit();
}else{
    echo "Welcome ". $_COOKIE["User"];
    header("location:search.php");
}
?>


<html>
<br>
 <a href="logout.php">Logout</a> and Back to first page
</html>