<?php
   session_start();
   require("../../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div class="container pt-5" id="popular-products-section">
      <h2 class="py-3 border-bottom">Popular Products</h2>
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
      <div class="row g-3 justify-content-start pt-3 product-cards">
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="javascript:void(0)" onclick="ShowThongTin(<?=$row['idsanpham']?>)" class="link-body-emphasis text-decoration-none">
              <img
              src="./data/img/<?=$row['idsanpham']?>/<?=$image['hinh']?>"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php"><?=$row['tensanpham']?></a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price"><?=$row['gia']?> đ</strong>
              </div>
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      <?php }
    }?>
        
        <div class="col-12 d-flex justify-content-center align-items-center pt-3">        
          <a class="btn btn-secondary px-4 w-50" href="shopping.php" role="button">See all</a>
        </div>
      </div>

    </div>