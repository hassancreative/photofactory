<?php
require 'config.php';
if (isset($_FILES['files']) && !empty($_FILES['files'])) {
    $queryOrder = "SELECT order_no FROM `orders` WHERE order_code = '".$_POST['orderid']."'";
    $result = mysqli_query($connection, $queryOrder);
    $order = mysqli_fetch_array($result);
    $order_no = $order['order_no'];

    $no_files = count($_FILES["files"]['name']);
    for ($i = 0; $i < $no_files; $i++) {
        if ($_FILES["files"]["error"][$i] > 0) {
            echo "Error: " . $_FILES["files"]["error"][$i] . "<br>";
        } else {
            if (file_exists('../../uploads/' . $_FILES["files"]["name"][$i])) {
                echo 'File already exists : ../../uploads/' . $_FILES["files"]["name"][$i]."<br>";
            } else {
                if (!file_exists("../../uploads/$order_no")) {
                    mkdir("../../uploads/$order_no", 0755, true);
                }
                $fnames = $order_no."_".uniqid()."_".$_FILES["files"]["name"][$i];
                move_uploaded_file($_FILES["files"]["tmp_name"][$i], "../../uploads/$order_no/" . $fnames);
                echo 'File successfully uploaded : ../../uploads/' . $_FILES["files"]["name"][$i]."<br>";
            }
        }
    }
}
?>