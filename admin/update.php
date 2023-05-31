
<!------------------------ carousel  ------------------->

<?php

    include('config.php');

    $id1 = $_POST['id1'];
    $name1 = $_POST['name1'];
    $dis1 = $_POST['dis1'];
    $pic1 = $_POST['pic1'];

    
                    
    $edit_query1 = "UPDATE `carousel` SET `id`='$id1',`name`='$name1',`discount`='$dis1',`image`='$pic1' WHERE `id`='$id1'";
    
                    
    $res1 = mysqli_query($connect, $edit_query1);

    header("location: view.php");

?>



<!------------------------  Mobile carousel  ------------------->



<?php

    include('config.php');

    $id2 = $_POST['id2'];
    $name2 = $_POST['name2'];
    $pic2 = $_POST['pic2'];
    $pri2 = $_POST['pri2'];

    
                    
    $edit_query2 = "UPDATE `mobilecarousel` SET `mob_id`='$id2',`mob_name`='$name2',`mob_image`='$pic2',`mob_price`='$pri2' WHERE `mob_id`='$id2'";
    
                    
    $res2 = mysqli_query($connect, $edit_query2);

    header("location: view.php");

?>



<!------------------------  Smart TV carousel  ------------------->



<?php

    include('config.php');

    $id3 = $_POST['id3'];
    $name3 = $_POST['name3'];
    $pic3 = $_POST['pic3'];
    $pri3 = $_POST['pri3'];

    
                    
    $edit_query3 = "UPDATE `smarttvcarousel` SET `tv_id`='$id3',`tv_name`='$name3',`tv_image`='$pic3',`tv_price`='$pri3' WHERE `tv_id`='$id3'";
    
                    
    $res3 = mysqli_query($connect, $edit_query3);

    header("location: view.php");

?>






<!------------------------  Refrigerator carousel  ------------------->



<?php

    include('config.php');

    $id4 = $_POST['id4'];
    $name4 = $_POST['name4'];
    $pic4 = $_POST['pic4'];
    $pri4 = $_POST['pri4'];

    
                    
    $edit_query4 = "UPDATE `refrigeratorcarousel` SET `ref_id`='$id4',`ref_name`='$name4',`ref_image`='$pic4',`ref_price`='$pri4' WHERE `ref_id`='$id4'";
    
                    
    $res4 = mysqli_query($connect, $edit_query4);

    header("location: view.php");

?>





<!------------------------  Washing Machine carousel  ------------------->



<?php

    include('config.php');

    $id5 = $_POST['id5'];
    $name5 = $_POST['name5'];
    $pic5 = $_POST['pic5'];
    $pri5 = $_POST['pri5'];

    
                    
    $edit_query5 = "UPDATE `washingmachinecarousel` SET `wm_id`='$id5',`wm_name`='$name5',`wm_image`='$pic5',`wm_price`='$pri5' WHERE `wm_id`='$id5'";
    
                    
    $res5 = mysqli_query($connect, $edit_query5);

    header("location: view.php");

?>




<!------------------------  Shop Items  ------------------->



<?php

    include('config.php');

    $id6 = $_POST['id6'];
    $pic6 = $_POST['pic6'];
    $name6 = $_POST['name6'];
    $pri6 = $_POST['pri6'];

    
                    
    $edit_query6 = "UPDATE `shop` SET `shop_id`='$id6',`shop_name`='$name6',`shop_image`='$pic6',`shop_price`='$pri6' WHERE `shop_id`='$id6'";
    
                    
    $res6 = mysqli_query($connect, $edit_query6);

    header("location: view.php");

?>