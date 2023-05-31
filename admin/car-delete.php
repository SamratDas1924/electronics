



<!------------------------ carousel  ------------------------->

<?php
 include('config.php');
$id1= $_GET['id1'];
$del_query1= "DELETE FROM `carousel` WHERE `id` = $id1";
$result1 = mysqli_query($connect, $del_query1);

if ($result1) {
    header('location:view.php');
}
?>

