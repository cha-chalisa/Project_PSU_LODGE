<html> /*หน้าตาของเว็บ น.ส.สาธนี เดิมชัย 6130613016 */
<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap"
            rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
<body class="bg">
	
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                <a href="http://www.localhost/Project/update.php"><img src= "images/12.jpg" alt="" width = "70px" height = "70px"></a>
                  
				</div>
				<div class="nav-right">
                    <a href="http://www.localhost/Project/logout.php" class="primary-btn">Log Out</a>
                </div>
            </div>
        </div>
    </header>
<div class="container update">
<h1 align="center">UPDATE </h1>


<?php //การนำข้อมูลเสร็จเรียบร้อยแล้ว ทำการ update แทนข้อมูลเก่า น.ส.ปวันรตน์ สร้างเมือง 6130613051

    $roomID   = $_POST['roomID'];
    $status   = $_POST['roomstatus'];
    $floor    = $_POST['floor'];
    $price    = $_POST['price'];
    $cusid    = $_POST['cusid'];
    $staffid = $_POST['staffid'];

    $connect = mysqli_connect("localhost","root","","class");
    if(!$cusid){
        $sql='UPDATE room SET   RoomStatus = "'.$status.'",
                            RoomFloor = "'.$floor.'",
                            Price = "'.$price.'",
                            CusID = "'.NULL.'",
                            StaffID = "'.$staffid.'" 
          where RoomID = "'.$roomID.'" ';

    }else{
        $sql='UPDATE room SET   RoomStatus = "'.$status.'",
                            RoomFloor = "'.$floor.'",
                            Price = "'.$price.'",
                            CusID = "'.$cusid.'",
                            StaffID = "'.$staffid.'" 
          where RoomID = "'.$roomID.'" ';
    }

    $result = mysqli_query($connect,$sql);
	if (!$result) {
        echo mysqli_error().'<br>';
        die('Can not access database!');
	}else{
		echo "Congratulations! The record is updated";
	}
	mysqli_close($connect);

?>
<br><br><br>
<div class="box">
            <p align="center">
            <input type='reset' value= 'Back' class="btn btn-warning" onClick="window.location='http://www.localhost/Project/update.php';" />
        
        </p>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>	