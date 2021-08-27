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
                <a href="http://www.localhost/Project/delete.php"><img src= "images/12.jpg" alt="" width = "70px" height = "70px"></a>
                  
				</div>
				<div class="nav-right">
                    <a href="http://www.localhost/Project/logout.php" class="primary-btn">Log Out</a>
                </div>
            </div>
        </div>
    </header>
<div class="container update">
<h1 align="center">Delete </h1>


<?php //ข้อมูลที่เลือกไว้จะถูกลบออกจาก database ของ table นั้นๆ น.ส.ชาลิสา เพ็ชรสีทอง 6130613050
    $name = $_POST['name'];
    $id = $_POST['id'];
    $connect = mysqli_connect("localhost","root","","class");
    if($name==="staff"){
        $sql ='DELETE From staff WHERE StaffID='.$id.'';
        $result = mysqli_query($connect,$sql);
        if (!$result) {
            echo mysqli_error().'<br>';
            echo 'Can not delete database!';
        }else{
            echo "Complete";
        }
    }else if($name==="customer"){
        $sql ='DELETE From customer WHERE CusID='.$id.'';
        $result = mysqli_query($connect,$sql);
        if (!$result) {
            echo mysqli_error().'<br>';
            echo 'Can not delete database!';

        }else{
            echo "Complete";
        }
    }else if($name==="checkin"){
        $sql ='DELETE From checkin WHERE CheckINID='.$id.'';
        $result = mysqli_query($connect,$sql);
        if (!$result) {  
            echo mysqli_error().'<br>';
            echo 'Can not delete database!';

        }else{
            echo "Complete";
        }
    }else if($name==="checkout"){
        $sql ='DELETE From checkout WHERE CheckOUTID='.$id.'';
        $result = mysqli_query($connect,$sql);
        if (!$result) {            
            echo mysqli_error().'<br>';
            echo 'Can not delete database!';

        }else{
            echo "Complete";
        }
    }
    else{
        echo 'Can not connect to database!';
    }

	mysqli_close($connect);

?>
<br><br><br>
<div class="box">
            <p align="center">
            <input type='reset' value= 'Back' class="btn btn-warning" onClick="window.location='http://www.localhost/Project/delete.php';" />
        
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