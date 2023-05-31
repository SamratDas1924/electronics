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
<link rel="stylesheet" href="css/view.css">

<body>

    <!---------------- header  -------------------->

    <?php

    include("header.php")

    ?>

<!---------------- view  -------------------->

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

            <!---------------- carousel -------------------->

            <div class="container px-5">
                <div class="text-center my-5">
                    <h2 class="">Carousel Details</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Image</th>
                                    <th scope="col" colspan="2">ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                require_once('config.php');
                                $fetch_query1 = "SELECT * FROM `carousel`";

                                $result1 = mysqli_query($connect, $fetch_query1);
                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                    echo '<tr>';
                                    echo '<td>' . $row1['id'] . '</td>';
                                    echo '<td>' . $row1['name'] . '</td>';
                                    echo '<td>' . $row1['discount'] . '</td>';
                                    echo '<td>' . $row1['image'] . '</td>';
                                    echo  '<td><a href="edit.php?id1=' . $row1['id'] . '" class="btn btn-primary mb-3">Edit</a></td>';
                                    echo '<td><a href="car-delete.php?id1=' . $row1['id'] . '" class="btn btn-primary mb-3">Delete</a></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="col-auto">
                            <a href="insert.php" class="btn btn-primary mb-3">Enter Details</a>
                        </div>
                    </div>
                </div>
            </div>


            <!----------------Mobile carousel -------------------->

            <div class="container px-5" id="mobilecarousel">
                <div class="text-center my-5">
                    <h2 class="">Mobile Carousel Details</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Price</th>
                                    <th scope="col" colspan="2">ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                include('config.php');
                                $fetch_query2 = "SELECT * FROM `mobilecarousel`";

                                $result2 = mysqli_query($connect, $fetch_query2);
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    echo '<tr>';
                                    echo '<td>' . $row2['mob_id'] . '</td>';
                                    echo '<td>' . $row2['mob_name'] . '</td>';
                                    echo '<td>' . $row2['mob_image'] . '</td>';
                                    echo '<td>' . $row2['mob_price'] . '</td>';
                                    echo  '<td><a href="edit.php?id2=' . $row2['mob_id'] . '" class="btn btn-primary mb-3">Edit</a></td>';
                                    echo '<td><a href="mob-delete.php?id2=' . $row2['mob_id'] . '" class="btn btn-primary mb-3">Delete</a></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="col-auto">
                            <a href="insert.php" class="btn btn-primary mb-3">Enter Details</a>
                        </div>
                    </div>
                </div>
            </div>


            <!----------------Smart TV carousel -------------------->

            <div class="container px-5" id="smarttvcarousel">
                <div class="text-center my-5">
                    <h2 class="">Smart TV Carousel Details</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Price</th>
                                    <th scope="col" colspan="2">ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                include('config.php');
                                $fetch_query3 = "SELECT * FROM `smarttvcarousel`";

                                $result3 = mysqli_query($connect, $fetch_query3);
                                while ($row3 = mysqli_fetch_assoc($result3)) {
                                    echo '<tr>';
                                    echo '<td>' . $row3['tv_id'] . '</td>';
                                    echo '<td>' . $row3['tv_name'] . '</td>';
                                    echo '<td>' . $row3['tv_image'] . '</td>';
                                    echo '<td>' . $row3['tv_price'] . '</td>';
                                    echo  '<td><a href="edit.php?id3=' . $row3['tv_id'] . '" class="btn btn-primary mb-3">Edit</a></td>';
                                    echo '<td><a href="tv-delete.php?id3=' . $row3['tv_id'] . '" class="btn btn-primary mb-3">Delete</a></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="col-auto">
                            <a href="insert.php" class="btn btn-primary mb-3">Enter Details</a>
                        </div>
                    </div>
                </div>
            </div>


            <!----------------Refrigerator carousel -------------------->

            <div class="container px-5" id="refrigeratorcarousel">
                <div class="text-center my-5">
                    <h2 class="">Refrigerator Carousel Details</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Price</th>
                                    <th scope="col" colspan="2">ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                include('config.php');
                                $fetch_query4 = "SELECT * FROM `refrigeratorcarousel`";

                                $result4 = mysqli_query($connect, $fetch_query4);
                                while ($row4 = mysqli_fetch_assoc($result4)) {
                                    echo '<tr>';
                                    echo '<td>' . $row4['ref_id'] . '</td>';
                                    echo '<td>' . $row4['ref_name'] . '</td>';
                                    echo '<td>' . $row4['ref_image'] . '</td>';
                                    echo '<td>' . $row4['ref_price'] . '</td>';
                                    echo  '<td><a href="edit.php?id4=' . $row4['ref_id'] . '" class="btn btn-primary mb-3">Edit</a></td>';
                                    echo '<td><a href="ref-delete.php?id4=' . $row4['ref_id'] . '" class="btn btn-primary mb-3">Delete</a></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="col-auto">
                            <a href="insert.php" class="btn btn-primary mb-3">Enter Details</a>
                        </div>
                    </div>
                </div>
            </div>




            <!----------------Washing Machine carousel -------------------->

            <div class="container px-5" id="washingmachinecarousel">
                <div class="text-center my-5">
                    <h2 class="">Washing Machine Carousel Details</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Price</th>
                                    <th scope="col" colspan="2">ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                include('config.php');
                                $fetch_query5 = "SELECT * FROM `washingmachinecarousel`";

                                $result5 = mysqli_query($connect, $fetch_query5);
                                while ($row5 = mysqli_fetch_assoc($result5)) {
                                    echo '<tr>';
                                    echo '<td>' . $row5['wm_id'] . '</td>';
                                    echo '<td>' . $row5['wm_name'] . '</td>';
                                    echo '<td>' . $row5['wm_image'] . '</td>';
                                    echo '<td>' . $row5['wm_price'] . '</td>';
                                    echo  '<td><a href="edit.php?id5=' . $row5['wm_id'] . '" class="btn btn-primary mb-3">Edit</a></td>';
                                    echo '<td><a href="wm-delete.php?id5=' . $row5['wm_id'] . '" class="btn btn-primary mb-3">Delete</a></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="col-auto">
                            <a href="insert.php" class="btn btn-primary mb-3">Enter Details</a>
                        </div>
                    </div>
                </div>
            </div>


            <!----------------Shop Items -------------------->

            <div class="container px-5" id="shop">
                <div class="text-center my-5">
                    <h2 class="">Shop Items Details</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col" colspan="2">ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                include('config.php');
                                $fetch_query6 = "SELECT * FROM `shop`";

                                $result6 = mysqli_query($connect, $fetch_query6);
                                while ($row6 = mysqli_fetch_assoc($result6)) {
                                    echo '<tr>';
                                    echo '<td>' . $row6['shop_id'] . '</td>';
                                    echo '<td>' . $row6['shop_image'] . '</td>';
                                    echo '<td>' . $row6['shop_name'] . '</td>';
                                    echo '<td>' . $row6['shop_price'] . '</td>';
                                    echo  '<td><a href="edit.php?id6=' . $row6['shop_id'] . '" class="btn btn-primary mb-3">Edit</a></td>';
                                    echo '<td><a href="shop-delete.php?id6=' . $row6['shop_id'] . '" class="btn btn-primary mb-3">Delete</a></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="col-auto">
                            <a href="insert.php" class="btn btn-primary mb-3">Enter Details</a>
                        </div>
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