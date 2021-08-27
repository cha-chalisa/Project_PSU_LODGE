<!DOCTYPE html> /*หน้าตาของเว็บ น.ส.สาธนี เดิมชัย 6130613016 */
<html lang="zxx">

    <title>PSU LODGE</title>

    <link
            href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap"
            rel="stylesheet">
    
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/style.css">
    <link href="http://www.localhost/Project/login.php">


<body>
   
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="index.html"><img src="images/12.jpg" alt="" width = "70px" height = "70px"></a>
                </div>
                <div class="nav-right">
                    <a href="http://www.localhost/Project/login.php" class="primary-btn">Staff</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="#">Rooms</a></li>
                        <li><a href="http://www.localhost/Project/contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>

    <div class="hero-area set-bg other-page" data-setbg="images/3.jpg">
    </div>
    
    <section class="search-filter other-page-filter">
        <div class="container">
            <div class="row check-form">
                
                <div class="col-lg-12">
                    <h1><font color="white">
                        ROOM STATUS 
                    </font></h1>
                
                        <?php //การแสดงเลขห้องและสถานะของห้อง น.ส.ชาลิสา เพ็ชรสีทอง 6130613050
                            $connect = mysqli_connect("localhost","root","","class");
                            $sql = 'SELECT RoomID,RoomStatus FROM room';
                            $result = mysqli_query($connect,$sql);

                            if(!$result){
                                echo mysqli_error().'<br>';
                                die('Can not access database!');
                            }else{


                                echo '<table  bgcolor="cadetblue" border="3" cellspacing="0" cellpadding="30" align="center">';
                                echo '<tr>';
                                
                                while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
                                    echo '<td>'.$row[0].'<br>'.$row[1].'</td>';
                                }


                                echo '</tr>';
                                echo '</table>';
                            }
                        ?>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="room-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="images/twin1.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2>Twin Room</h2>
                            </div>
                            <p>The best room of the hotel. Prices start at 790 baht / night.</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>High Wi-fii</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="images/king1.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="ri-text left-side">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2>King Room</h2>
                            </div>
                            <p>The best room of the hotel. Prices start at 790 baht / night.</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>High Wi-fii</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="images/room1.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2>Luxury Room </h2>
                            </div>
                            <p>The best room of the hotel. Prices start at 790 baht / night.</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>High Wi-fii</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
           
    </section>
    <div class="container">
    <div class="box">
            <p align="center">
            <input type='reset' value= 'Booking Now!!' class="btn btn-warning" onClick="window.location='http://www.localhost/Project/booking.php';" />
        
        </p>
            <br><br>
        </div>
</div>
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <img src="images/12.jpg" alt="" width = "120px" height = "120px"></a>
                        </div>
                        <p>Warm welcome to PSU Lodge, Phuket.</p>
                        <p>Enjoy your leisure time here.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Newsletter</h5>
                        <div class="newslatter-form">
                            <input type="text" placeholder="Your Email Here">
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Contact Info</h5>
                        <ul>
                            <li><img src="img/placeholder.png" alt="">80 Moo1 Vichisongkram Rd., Prince of Songkla University,Phuket</li>
                            <li><img src="img/phone.png" alt="">076 276 300</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
  
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