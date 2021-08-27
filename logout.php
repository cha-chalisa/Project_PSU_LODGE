<?php //หน้า log out ใช้ในการออกจากระบบ น.ส.ปวันรัตน์ สร้างเมือง 6130613051
 setcookie("User","",time()-360);
 header("location:login.php");
?>