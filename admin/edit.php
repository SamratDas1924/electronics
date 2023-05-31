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
<link rel="stylesheet" href="css/edit.css">

<body>

    <!---------------- header  -------------------->

    <?php

    include("header.php")

    ?>
    
        <div class="sub py-3">
        <!--------------------------- Carousel  ----------------------->

        <div class="container my-5 px-5">
            <div class="card">
                <div class="card-body mx-5 px-5">
                    <div class="text-center my-2">
                        <h2 class="">Carousel Details</h2>
                    </div>

                    <?php

                    $iderror1 = "";
                    $nameerror1 = "";
                    $diserror1 = "";
                    $picerror1 = "";

                    include('config.php');

                    $id1 = $_GET['id1'];
                    $edit_query1 = "SELECT * FROM `carousel` WHERE `id` = '$id1'";


                    $result1 =  mysqli_query($connect, $edit_query1);
                    while ($row1 = mysqli_fetch_assoc($result1)) {

                    ?>

                        <form action="update.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id :</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $row1['id'] ?>" name="id1">
                                <div id="emailHelp" class="form-text"><?php echo $iderror1 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row1['name'] ?>" name="name1">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror1 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Discount :</label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1" value="<?php echo $row1['discount'] ?>" name="dis1">
                                <div id="emailHelp" class="form-text"><?php echo $diserror1 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row1['image'] ?>" name="pic1">
                                <div id="emailHelp" class="form-text"><?php echo $picerror1 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!---------------------------Mobile Carousel  ----------------------->

        <div class="container my-5 px-5">
            <div class="card">
                <div class="card-body mx-5 px-5">
                    <div class="text-center my-2">
                        <h2 class=""> Mobile Carousel Details</h2>
                    </div>

                    <?php

                    $iderror2 = "";
                    $nameerror2 = "";
                    $picerror2 = "";
                    $prierror2 = "";

                    include('config.php');

                    $id2 = $_GET['id2'];
                    $edit_query2 = "SELECT * FROM `mobilecarousel` WHERE `mob_id` = '$id2'";


                    $result2 =  mysqli_query($connect, $edit_query2);
                    while ($row2 = mysqli_fetch_assoc($result2)) {

                    ?>

                        <form action="update.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id :</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $row2['mob_id'] ?>" name="id2">
                                <div id="emailHelp" class="form-text"><?php echo $iderror2 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row2['mob_name'] ?>" name="name2">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror2 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1" value="<?php echo $row2['mob_image'] ?>" name="pic2">
                                <div id="emailHelp" class="form-text"><?php echo $picerror2 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row2['mob_price'] ?>" name="pri2">
                                <div id="emailHelp" class="form-text"><?php echo $prierror2 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>



        <!---------------------------Smart TV Carousel  ----------------------->

        <div class="container my-5 px-5">
            <div class="card">
                <div class="card-body mx-5 px-5">
                    <div class="text-center my-2">
                        <h2 class=""> Smart TV Carousel Details</h2>
                    </div>

                    <?php

                    $iderror3 = "";
                    $nameerror3 = "";
                    $picerror3 = "";
                    $prierror3 = "";

                    include('config.php');

                    $id3 = $_GET['id3'];
                    $edit_query3 = "SELECT * FROM `smarttvcarousel` WHERE `tv_id` = '$id3'";


                    $result3 =  mysqli_query($connect, $edit_query3);
                    while ($row3 = mysqli_fetch_assoc($result3)) {

                    ?>

                        <form action="update.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id :</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $row3['tv_id'] ?>" name="id3">
                                <div id="emailHelp" class="form-text"><?php echo $iderror3 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row3['tv_name'] ?>" name="name3">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror3 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1" value="<?php echo $row3['tv_image'] ?>" name="pic3">
                                <div id="emailHelp" class="form-text"><?php echo $picerror3 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row3['tv_price'] ?>" name="pri3">
                                <div id="emailHelp" class="form-text"><?php echo $prierror3 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!---------------------------Refrigerator Carousel  ----------------------->

        <div class="container my-5 px-5">
            <div class="card">
                <div class="card-body mx-5 px-5">
                    <div class="text-center my-2">
                        <h2 class=""> Refrigerator Carousel Details</h2>
                    </div>

                    <?php

                    $iderror4 = "";
                    $nameerror4 = "";
                    $picerror4 = "";
                    $prierror4 = "";

                    include('config.php');

                    $id4 = $_GET['id4'];
                    $edit_query4 = "SELECT * FROM `refrigeratorcarousel` WHERE `ref_id` = '$id4'";


                    $result4 =  mysqli_query($connect, $edit_query4);
                    while ($row4 = mysqli_fetch_assoc($result4)) {

                    ?>

                        <form action="update.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id :</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $row4['ref_id'] ?>" name="id4">
                                <div id="emailHelp" class="form-text"><?php echo $iderror4 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row4['ref_name'] ?>" name="name4">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror4 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1" value="<?php echo $row4['ref_image'] ?>" name="pic4">
                                <div id="emailHelp" class="form-text"><?php echo $picerror4 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row4['ref_price'] ?>" name="pri4">
                                <div id="emailHelp" class="form-text"><?php echo $prierror4 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>


        <!---------------------------Washing Machine Carousel  ----------------------->

        <div class="container my-5 px-5">
            <div class="card">
                <div class="card-body mx-5 px-5">
                    <div class="text-center my-2">
                        <h2 class=""> Washing Machine Carousel Details</h2>
                    </div>

                    <?php

                    $iderror5 = "";
                    $nameerror5 = "";
                    $picerror5 = "";
                    $prierror5 = "";

                    include('config.php');

                    $id5 = $_GET['id5'];
                    $edit_query5 = "SELECT * FROM `washingmachinecarousel` WHERE `wm_id` = '$id5'";


                    $result5 =  mysqli_query($connect, $edit_query5);
                    while ($row5 = mysqli_fetch_assoc($result5)) {

                    ?>

                        <form action="update.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id :</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $row5['wm_id'] ?>" name="id5">
                                <div id="emailHelp" class="form-text"><?php echo $iderror5 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row5['wm_name'] ?>" name="name5">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror5 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1" value="<?php echo $row5['wm_image'] ?>" name="pic5">
                                <div id="emailHelp" class="form-text"><?php echo $picerror5 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row5['wm_price'] ?>" name="pri5">
                                <div id="emailHelp" class="form-text"><?php echo $prierror5 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>


        <!--------------------------- Shop Items  ----------------------->

        <div class="container my-5 px-5">
            <div class="card">
                <div class="card-body mx-5 px-5">
                    <div class="text-center my-2">
                        <h2 class=""> Shop Items Details</h2>
                    </div>

                    <?php

                    $iderror6 = "";
                    $picerror6 = "";
                    $nameerror6 = "";
                    $prierror6 = "";

                    include('config.php');

                    $id6 = $_GET['id6'];
                    $edit_query6 = "SELECT * FROM `shop` WHERE `shop_id` = '$id6'";


                    $result6 =  mysqli_query($connect, $edit_query6);
                    while ($row6 = mysqli_fetch_assoc($result6)) {

                    ?>

                        <form action="update.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id :</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $row6['shop_id'] ?>" name="id6">
                                <div id="emailHelp" class="form-text"><?php echo $iderror6 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image :</label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1" value="<?php echo $row6['shop_image'] ?>" name="pic6">
                                <div id="emailHelp" class="form-text"><?php echo $picerror6 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row6['shop_name'] ?>" name="name6">
                                <div id="emailHelp" class="form-text"><?php echo $nameerror6 ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price :</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row6['shop_price'] ?>" name="pri6">
                                <div id="emailHelp" class="form-text"><?php echo $prierror6 ?></div>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                    <?php } ?>
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