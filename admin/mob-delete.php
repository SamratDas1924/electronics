

<!------------------------Mobile carousel  ------------------------->


<?php
 include('config.php');
$id2= $_GET['id2'];
$del_query2= "DELETE FROM `mobilecarousel` WHERE `mob_id` = $id2";
$result2 = mysqli_query($connect, $del_query2);

if ($result2) {
    header('location:view.php');
}
?>

