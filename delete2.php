<html> /*หน้าตาของเว็บ น.ส.สาธนี เดิมชัย 6130613016 */
<head><title>Delete a Row</title></head>
<script language="JavaScript">
function confirmDelete(){
    return confirm('Are you sure you want to delete this?');
}
</script>
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
                <a href="http://www.localhost/Project/search.php"><img src= "images/12.jpg" alt="" width = "70px" height = "70px"></a>
                  
				</div>
				<div class="nav-right">
                    <a href="http://www.localhost/Project/logout.php" class="primary-btn">Log Out</a>
                </div>
            </div>
        </div>
    </header>
<div class="container update">
<h1 align="center">DELETE! </h1>

<?php //การแสดงข้อมูลทั้งหมด ใน table ที่เลือกมา เพื่อต้องการที่จะลบ น.ส.ชาลิสา เพ็ชรสีทอง 6130613050
$search=$_POST['table'];
$connect = mysqli_connect("localhost","root","","class");
if(!isset($smtDelete)){
$sql = 'SELECT * FROM '.$search.'';
$result = mysqli_query($connect,$sql);
$numrows=mysqli_num_rows($result);
$numfields= mysqli_num_fields($result);
$table = array(NULL);
if(!$result){
    echo '<b>Error</b>'.mysqli_errno().':'.mysqli_error().'<br>';
}else if($numrows==0){
    echo '<b>Query executed successfully but no row returns!</b>';
}else{

echo '<h1 id="headSearch">'.$search.' Table</h1>';

    if($search==="staff"){
        $table = array("StaffId","Password","SFirstname","SLastname","delete");    
    }else if($search==="customer"){
        $table = array("CustomerId","CFirstname","CLastname","Email","Telephone","CAmount","DateCI","DateCO","RoomID","delete");    
    }else if($search==="checkin"){
        $table = array("CheckINID","DateCI","TimeCI","Amount","RoomId","CusId","StaffId","delete");    
    }else if($search==="checkout"){
        $table = array("CheckOutID","DateCO","TimeCO","RoomId","CusId","StaffId","delete");    
    }
    else{
        echo 'Can not connect to '.$search.'';
    }
    echo '<form name="search" action="delete3.php" method="post">';
    echo '<table  class="tableSearch" border="3" cellspacing="0" cellpadding="10" align="center">';
    echo '<tr>';
    for($i=0;$i<sizeof($table);$i++){
        echo '<td>';
        echo "$table[$i]";
        echo '</td>';
    }
    echo '</tr>';

    while ($row = mysqli_fetch_array($result)){
        echo '<form name="frmUpdate'.$row[0].'" method="post" action="delete3.php">'."\n";
        echo '<tr>';
        for($i=0;$i<$numfields;$i++){
            
            echo '<td>';
            echo $row[$i];
            echo '&nbsp';
            echo '</td>'."\n";
           
        }
        echo '<input type="hidden" name="name" value="'.$search.'">'."\n";
        echo '<input type="hidden" name="id" value="'.$row[0].'">'."\n";
        echo '<td><input class="btn-warning" name="delete" type="submit" value="delete" onClick="return confirmDelete();"></td>'."\n";
        echo '</tr>'."\n";
        echo '</form>';
    }
echo '</table>';

}}
mysqli_close($connect);
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