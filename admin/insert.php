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
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/insert.css">


<body>

    <!---------------- header  -------------------->

    <?php

    include("header.php")

    ?>

    <!---------------- insert  -------------------->

    <div class="main py-3">
        <div class="sub-left">
            <h2 class="left-head">All Database</h2>
            <ul>
                <li>
                    <a href="#" class="item">Carousel</a>
                </li>
                <li>
                    <a href="#mobilecarousel" class="item">Mobile Carousel</a>
                </li>
                <li>
                    <a href="#smarttvcarousel" class="item">Smart TV Carousel</a>
                </li>
                <li>
                    <a href="#refrigeratorcarousel" class="item">Refrigerator Carousel</a>
                </li>
                <li>
                    <a href="#washingmachinecarousel" class="item">Washing Machine Carousel</a>
                </li>
                <li>
                    <a href="#shop" class="item">Shop Items</a>
                </li>
            </ul>

        </div>

        <div class="sub-right">

            <!--------------------------- Carousel  ----------------------->

            <?php
            include('config.php');

            $iderror1 = "";
            $nameerror1 = "";
            $diserror1 = "";
            $picerror1 = "";

            if (isset($_POST['submit'])) {

                $id1 = $_POST['id1'];
                $name1 = $_POST['name1'];
                $dis1 = $_POST['dis1'];
                $pic1 = $_POST['pic1'];

                if (empty($_POST['id1'])) {
                    $iderror1 = "Id is required";
                } else {
                    $id1 = $_POST['id1'];
                }

                if (empty($_POST['name1'])) {
                    $nameerro1r = "Name is required";
                } else {
                    $name1 = $_POST['name1'];
                }

                if (empty($_POST['dis'])) {
                    $diserror1 = "Discount is required";
                } else {
                    $dis1 = $_POST['dis1'];
                }

                if (empty($_POST['pic1'])) {
                    $picerror1 = "Image is required";
                } else {
                    $pic1 = $_POST['pic1'];
                }

                if (!empty($_POST['id1']) && !empty($_POST['name1']) && !empty($_POST['dis1']) && !empty($_POST['pic1'])) {

                    $creat_query1 = "INSERT INTO `carousel`(`id`, `name`, `discount`, `image`) VALUES ('$id1', '$name1','$dis1','$pic1')";

                    $result1 = mysqli_query($connect, $creat_query1);
                }

            }

            ?>

            <div class="container px-5">
                <div class="text-center my-5">
                    <h2 class="">Carousel Details</h2>
                </div>
                <div class="card">
                    <div class="card-body mx-5 px-5">

                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id:</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Id" name="id1">
                                <div id="emailHelp" class="form-text"><?php echo $iderror1 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Name" name="name1">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror1 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Discount :</label>

                                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Enter Discount" name="dis1">
                                <div id="emailHelp" class="form-text"><?php echo $diserror1 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Image URL" name="pic1">
                                <div id="emailHelp" class="form-text"><?php echo $picerror1 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <!---------------------------Mobile Carousel  ----------------------->


            <?php
            include('config.php');

            $iderror2 = "";
            $nameerror2 = "";
            $picerror2 = "";
            $prierror2 = "";

            if (isset($_POST['submit2'])) {

                $id2 = $_POST['id2'];
                $name2 = $_POST['name2'];
                $pic2 = $_POST['pic2'];
                $pri2 = $_POST['pri2'];

                if (empty($_POST['id2'])) {
                    $iderror2 = "Id is required";
                } else {
                    $id2 = $_POST['id2'];
                }

                if (empty($_POST['name2'])) {
                    $nameerror2 = "Name is required";
                } else {
                    $name2 = $_POST['name2'];
                }

                if (empty($_POST['pic2'])) {
                    $picerror2 = "Image is required";
                } else {
                    $pic2 = $_POST['pic2'];
                }

                if (empty($_POST['pri2'])) {
                    $prierror2 = "Price is required";
                } else {
                    $pri2 = $_POST['pri2'];
                }

                if (!empty($_POST['id2']) && !empty($_POST['name2']) && !empty($_POST['pic2']) && !empty($_POST['pri2'])) {

                    $creat_query2 = "INSERT INTO `mobilecarousel`(`mob_id`, `mob_name`, `mob_image`, `mob_price`) VALUES ('$id2','$name2','$pic2','$pri2')";

                    $result2 = mysqli_query($connect, $creat_query2);
                }
            }
            ?>

            <div class="container px-5" id="mobilecarousel">
                <div class="text-center my-5">
                    <h2 class=""> Mobile Carousel Details</h2>
                </div>
                <div class="card">
                    <div class="card-body mx-5 px-5">

                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id:</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Id" name="id2">
                                <div id="emailHelp" class="form-text"><?php echo $iderror2 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Name" name="name2">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror2 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>

                                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Enter Image URL" name="pic2">
                                <div id="emailHelp" class="form-text"><?php echo $picerror2 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price" name="pri2">
                                <div id="emailHelp" class="form-text"><?php echo $prierror2 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" name="submit2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <!---------------------------Smart TV Carousel  ----------------------->


            <?php
            include('config.php');

            $iderror3 = "";
            $nameerror3 = "";
            $picerror3 = "";
            $prierror3 = "";

            if (isset($_POST['submit3'])) {

                $id3 = $_POST['id3'];
                $name3 = $_POST['name3'];
                $pic3 = $_POST['pic3'];
                $pri3 = $_POST['pri3'];

                if (empty($_POST['id3'])) {
                    $iderror3 = "Id is required";
                } else {
                    $id3 = $_POST['id3'];
                }

                if (empty($_POST['name3'])) {
                    $nameerror3 = "Name is required";
                } else {
                    $name3 = $_POST['name3'];
                }

                if (empty($_POST['pic3'])) {
                    $picerror3 = "Image is required";
                } else {
                    $pic3 = $_POST['pic3'];
                }

                if (empty($_POST['pri3'])) {
                    $prierror3 = "Price is required";
                } else {
                    $pri3 = $_POST['pri3'];
                }

                if (!empty($_POST['id3']) && !empty($_POST['name3']) && !empty($_POST['pic3']) && !empty($_POST['pri3'])) {

                    $creat_query3 = "INSERT INTO `smarttvcarousel`(`tv_id`, `tv_name`, `tv_image`, `tv_price`) VALUES ('$id3','$name3','$pic3','$pri3')";

                    $result3 = mysqli_query($connect, $creat_query3);
                }
            }

            ?>

            <div class="container px-5" id="smarttvcarousel">
                <div class="text-center my-5">
                    <h2 class=""> Smart TV Carousel Details</h2>
                </div>
                <div class="card">
                    <div class="card-body mx-5 px-5">

                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id:</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Id" name="id3">
                                <div id="emailHelp" class="form-text"><?php echo $iderror3 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Name" name="name3">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror3 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>

                                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Enter Image URL" name="pic3">
                                <div id="emailHelp" class="form-text"><?php echo $picerror3 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price" name="pri3">
                                <div id="emailHelp" class="form-text"><?php echo $prierror3 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" name="submit3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <!--------------------------- Refrigerator Carousel  ----------------------->

            <?php
            include('config.php');

            $iderror4 = "";
            $nameerror4 = "";
            $picerror4 = "";
            $prierror4 = "";

            if (isset($_POST['submit4'])) {

                $id4 = $_POST['id4'];
                $name4 = $_POST['name4'];
                $pic4 = $_POST['pic4'];
                $pri4 = $_POST['pri4'];

                if (empty($_POST['id4'])) {
                    $iderror4 = "Id is required";
                } else {
                    $id4 = $_POST['id4'];
                }

                if (empty($_POST['name4'])) {
                    $nameerror4 = "Name is required";
                } else {
                    $name4 = $_POST['name4'];
                }

                if (empty($_POST['pic4'])) {
                    $picerror4 = "Image is required";
                } else {
                    $pic4 = $_POST['pic4'];
                }

                if (empty($_POST['pri4'])) {
                    $prierror4 = "Price is required";
                } else {
                    $pri4 = $_POST['pri4'];
                }

                if (!empty($_POST['id4']) && !empty($_POST['name4']) && !empty($_POST['pic4']) && !empty($_POST['pri4'])) {

                    $creat_query4 = "INSERT INTO `refrigeratorcarousel`(`ref_id`, `ref_name`, `ref_image`, `ref_price`) VALUES ('$id4','$name4','$pic4','$pri4')";

                    $result4 = mysqli_query($connect, $creat_query4);
                }
            }

            ?>

            <div class="container px-5" id="refrigeratorcarousel">
                <div class="text-center my-5">
                    <h2 class=""> Refrigerator Carousel Details</h2>
                </div>
                <div class="card">
                    <div class="card-body mx-5 px-5">

                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id:</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Id" name="id4">
                                <div id="emailHelp" class="form-text"><?php echo $iderror4 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Name" name="name4">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror4 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>

                                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Enter Image URL" name="pic4">
                                <div id="emailHelp" class="form-text"><?php echo $picerror4 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price" name="pri4">
                                <div id="emailHelp" class="form-text"><?php echo $prierror4 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" name="submit4">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!--------------------------- Washing Machine Carousel  ----------------------->

            <?php
            include('config.php');

            $iderror5 = "";
            $nameerror5 = "";
            $picerror5 = "";
            $prierror5 = "";

            if (isset($_POST['submit5'])) {

                $id5 = $_POST['id5'];
                $name5 = $_POST['name5'];
                $pic5 = $_POST['pic5'];
                $pri5 = $_POST['pri5'];

                if (empty($_POST['id5'])) {
                    $iderror5 = "Id is required";
                } else {
                    $id5 = $_POST['id5'];
                }

                if (empty($_POST['name5'])) {
                    $nameerror5 = "Name is required";
                } else {
                    $name5 = $_POST['name5'];
                }

                if (empty($_POST['pic5'])) {
                    $picerror5 = "Image is required";
                } else {
                    $pic5 = $_POST['pic5'];
                }

                if (empty($_POST['pri5'])) {
                    $prierror5 = "Price is required";
                } else {
                    $pri5 = $_POST['pri5'];
                }

                if (!empty($_POST['id5']) && !empty($_POST['name5']) && !empty($_POST['pic5']) && !empty($_POST['pri5'])) {

                    $creat_query5 = "INSERT INTO `washingmachinecarousel`(`wm_id`, `wm_name`, `wm_image`, `wm_price`) VALUES ('$id5','$name5','$pic5','$pri5')";

                    $result5 = mysqli_query($connect, $creat_query5);
                }
            }

            ?>

            <div class="container px-5" id="washingmachinecarousel">
                <div class="text-center my-5">
                    <h2 class=""> Washing Machine Details</h2>
                </div>
                <div class="card">
                    <div class="card-body mx-5 px-5">

                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id:</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Id" name="id5">
                                <div id="emailHelp" class="form-text"><?php echo $iderror5 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Name" name="name5">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror5 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>

                                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Enter Image URL" name="pic5">
                                <div id="emailHelp" class="form-text"><?php echo $picerror5 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price" name="pri5">
                                <div id="emailHelp" class="form-text"><?php echo $prierror5 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" name="submit5">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--------------------------- Shop Items  ----------------------->

            <?php
            include('config.php');

            $iderror6 = "";
            $picerror6 = "";
            $nameerror6 = "";
            $prierror6 = "";

            if (isset($_POST['submit6'])) {

                $id6 = $_POST['id6'];
                $pic6 = $_POST['pic6'];
                $name6 = $_POST['name6'];
                $pri6 = $_POST['pri6'];

                if (empty($_POST['id6'])) {
                    $iderror6 = "Id is required";
                } else {
                    $id6 = $_POST['id6'];
                }

                if (empty($_POST['pic6'])) {
                    $picerror6 = "Image is required";
                } else {
                    $pic6 = $_POST['pic6'];
                }

                if (empty($_POST['name6'])) {
                    $nameerror6 = "Name is required";
                } else {
                    $name6 = $_POST['name6'];
                }

                if (empty($_POST['pri6'])) {
                    $prierror6 = "Price is required";
                } else {
                    $pri6 = $_POST['pri6'];
                }

                if (!empty($_POST['id6']) && !empty($_POST['name6']) && !empty($_POST['pic6']) && !empty($_POST['pri6'])) {

                    $creat_query6 = "INSERT INTO `shop`(`shop_id`, `shop_image`, `shop_name`, `shop_price`) VALUES ('$id6','$pic6','$name6','$pri6')";

                    $result6 = mysqli_query($connect, $creat_query6);
                }
            }

            ?>

            <div class="container px-5" id="shop">
                <div class="text-center my-5">
                    <h2 class=""> Shop Items Details</h2>
                </div>
                <div class="card">
                    <div class="card-body mx-5 px-5">

                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id:</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Id" name="id6">
                                <div id="emailHelp" class="form-text"><?php echo $iderror6 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>

                                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Enter Image URL" name="pic6">
                                <div id="emailHelp" class="form-text"><?php echo $picerror6 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Name" name="name6">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror6 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price" name="pri6">
                                <div id="emailHelp" class="form-text"><?php echo $prierror6 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" name="submit6">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

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