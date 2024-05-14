<?php
session_start();
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
  case 'GET':
    switch ($_GET['action']) {
      case 'getOrderInfo':
        $orderID = $_GET['orderID'];
        $sql = "SELECT * FROM hoadon WHERE idhoadon = " . $orderID;
        $result = $dp->excuteQuery($sql)->fetch_assoc();
        if ($result) {
          echo json_encode($result);
        } else {
          echo "Error";
        }
        break;
      case 'getProductInOrder':
        $orderID = $_GET['orderID'];
        $sql = "SELECT * FROM chitiethoadon WHERE idhoadon = " . $orderID;
        $result = $dp->excuteQuery($sql);
        $products = array();
        if ($result) {
          while ($row = $result->fetch_assoc()) {
            $products[] = $row;
          }
          echo json_encode($products);
        } else {
          echo "Error";
        }
        break;
    }
    break;

  case 'POST':
    switch ($_POST['action']) {
      case 'createOrder':
        $address = $_POST['address'];
        $userID = $_SESSION['userID'];
        $products = json_decode($_POST['products']);
        $hoaDonID = $dp->getNewHoaDonId();
        $sql1 = "INSERT INTO hoadon
        VALUES (" . $hoaDonID .",".$userID.",'".(new Datetime())->format('Y-m-d')."',1,NULL,'" .$address."')";
        $result1 = $dp->excuteQuery($sql1);
        $error = false;
        foreach ($products as $product) {
          $sql = "INSERT INTO chitiethoadon
                  VALUES (" .$hoaDonID . ",". $product->{"productID"} . "," . $product->{"colorID"} . ",". $product->{"quantity"} . "," . $product->{"productPrice"} . ","   . $product->{"total"} . ")";
          $result = $dp->excuteQuery($sql);
          if (!$result) {
            $error = true;
          }
        }
        if ($result1 && !$error) {
          echo "Success";
        } else {
          echo "Error";
        }
        break;
    }
    break;
  case 'PUT':
    switch ($_GET['action']) {
      case 'cancelOrder':
        $orderID = $_GET['orderID'];
        $sql = "UPDATE hoadon SET trangThai =0  WHERE idhoadon = " . $orderID;
        $result = $dp->excuteQuery($sql);
        if ($result) {
          echo "Success";
        } else {
          echo "Error";
        }
        break;
      case 'updateOrder':
        $orderID = $_GET['orderID'];
        $status = $_GET['status'];
        $confirmUser=$_SESSION['userID'] ;
        $f = true;
        if ($status == 2) {
          $sql = "SELECT * from chitiethoadon where idhoadon=".$orderID;  
          $result = $dp->excuteQuery($sql);
          $products = array();
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              array_push($products, $row);
            }
          }
          foreach ($products as $product) {
            $sql = "SELECT * FROM sanpham where idsanpham=" . $product['idsanpham']." and idmau=".$product['idmau'];
            $result = $dp->excuteQuery($sql);
            $sl = $result->fetch_assoc()['soLuong'];
            if ($sl < $product['soluong']) {
              $f = false;
              break;
            }
          }
        }
        if (!$f) {
          echo "Not enough product quantity";
          break;
        }
        $sql = "UPDATE hoadon SET trangthai=". $status.", idphutrach=".$confirmUser. " WHERE idhoadon = " . $orderID;
        $result1 = $dp->excuteQuery($sql);
        $error = false;
        if ($status == 2) {
          $sql = "SELECT * from chitiethoadon where idhoadon=".$orderID;
          $result = $dp->excuteQuery($sql);
          if ($result->num_rows > 0) {
            $products = array();
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                array_push($products, $row);
              }
            }
            foreach ($products as $product) {
              $sql = "UPDATE sanpham SET soLuong = soLuong - " . $product['soluong'] . " WHERE idsanpham = " . $product['idsanpham']." and idmau =".$product['idmau'];
              $result = $dp->excuteQuery($sql);
            }
        }
      }
        if ($result1 && !$error) {
          echo "Success";
        } else {
          echo "Error";
        }
        break;
    }
    break;
}