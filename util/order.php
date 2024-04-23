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
        $total = $_POST['total'];
        $address = $_POST['address'];
        $userID = $_SESSION['userID'];
        $products = json_decode($_POST['products']);
        $sale=$_POST['sale'];
        $hoaDonID = $dp->getNewHoaDonId();
        $sql1 = "INSERT INTO hoadon
        VALUES (" . $hoaDonID .",".$idnguoidung.",".$total.",".(new Datetime())->format('Y-m-d')."1,NULL,'" .$address."',".$sale.")";
        $result1 = $dp->excuteQuery($sql1);
        $error = false;
        foreach ($products as $product) {
          $sql = "INSERT INTO chitiethoadon
                  VALUES (" .$hoaDonID . ",". $products->{"productID"} . "," . $products->{"colorID"} . ",". $products->{"productPrice"} . "," . $products->{"Total"} . ","   . $product->{"quantity"} . ")";
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
        $f = true;
        if ($status == 2) {
          $sql = "";
          $result = $dp->excuteQuery($sql);
          $products = array();
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              array_push($products, $row);
            }
          }
          foreach ($products as $product) {
            $sql = "SELECT soLuong FROM sanpham where idsanpham=" . $product['product']." and idmau=".$product['color'];
            $result = $dp->excuteQuery($sql);
            $sl = $result->fetch_assoc()['soLuong'];
            if ($sl < $product['soLuong']) {
              $f = false;
              break;
            }
          }
        }
        if (!$f) {
          echo "Not enough product quantity";
          break;
        }


        $sql = "UPDATE hoadon SET trangThai = " . $status . " WHERE idhoadon = " . $orderID;
        $result1 = $dp->excuteQuery($sql);
        $error = false;
        if ($status == "Shipping") {
          $sql = "SELECT cthd.idsanpham,cthd.idmau, cthd.soLuong
                  FROM chitiethoadon cthd join hoadon hd on cthd.idhoadon = hd.idhoadon
                  WHERE hd.idhoadon = $orderID";
          $result = $dp->excuteQuery($sql);
          $products = array();
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              array_push($products, $row);
            }
          }
          foreach ($products as $product) {
            $sql = "UPDATE product SET soLuong = soLuong - " . $product['soLuong'] . " WHERE idsanpham = " . $product['product']." and idmau =".$product['color'];
            $result = $dp->excuteQuery($sql);
            if (!$result) {
              $error = true;
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