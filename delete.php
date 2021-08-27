<html> /*หน้าตาของเว็บ น.ส.สาธนี เดิมชัย 6130613016 */

<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap"
            rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
<body class="bg">
	

	<div id="preloder">
        <div class="loader"></div>
    </div>


    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                <a href="#"><img src= "images/12.jpg" alt="" width = "70px" height = "70px"></a>
                  
				</div>
				<div class="nav-right">
                    <a href="http://www.localhost/Project/logout.php" class="primary-btn">Log Out</a>
                </div>
				<nav class="main-menu mobile-menu">
                    <ul>
                    
                    <li ><a href="http://www.localhost/Project/search.php">Search</a></li>
                    <li class="active"><a href="#">Delete</a></li>

                        <li ><a href="http://www.localhost/Project/update.php">Update</a></li>
                        <li><a href="http://www.localhost/Project/checkIn.php">Check In</a></li>
                        <li><a href="http://www.localhost/Project/checkOut.php">Check Out</a></li>
                    </ul>
                </nav>
				
            </div>
        </div>
    </header>

    
<div class="container update">
    <h1 align="center">DELETE! </h1>

    <div class="search">
        <div>
<?php // การแสดง table ที่สามารถที่จะลบได้ เพื่อให้เลือก เมื่อต้องการไปลบข้อมูลใน table นั้นๆ น.ส.ชาลิสา เพ็ชรสีทอง 6130613050
        echo '<form name="search" action="delete2.php" method="post">';
echo '<input type="submit" class="btn-search" name="table" value="staff">';
echo '<input type="submit" class="btn-search" name="table" value="customer">';

echo '</form>';
?>
        </div>
        <div>
<?php
        echo '<form name="search" action="delete2.php" method="post">';
        echo '<input type="submit" class="btn-search" name="table" value="checkin">';
        echo '<input type="submit" class="btn-search" name="table" value="checkout">';
        echo '</form>';
        ?>
        </div>

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