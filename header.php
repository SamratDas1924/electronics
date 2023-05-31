<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Electronics Dekho</title>
    </head>
    <!----------------------- box Icon  ----------------------->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!--------------------- bootstrap ------------------>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
    >
    <!------------------ owl-carousel  ----------------------->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >
    <!-------------------- Animate css  --------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-------------------- css  ------------------------>
    
    <body>
        <!----------- header ---------->
        <div class="header">
            <div class="all" onclick="cli1()">
                <i class="bx bx-menu"></i>
            </div>
            <div class="logo">
                <a href="#">
                    <img src="assets/logo.png" alt="logo" class="logo-pic">
                </a>
            </div>
            <div class="home">
                <ul>
                    <li>
                        <a href="index.php" class="home-text" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="html/shop.php" class="home-text">Shop</a>
                    </li>
                    <li>
                        <a href="html/about.php" class="home-text">About</a>
                    </li>
                </ul>
            </div>
            <div class="search">
                <div class="search-under">
                    <input type="text" class="input" placeholder="Search Electronics">
                </div>
                <div class="serch-icon">
                    <a href="">
                        <i class="bx bx-search" id="serch-icon"></i>
                    </a>
                </div>
            </div>
            <div class="cart">
                <div class="wish">
                    <a href="" class="anchor">
                        <i class="bx bx-heart" id="wish" title="Wish List"></i>
                        <div class="count">0</div>
                    </a>
                </div>
                <div class="wish">
                    <a href="" class="anchor">
                        <i class="bx bx-cart" id="cart" title="Cart List"></i>
                        <div class="count">0</div>
                    </a>
                </div>
                
            </div>
            <div class="user">
                <div class="notifi">
                    <a href="" class="anchor">
                        <i class="bx bx-bell bx-tada" id="noti" title="Notification"></i>
                        <div class="count2">9+</div>
                    </a>
                </div>
                <a href="" class="account">
                    <i class="bx bx-user" id="user"></i>
                    <span class="login">Login</span>
                </a>
            </div>
            <!----------------- side navbar  -------------------->
            <div class="side-nav">
                <div class="catagory">
                    <h2 class="side-nav-head">All Departments</h2>
                    <div class="side-nav-remove" onclick="cli2()">
                        <i class="bx bx-x" id="remove"></i>
                    </div>
                    <ul>
                        <li>
                            <a href="html/mobile.html" class="catagory-name">Mobile</a>
                        </li>
                        <li>
                            <a href="html/tv.html" class="catagory-name">Smart TV</a>
                        </li>
                        <li>
                            <a href="html/refrigerator.html" class="catagory-name">Refrigerator</a>
                        </li>
                        <li>
                            <a href="html/washing.html" class="catagory-name">Washing Machine</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-------------- call and whatsapp  ----------------->
        <div class="call">
            <a href="">
                <i class="bx bxs-phone-call" id="call"></i>
            </a>
        </div>
        <div class="whatsapp">
            <a href="">
                <i class="bx bxl-whatsapp" id="whatsapp"></i>
            </a>
        </div>
        <!------------- up-arrow  --------------->
        <div class="up-arrow" id="back-to-top">
            <a href="#">
                <i class="bx bx-up-arrow-alt" id="arrow"></i>
            </a>
        </div>

        <!--------------------- Bootstrap java script  ----------------------->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!--------------------- Jquery java script  ----------------------->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
            integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <!--------------------- Owl carousel java script  ----------------------->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <!--------------------- wow java script  ----------------------->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
            integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script> new WOW().init();</script>
        <!--------------------- java script  ----------------------->
        <script src="../js/script.js"></script>
    </body>
</html>
