<!-----------------------Smart TV carousel  ------------------------->

<?php
 include('config.php');
$id3= $_GET['id3'];
$del_query3= "DELETE FROM `smarttvcarousel` WHERE `tv_id` = $id3";
$result3 = mysqli_query($connect, $del_query3);

if ($result3) {
    header('location:view.php');
}
?>