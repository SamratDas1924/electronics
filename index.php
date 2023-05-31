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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!------------------ owl-carousel  ----------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer">
<!-------------------- Animate css  --------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<!-------------------- css  ------------------------>
<link rel="stylesheet" href="css/main/header.css">
<link rel="stylesheet" href="css/responsive/header-resp.css">
<link rel="stylesheet" href="css/main/home.css">
<link rel="stylesheet" href="css/responsive/home-resp.css">
<link rel="stylesheet" href="css/main/footer.css">
<link rel="stylesheet" href="css/responsive/footer-resp.css">

<body>

    <?php

    include('header.php')

    ?>

    <div class="main">
        <!---------- carousel --------->
        <div class="owl-carousel owl-theme" id="carousel">
            <?php
            include('admin/config.php');
            $fetch_query1 = "SELECT * FROM `carousel`";

            $result1 = mysqli_query($connect, $fetch_query1);
            while ($row1 = mysqli_fetch_assoc($result1)) {

                echo '<div class="item">
                    <div id="caritem">
                    <div>
                        <p id="carname" class="animate__animated animate__fadeInDown">'. $row1["name"] . '</p>
                        <br>
                        <p id="cardis" class="animate__animated animate__zoomIn">' . $row1["discount"] . '</p>
                        <br>
                        <a href="" class="anchor">
                            <div id="shop" class="animate__animated animate__fadeInUp">Shop Now</div>
                        </a>
                    </div>
                    <div id="cardiv">
                        <img src= " assets/' . $row1['image'] . '" class="d-block" alt="Refrigerator" id="carpic">
                    </div>
                </div>
            </div>';
            }
            ?>

        </div>

        <!-------------- Mobile -------------->

        <div class="bestmob">
            <h2 id="besttext" class="wow animate__animated animate__fadeInDown">Best Selling Smartphones</h2>
            <div class="allmob">
                <div class="owl-carousel owl-theme" id="mobcarousel">
                <?php
            include('admin/config.php');
            $fetch_query2 = "SELECT * FROM `mobilecarousel`";

            $result2 = mysqli_query($connect, $fetch_query2);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                   echo '<div class="item">
                        <div class="mobitem">
                            <p class="mobname">'. $row2["mob_name"] . '</p>
                            <img src="assets/'. $row2["mob_image"] . '" alt="" class="mobpic">
                            <p class="mobprice">₹ ' . $row2["mob_price"] .'</p>
                            <a href="" class="anchor">
                                <div id="shop1">Shop Now</div>
                            </a>
                        </div>
                    </div>';
                }
                ?>
                    
                </div>
            </div>
        </div>

        <!----------Smart TV--------->
        <div class="besttv">
            <h2 id="besttext" class="wow animate__animated animate__fadeInDown">Best Selling Smart TV</h2>
            <div class="alltv">
                <div class="owl-carousel owl-theme" id="tvcarousel">
                <?php
            include('admin/config.php');
            $fetch_query3 = "SELECT * FROM `smarttvcarousel`";

            $result3 = mysqli_query($connect, $fetch_query3);
            while ($row3 = mysqli_fetch_assoc($result3)) {
                  echo  '<div class="item">
                        <div class="tvitem">
                            <p class="tvname">' . $row3["tv_name"] . '</p>
                            <img src=" assets/' . $row3["tv_image"] . ' " alt="" class="tvpic">
                            <p class="tvprice">₹ ' . $row3["tv_price"] . '</p>
                            <a href="" class="anchor">
                                <div id="shop1">Shop Now</div>
                            </a>
                        </div>
                    </div>';
            }
            ?>      
                </div>
            </div>
        </div>
        <!----------Refrigerator--------->
        <div class="bestref">
            <h2 id="besttext" class="wow animate__animated animate__fadeInDown">Best Selling Refrigerator</h2>
            <div class="allref">
                <div class="owl-carousel owl-theme" id="refcarousel">
                <?php
            include('admin/config.php');
            $fetch_query4 = "SELECT * FROM `refrigeratorcarousel`";

            $result4 = mysqli_query($connect, $fetch_query4);
            while ($row4 = mysqli_fetch_assoc($result4)) {
                   echo '<div class="item">
                        <div class="refitem">
                            <p class="refname">' . $row4["ref_name"] . '</p>
                            <img src=" assets/' . $row4["ref_image"] . ' " alt="" class="refpic">
                            <p class="refprice">₹ ' . $row4["ref_price"] .'</p>
                            <a href="" class="anchor">
                                <div id="shop1">Shop Now</div>
                            </a>
                        </div>
                    </div>';
                }
                ?>
                    
                </div>
            </div>
        </div>
        <!---------- washing machine --------->
        <div class="bestwm">
            <h2 id="besttext" class="wow animate__animated animate__fadeInDown">Best Selling Washing Machine</h2>
            <div class="allwm">
                <div class="owl-carousel owl-theme" id="wmcarousel">
                <?php
            include('admin/config.php');
            $fetch_query5 = "SELECT * FROM `washingmachinecarousel`";

            $result5 = mysqli_query($connect, $fetch_query5);
            while ($row5 = mysqli_fetch_assoc($result5)) {
                  echo '<div class="item">
                        <div class="wmitem">
                            <p class="wmname">' . $row5["wm_name"] . '</p>
                            <img src=" assets/' . $row5["wm_image"] . ' " alt="" class="wmpic">
                            <p class="wmprice">₹ ' . $row5["wm_price"] . '</p>
                            <a href="" class="anchor">
                                <div id="shop1">Shop Now</div>
                            </a>
                        </div>
                    </div>';
                }
                ?>
                    
                </div>
            </div>
        </div>

    </div>

    <?php

    include('footer.php')

    ?>

    <!--------------------- Bootstrap java script  ----------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--------------------- Jquery java script  ----------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--------------------- Owl carousel java script  ----------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--------------------- wow java script  ----------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new WOW().init();
    </script>
    <!--------------------- java script  ----------------------->
    <script src="js/script.js"></script>
</body>

</html>