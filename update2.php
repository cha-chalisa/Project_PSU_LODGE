<html> /*หน้าตาของเว็บ 6130613016 */
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
<?php //การกรอกข้อมูลที่ต้องการเปลี่ยนแปลง ของ table room น.ส.ปวันรัตน์ สร้างเมือง 6130613051
$connect = mysqli_connect("localhost","root","","class");

if(!isset($smtUpdate)){
	$sql='select*from room where RoomID = "'.$_POST['id'].'"';
	$result=mysqli_query($connect,$sql);
	$numrows=mysqli_num_rows($result);
	$numfields= mysqli_num_fields($result);
	if(!$result){
		echo'<b>Error</b>'.mysqli_errno().':'.mysqli_error().'<br>';
	}else{
		
	
		
			echo '<form method="post" action="update3.php">'."\n";
			echo '<table class="tableUpdate" border="3" cellspacing="5" cellpadding="15" align=center >';
			while ($row = mysqli_fetch_array($result)){
			echo '<tr>';

				
				echo '<td>RoomID</td>';
				echo '<td><input type="text" name="roomID"   value="'.$row[0].'" readonly/></td>';
                echo '</tr>';
                echo '<tr>';
				echo '<td>RoomStatus</td>';
				echo '<td>';
				echo '<select type="select" name="roomstatus">';
				echo '<option  value='.NULL.'>'."NULL".'</option>';
				echo '<option  value="unavailable">'.unavailable.'</option>';
				echo '</select>';
				echo '</td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td>Floor</td>';
				echo '<td><input type="text" name="floor"    value="'.$row[2].'" readonly/></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td>Price</td>';
				echo '<td><input type="text" name="price"    value="'.$row[3].'" readonly/></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td>CustomerID</td>';
				echo '<td><input type="text" name="cusid"       value="'.$row[4].'"></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td>StaffID</td>';
				echo '<td>';
				echo '<select type="select" name="staffid">';
				echo '<option name="staffid" value="101">'."101".'</option>';
				echo '<option name="staffid" value="102">'."102".'</option>';
				echo '<option name="staffid" value="103">'."103".'</option>';				
				echo '<option name="staffid" value='.NULL.'>'."NULL".'</option>';
				echo '</select>';
				echo '</td>';				
				echo '</tr>';

		}
		
		echo '</table>';
		echo '<input class="btn-update" name="update" type="submit" value="update"">'."\n";
		echo '</form>';
		mysqli_close($connect);
	}
}

?>
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