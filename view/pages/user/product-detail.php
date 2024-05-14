<?php
   session_start();
   require("../../../util/dataProvider.php");
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
                
                    <input type="radio" name="color" id="<?=$info['idmau']?>" value="<?=$info['idmau']?>" class="d-none color" checked onclick="loadimg(<?=$id?>,'<?=$info['hinh']?>')">
                    
                    <label for="<?=$info['idmau']?>"><?=$info['tenMau']?></label>
                </div></li>
                <?php  if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {

          echo '<li class="list-inline-item"><div class="button"><input type="radio" name="color" id="'.$row['idmau'].'" value="'.$row['idmau'].'" class="d-none color" onclick="loadimg('.$id.",'".$row['hinh']."'".');"><label for="'.$row['idmau'].'">'.$row['tenMau'].'</label></div></li>';
        }
      }?>
              </ul>
            </div> 
          </div>
          <div class="d-flex gap-1 justify-content-md-start mt-3">
            <button type="button" class="add-to-cart-btn btn btn-warning" onclick="addToCart(<?=$info['idsanpham']?>,getcurrentColor())">Add to cart</button>
            <!---->
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
  };
  function getcurrentColor(){
   let checkboxs=document.getElementsByClassName("color");
   for(let i=0;i<checkboxs.length;i++){
    if(checkboxs[i].checked==true){
      console.log(checkboxs[i].value);
     return checkboxs[i].value;
    }
   }
  };
</script>
