<!DOCTYPE html> /*หน้าตาของเว็บ น.ส.สาธนี เดิมชัย 6130613016 */
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PSU LODGE</title>

    
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

  
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    
    <div id="preloder">
        <div class="loader"></div>
    </div>

  
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="index.html"><img src="images/12.jpg" alt="logo" width = "70px" height = "70px"></a>
                </div>
                <div class="nav-right">
                    <a href="http://www.localhost/Project/login.php" class="primary-btn">Staff</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="http://www.localhost/Project/room.php">Rooms</a></li>
                        <li class="active"><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>

    <div class="hero-area set-bg other-page" data-setbg="images/4.jpg">
    </div>



    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title">
                        <div class="section-title">
                            <span>a memorable holliday</span>
                            <h2>Located in the center of <br />PSU Phuket Campus</h2>
                        </div>
                        <a href="https://www.google.com/maps/place/PSU+Lodge/@7.8937627,98.3495607,17z/data=!3m1!4b1!4m8!3m7!1s0x30503034c5a8c987:0xb9341947be62c603!5m2!4m1!1i2!8m2!3d7.8937627!4d98.3517494" class="primary-btn">Get Directions</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <form action="contact2.php" method="post" class="contact-form">
                        <div class="row">
                            
                                <?php //การให้ลูกค้าสามารถกรอกข้อมูลที่ต้องการติดต่อกับทางโรงแรม น.ส.ชาลิสา เพ็ชรสีทอง 6130613050
                                echo '<form method="post" action="contact2.php">'."\n";
                                echo '<input type="text" name="name" placeholder="Your name" value="">';                              
                                echo '<input type="email" name="email" placeholder="Your email" value="">';
                                echo '<input type="text" name="subject" class="subject" placeholder="Subject" value="">';
                                echo '<textarea name="message" placeholder="Message" value=""></textarea>';
                                echo '<button type="submit">Send Message</button>';
                                echo '</form>';
                                
                             ?>
                        </div>
                    </form>
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
            </div>
        </div>
    </section>

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="index.php"><img src="images/12.jpg" alt="" width = "120px" height = "120px"></a>
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
                            <li><img src="img/placeholder.png" alt="">80 Moo1 Vichisongkram Rd., <br /> Prince of Songkla University,Phuket</li>
                            <li><img src="img/phone.png" alt="">076 276 300</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
   
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