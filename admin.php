<?php  //page admin ใช้ตรวจสอบของระบบ login น.ส.ปวันรัตน์ สร้างเมือง 6130613051
if($_COOKIE['User'] == "")
{
echo "Please Login!";
exit();
}
echo "Welcome ". $_COOKIE["User"];
?>
<html>
<br>
<a href="logout.php">Logout</a> and Back to first page
</html>