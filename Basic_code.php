<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locaport</title>
    <link rel="stylesheet" href="styleproject.css">
    <link rel="stylesheet" href="style_car.css">
    <script src="https://kit.fontawesome.com/025401cbce.js" crossorigin="anonymous"></script>
    <script src="JS_CODE.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@300&display=swap" rel="stylesheet">
<style> details{margin-left:30%;margin-right:30%;background-color: rgb(238, 183, 101);cursor:pointer;}
    details summary{width:200px;}</style>
</head>

<body>
    <header>
        <div id="headbg">
            <ul>
                <li><img src="prj_images/LOGO.png" alt="Logo"></li>
                <li>
                    <h2 class="h-primary">Locaport</h2>
                </li>
                <span class="open-slide">
                    <a href="#" onclick="openSlideMenu()"><svg width="30" height="30">
                            <path d="M0,5,30,5" stroke="#000" stroke-width="5" />
                            <path d="M0,14,30,14" stroke="#000" stroke-width="5" />
                            <path d="M0,23,30,23" stroke="#000" stroke-width="5" />
                        </svg> </a>
                </span>
            </ul></div>

    </header>
    <!--navigation section-->
    <section>
        <div class="box">
        <nav class="navcon">
                <ul class="navlinks">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#Contact_sec">Contact</a></li>
                    <li><a href="#About_sec">About</a></li>
                </ul>
            </nav>
        <div class="side-nav" id="side-menu"><a href="#" class="btn-close" onclick="closeSlideMenu()"><img
                        src="prj_images/x-mark.png" alt=""></a>
                <a href="#">Home</a>
                <a href="#services">Services</a><a href="#Contact_sec">Contact</a><a href="#About_sec">About</a>
            </div>
            <p class="fpara">A plateform where you can find the information of<br> local transport from one place to
                another in a city </p>
        </div>
    </section>
    <!--services section-->
    <section><div id="services">
        <h2 class="h-secondary text_align">Our Services</h2>
        <div class="serve_container">
            <div class="box1" id="s_box1">
                <?php include 'indexcopy.php'
?>                    
              <!-- <h4 class="h_serv">Source<img src="https://img.icons8.com/dusk/64/000000/open-source.png"/></h4>
                <div class="small_box"></div>
                <h4 class="h_serv">Destination <img src="prj_images/Destination.png" alt=""></h4>
                <div class="small_box"></div><a href="" class="serv_btn">GO</a>
            </div>-->
              </div>
            <div class="box1" id="f_box1"><img src="prj_images/img2.jpg" alt="pic"></div>
        </div>
       
<div class="det">
<details >
  <summary>More Info</summary>
  <p>TO use our website ,at first select your place and then select your destination ,click on go.You will get desired information.</p>
</details></div></div>
    </section>

    <!--About section-->
    <section id="About_sec">
        <div class="container">
            <h2 class="h-secondary text_align"><i class="icons fas fa-duotone fa-book-open"></i>About us<i
                    class="icons fas fa-duotone fa-book-open"></i></h2>
            <p class="spara">Locaport is a plateform which renders the information of different local transport
                available in your desired place in Chattagram. The name “Locaport” is the combination two words Local
                and Transport.
                Our site reduces the difficulties of finding transports such as Route Bus, CNG, Leguna, Rickshaw,Tempu
                etc</p>
            <div class="highway bac_opacity"></div>
            <div class="city bac_opacity"></div>
            <div class="car"><img src="prj_images/car.png" alt="car"></div>
            <div class="wheel bac_opacity"><img src="prj_images/wheel.png" id="f_wheel" alt="cwheel">
                <img src="prj_images/wheel.png" id="b_wheel" alt="cwheel">
            </div>
        </div>
    </section>

    <!--Contact section-->
    <section id="Contact_sec">
        <h2 class="h-secondary text_align"><i class="icons far fa-address-book"></i>Contact Us
         <i class="icons far fa-address-book"></i>
        </h2>
        <div class="contact_links">
            <ul>
                <li><a href="https://www.facebook.com"><i class="contact_icons fab fa-facebook"></i></a>Facebook</li>
                <li><a href="https://www.instagram.com"><i class="contact_icons fab fa-instagram"></i></a>Instagram</li>
                <li><a href="https://www.gmail.com"><i class="contact_icons far fa-envelope"></i></a>Email</li>
            </ul>
        </div>
        <p class="spara"><i class="fas fa-share"></i>Share Your feelings using our website.<br>
        <i class="far fa-comment"></i> Feel free to contact us for any help.</p></section>
   <section> <footer class="foot">
    <h3>&copy All rights reserved by LOCAPORT.</h3>
        
    </footer></section>
</body>
</html>