<?php
   session_start();
   require("../../../../util/dataProvider.php");
    $dp=new DataProvider();
    $id=$_GET['id'];
    $sql='select * from sanpham 
    join phong on sanpham.idphong=phong.idphong 
    join loai on sanpham.idloai=loai.idloai
    join mau on sanpham.idmau=mau.idmau
    where idsanpham='.$id." and trangthai=1";
    $result=$dp->excuteQuery($sql);
    $info=$result-> fetch_assoc();
?>
<div>
    <!-- Header Section Starts -->

    <!-- Header Section Ends -->  


    <!-- Product Detail Section Starts -->
    <div class="container p-3" id="product-detail-section">
      <div class="row g-5 justify-content-between">
        <div class="col-md-6 col-lg-4 d-flex justify-content-center">
          <img src="./data/img/<?=$info['idsanpham']?>/<?=$info['hinh']?>" id="productimg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" style="max-width: 300px;">
        </div>
        <div class="col-md-6 col-lg-3">
          <h4 class="product-name"><?=$info['tensanpham']?></h4>
          <div class="informations">
            <h4 class="text-success fw-bold"><?=$info['gia']?> đ</h4>
            <p><strong>Type: </strong><?=$info['tenloai']?></p>
            <p><strong>Room: </strong><?=$info['tenphong']?></p>
            <strong>Colors: </strong>
            <div class="colors mt-2">
              <ul class="list-unstyled list-inline">
             
              <li class="list-inline-item">  
              <div class="button">
                
                    <input type="radio" name="color" id="<?=$info['idmau']?>" value="<?=$info['idmau']?>" class="d-none" checked onclick="loadimg(<?=$id?>,'<?=$info['hinh']?>')">
                    
                    <label for="<?=$info['idmau']?>"><?=$info['tenMau']?></label>
                </div></li>
                <?php  if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
          echo '<li class="list-inline-item"><div class="button"><input type="radio" name="color" id="'.$row['idmau'].'" value="'.$row['idmau'].'" class="d-none" onclick="loadimg('.$id.",'".$row['hinh']."'".')"><label for="'.$row['idmau'].'">'.$row['tenMau'].'</label></div></li>';
        }
      }?>
              </ul>
            </div> 
          </div>
          <div class="d-flex mt-3">
            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
            <i class="bi bi-dash"></i>
            </button>

            <input id="form1" min="0" name="quantity" value="1" type="number"
            class="form-control" min="1" style="width: 52px;"/>

            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
            <i class="bi bi-plus"></i>
            </button>
        </div>
          <div class="d-flex gap-1 justify-content-md-start mt-3">
            <button class="add-to-cart-btn btn btn-warning">Add to cart</button>
            <button class="favourite-btn btn btn-outline-danger px-3"><i class="bi bi-heart-fill" style="font-size: 16px;"></i></button>
          </div>
        </div>
        <div class="col-lg-5">
          <h5 class="pb-3 border-bottom">Product Description</h5>
          <p class="product-description"><?=$info['mota']?></p>
        </div>
      </div>
    </div>
    <!-- Product Detail Section Ends -->
</div>
<script>
  function loadimg(id,name){
    document.getElementById("productimg").src="./data/img/"+id+"/"+name;
  }
</script>
