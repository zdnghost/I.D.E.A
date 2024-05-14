<?php
require("../../../../util/dataProvider.php");
$dp = new DataProvider();
session_start();
$userID = $_SESSION['userID'];
$sql1 = "SELECT giohang.soluong as slgh, sanpham.* FROM giohang join sanpham on (giohang.idsanpham = sanpham.idsanpham and giohang.idmau = sanpham.idsanpham) 
          where idnguoidung = '" . $userID . "'";
$result1 = $dp->excuteQuery($sql1);
$sanpham = array();
if ($result1->num_rows > 0) {
  while ($row = $result1->fetch_assoc()) {
      array_push($album, $row);
  }
}
$sql2 = "select * from nguoiDung where idnguoidung='" . $userID . "'";
$result2 = $dp->excuteQuery($sql2);
$address = $result2->fetch_assoc()['diachi'];
?> 
<div>
    <!-- Header Section Starts -->

    <!-- Header Section Ends -->  


    <!-- Cart Section Starts -->
    <div class="container border-bottom py-5" id="cart-section">
        <div class="row g-5">
            <div class="col-md-4 col-lg-3 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span>Summary</span>
                <span class="badge bg-warning rounded-pill">3</span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between">
                  <strong>Total (USD)</strong>
                  <strong>$20</strong>
                </li>
              </ul>
              <a href="checkout.php" class="w-100 btn btn-warning btn-md" role="button">Proceed to checkout</a>
            </div>
            <div class="col-md-8 col-lg-9">
              <h4 class="mb-3">Your cart</h4>
              <?php    
      $sql="SELECT min(idmau),idsanpham,gia,tensanpham from sanpham where trangthai=1 group by idsanpham,gia,tensanpham ";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
          $sql2="SELECT hinh from sanpham where idsanpham=".$row['idsanpham']." and idmau=".$row['min(idmau)'];
              $result2=$dp-> excuteQuery($sql2);
              if ($result2-> num_rows > 0){
                 $image=$result2-> fetch_assoc();
                }
          ?>
                <hr class="my-4">

                <div class="row mb-4 d-flex flex-wrap align-items-center">
                <div class="col-2">
                    <a href="product-detail.php">
                      <img
                    src="./data/img/<?=$row['idsanpham']?>/<?=$image['hinh']?>"
                    class="img-fluid rounded-3" alt="Cotton T-shirt" style="overflow: hidden; width: 100px;">
                    </a>
                </div>
                <div class="col-3 text-break">
                    <h6 class="text-muted"><a href="product-detail.php" class="text-decoration-none text-black nav-link px-0"><?=$row['tensanpham']?></a></h6>
                    <h6 class="text-black mb-0"><?=$row['gia']?> đ</h6>
                </div>
                <div class="col-3 d-flex">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="bi bi-dash"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="1" type="number"
                    class="form-control" min="1" style="width: 52px;"
                    onchange="changeQuantity(<?= ['idsanpham'] ?>,0,this)"/>

                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="bi bi-plus"></i>
                    </button>
                </div>
                <div class="col-3">
                    <h6 class="mb-0">$ 199</h6>
                </div>
                <div class="col-1 text-end">
                    <a href="#!" class="text-muted"><i class="bi bi-x-lg"></i></a>
                </div>
                </div>
        <?php }
      }?>

          </div>
          </div>
    </div>
    <!-- Cart Section Ends -->
</div>
