<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Electronics Dekho</title>
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
<link rel="stylesheet" href="../css/main/header.css">
<link rel="stylesheet" href="../css/responsive/header-resp.css">
<link rel="stylesheet" href="../css/main/shop.css">
<link rel="stylesheet" href="../css/responsive/shop-resp.css">
<link rel="stylesheet" href="../css/main/footer.css">
<link rel="stylesheet" href="../css/responsive/footer-resp.css">

<body>


    <?php

    include('../header.php')

    ?>

    <!--------------------- product categories ---------------------->
    <div class="product">
        <div class="product-under">
            <div class="product-under-left">
                <div class="price">
                    <h2 class="left-head">Price</h2>
                    <ul>
                        <li>
                            <a href="" class="price-head">Under ₹ 10,000</a>
                        </li>
                        <li>
                            <a href="" class="price-head">₹ 10,000 - ₹ 20,000</a>
                        </li>
                        <li>
                            <a href="" class="price-head">₹ 20,000 - ₹ 30,000</a>
                        </li>
                        <li>
                            <a href="" class="price-head">₹ 30,000 - ₹ 40,000</a>
                        </li>
                        <li>
                            <a href="" class="price-head">Over ₹ 40,000</a>
                        </li>
                    </ul>
                </div>
                <div class="discount">
                    <h2 class="left-head">Discount</h2>
                    <ul>
                        <li>
                            <a href="" class="discount-head">10% off</a>
                        </li>
                        <li>
                            <a href="" class="discount-head">15% off</a>
                        </li>
                        <li>
                            <a href="" class="discount-head">20% off</a>
                        </li>
                        <li>
                            <a href="" class="discount-head">25% off</a>
                        </li>
                    </ul>
                </div>
                <div class="brands">
                    <h2 class="left-head">Brands</h2>
                    <ul>
                        <li>
                            <a href="" class="brand-name">Godrej</a>
                        </li>
                        <li>
                            <a href="" class="brand-name">Haier</a>
                        </li>
                        <li>
                            <a href="" class="brand-name">iPhone</a>
                        </li>
                        <li>
                            <a href="" class="brand-name">LG</a>
                        </li>
                        <li>
                            <a href="" class="brand-name">OnePlus</a>
                        </li>
                        <li>
                            <a href="" class="brand-name">Oppo</a>
                        </li>
                        <li>
                            <a href="" class="brand-name">Panasonic</a>
                        </li>
                        <li>
                            <a href="" class="brand-name">Samsung</a>
                        </li>
                        <li>
                            <a href="" class="brand-name">Sony</a>
                        </li>
                        <li>
                            <a href="" class="brand-name">Whirlpool</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-------------------------- brands  ------------------------->

            <div class="product-under-right">
                <div class="product-under-right-up">
                    <div class="brand-logo">
                        <img src="../assets/samsunglogo.png" alt="" id="brand-logo">
                    </div>
                    <div class="brand-logo">
                        <img src="../assets/Lglogo.png" alt="" id="brand-logo">
                    </div>
                    <div class="brand-logo">
                        <img src="../assets/iphonelogo.jpg" alt="" id="brand-logo">
                    </div>
                    <div class="brand-logo">
                        <img src="../assets/sonylogo.png" alt="" id="brand-logo">
                    </div>
                    <div class="brand-logo">
                        <img src="../assets/OnePluslogo.png" alt="" id="brand-logo">
                    </div>
                    <div class="brand-logo">
                        <img src="../assets/godrejlogo.png" alt="" id="brand-logo">
                    </div>
                </div>

                <!--------------------------  items  ------------------------->

                <div class="product-under-right-up">
                    <div class="right-under">
                        <h2 class="right-head">Shop here</h2>
                    </div>
                    <div class="right-under"></div>
                </div>
                <?php
                        include('../admin/config.php');
                        $fetch_query6 = "SELECT * FROM `shop`";

                        $result6 = mysqli_query($connect, $fetch_query6);
                        while ($row6 = mysqli_fetch_assoc($result6)) {
                            
                            echo ' <div class="product-under-right-next">
               <div class="product-under-right-next2">
               <div class="product-under-right-box">
                                <div class="mob-pic">
                                    <img src="../assets/' . $row6["shop_image"] . ' " alt="" id="mob-pic">
                                </div>
                                <div class="quick">
                                    <a href="" class="view">
                                        <i class="bx bx-cart" id="cart2" title="Cart List"></i>
                                    </a>
                                    <a href="" class="view">
                                        <i class="bx bx-heart" id="wish2" title="Wish List"></i>
                                    </a>
                                    <a href="" class="view">
                                        <i class="bx bx-detail" id="view" title="Quick View"></i>
                                    </a>
                                </div>
                                <p class="name">' . $row6["shop_name"] . '</p>
                                <p class="pro-price">₹' . $row6["shop_price"] . '</p>
                            </div>
                            
                            
                    </div>
                </div>
                <br>';
                        }
                        ?>
            </div>
        </div>


        <?php

        include('../footer.php')

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
        <script src="../js/script.js"></script>
</body>

</html>