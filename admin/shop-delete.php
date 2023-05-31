

<!------------------------Shop Items  ------------------------->


<?php
 include('config.php');
$id6= $_GET['id6'];
$del_query6= "DELETE FROM `shop` WHERE `shop_id` = $id6";
$result6 = mysqli_query($connect, $del_query6);

if ($result6) {
    header('location:view.php');
}
?>