<?php //ใช้ตรวจสอบในส่วนของ staffId และ password ว่าตรงกันหรือเป็นคนเดียวกันหรือไม่ น.ส.ปวันรัตน์ สร้างเมือง 6130613051
 $connect = mysqli_connect("localhost", "root","", "class");
$sql ='select * from staff where StaffID ="'.$_POST['staffID'].'" AND Password
="'.$_POST['password'].'"';
 $result = mysqli_query($connect, $sql);
 $numrows = mysqli_num_rows($result);
if ($numrows == 0) {
echo "please check username and password";

}else {
while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) {
if ($row[5]== "Admin"){
 setcookie("User",$row[1],time()+60); // expires after 60 seconds
 header("location:admin.php");
}
else {
 setcookie("User",$row[1],time()+60);
 header("location:user.php");
}
}
 mysqli_close($connect);
} 
?>
