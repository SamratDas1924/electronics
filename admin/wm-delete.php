<!------------------------Mobile carousel  ------------------------->


<?php
 include('config.php');
$id5= $_GET['id5'];
$del_query5= "DELETE FROM `washingmachinecarousel` WHERE `wm_id` = $id5";
$result5 = mysqli_query($connect, $del_query5);

if ($result5) {
    header('location:view.php');
}
?>