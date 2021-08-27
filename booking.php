<html> หน้าตาของเว็บ /*นางสาวสาธนี เดิมชัย 6130613016*/
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap"
            rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

<body>
        
<div id="preloder">
        <div class="loader"></div>
    </div>


    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                <a href="index.html"><img src= "images/12.jpg" alt="" width = "70px" height = "70px"></a>
                  
                </div>
                <div class="nav-right">
                    <a href="http://www.localhost/Project/index.html" class="primary-btn">Cancle</a>
                </div>
            </div>
        </div>
    </header>

    <div class="hero-area set-bg other-page" data-setbg="images/4.jpg">
    

    
    <div class="container update"> 
    <h1 align="center">-- BOOKING --</h1>

    
 
    <?php // page booking เพื่อใช้ในการที่ให้ลูกค้าจองออนไลน์ผ่านระบบ โดยการกรอกรายละเอียดต่างๆ น.ส.ปวันรัตน์ สร้างเมือง 6130613051
    $connect = mysqli_connect("localhost","root","","class");

    $sql='SELECT RoomID FROM room WHERE RoomStatus IS NULL';
	$result=mysqli_query($connect,$sql);
	$numfields= mysqli_num_fields($result);
	if(!$result){
		echo'<b>Error</b>'.mysqli_errno().':'.mysqli_error().'<br>';
	}else{
        echo '<form method="post" action="booking2.php">'."\n";
        echo '<table  class="tableBook" border="3" cellspacing="0" cellpadding="20"  align="center">';



        echo '<tr>';
        echo '<td>First name</td>';
        echo '<td>';
        echo '<input type="text" name="fname" value=""></td>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Last name</td>';
        echo '<td>';
        echo '<input type="text" name="lname" value=""></td>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Email</td>';
        echo '<td>';
        echo '<input type="email" name="email" value=""></td>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Telephone</td>';
        echo '<td>';
        echo '<input type="text" name="tel" value=""></td>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Amount</td>';
        echo '<td>';
        echo '<input type="text" name="amount" value=""></td>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>DateCheckIn</td>';
        echo '<td>';
        echo '<input type="date" name="dateIn" value=""></td>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>DateCheckOut</td>';
        echo '<td>';
        echo '<input type="date" name="dateOut" value=""></td>';
        echo '</td>';
        echo '</tr>';


        echo '<tr>';
        echo '<td>RoomID</td>';
        echo '<td>';
            echo '<select type="select" name="roomid">';
            while ($row = mysqli_fetch_array($result)){
                echo '<option name="roomid" value="'.$row[0].'">'.$row[0].'</option>';
             } 
            echo '</select>';
            echo '</td>';
			echo '</tr>'."\n";
			
			
        echo '</table>';

		echo '<td><input class="btn-warning" name="book" type="submit" value="booking"></td>'."\n";
		echo '</form>';
	}

mysqli_close($connect);
?>

</div>


<div class="col-lg-4">
                    <div class="info-box">
                        <img src="images/12.jpg" alt="" width = "80px" height = "80px">
                        <ul>
                            <li>80 Moo1 Vichisongkram Rd., <br /> Prince of Songkla University,Phuket</li>
                            <li>076 276 300</li>
                            <li>psulodge@gmail.com</li>
                            <li>Everyday: 09:00 - 22:00</li>
                        </ul>
                        <div class="social-links">
                            <a href="https://www.facebook.com/psulodge/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/psulodge/?hl=th"><i class="fa fa-instagram"></i></a>
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
<html>