

<!------------------------Refrigerator carousel  ------------------------->


<?php
 include('config.php');
$id4= $_GET['id4'];
$del_query4= "DELETE FROM `refrigeratorcarousel` WHERE `ref_id` = $id4";
$result4 = mysqli_query($connect, $del_query4);

if ($result4) {
    header('location:view.php');
}
?>