<?php
session_start();
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
  case 'POST':
    switch ($_POST['action']) {
      case 'addToCart':
        if (!isset($_SESSION['userID'])) {
          echo "You are not logged in!";
          break;
        }
        $albumID = $_POST['albumID'];
        if (!isset($_SESSION['userID'])) {
          echo "You are not logged in!";
          break;
        }
        $userID = $_SESSION['userID'];
        $result = $dp->getItemInCart($albumID, $userID);
        if (mysqli_num_rows($result) != 0) {
          echo "Album already exists in your cart!";
        } else {
          $sql = "INSERT INTO giohang
          VALUES ('" . $userID . "'," . $albumID . "," . 1 . ")";
          $result = $dp->excuteQuery($sql);
          if ($result) {
            echo "Added to your Cart";
          } else {
            echo "Error";
          }
        }
        break;
    }
    break;
  case 'PUT':
    $userID = $_SESSION['userID'];
    $productID = $_GET['productID'];
    $quantity = $_GET['quantity'];
    $color=$_GET['color'];
    $sql = "UPDATE giohang
          SET soLuong = " . $quantity .
      " WHERE idnguoidung = '" . $userID . "' and idSanPham = " . $productID." and idMau=".$color;
    $result = $dp->excuteQuery($sql);
    if ($result) {
      echo "Success";
    } else {
      echo "Error";
    }
    break;
  case 'DELETE':
    $albumID = $_GET['albumID'];
    $productID = $_GET['productID'];
    $color=$_GET['color'];
    $sql = "DELETE FROM giohang WHERE maKhachHang = '" . $userID . "' and maAlbum = " . $productID." and idMau=".$color;
    $result = $dp->excuteQuery($sql);
    if ($result) {
      echo "Success";
    } else {
      echo "Error";
    }
    break;
}