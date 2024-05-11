<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
  <h2>Sản Phẩm </h2>
  <td><button type="button" class="btn btn-primary" style="height:40px" onclick="ShowMau()" >Màu</button></td>
  <td><button type="button" class="btn btn-primary" style="height:40px" onclick="ShowPhong()">Phòng</button></td>
  <td><button type="button" class="btn btn-primary" style="height:40px" onclick="ShowLoai()">Loại</button></td>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ản phẩm</th>
        <th class="text-center"> phòng</th>
        <th class="text-center"> loại</th>
        <th class="text-center">Tên sản phẩm</th>
        <th class="text-center">Giá</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      $sql="SELECT DISTINCT idsanpham,tenphong,tenloai,tensanpham,gia from sanpham join loai on sanpham.idloai=loai.idloai join phong on sanpham.idphong=phong.idphong ";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["idsanpham"]?></td>    
      <td><?=$row["tenphong"]?></td> 
      <td><?=$row["tenloai"]?></td>
      <td><?=$row["tensanpham"]?></td>      
      <td><?=$row["gia"]?></td>   
      <td><button type="button" class="btn btn-primary" style="height:40px" onclick="ShowChiTietSanPham('<?=$row['idsanpham']?>')">Detail</button></td>
      <td><button type="button" class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['idsanpham']?>')">Edit</button></td>
      </tr>
      <?php
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#new-product">
    New Product
  </button>

  <!-- Modal -->
  <div class="modal fade" id="new-product" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Sản Phẩm</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label>Mã phòng:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
          
                  $sql="SELECT * from phong";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idphong']."'>".$row['tenphong'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Mã loại:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
          
                  $sql="SELECT * from loai";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idloai']."'>".$row['tenloai'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="name">Tên sản phẩm:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="name">Giá:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="name">Mô tả:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="name">Hình:</label>
              <input type="file" class="fileToUpload form-control"></input>
            </div>
            
          </form>

        </div>
        <div class="modal-footer">
              <button  class="btn btn-secondary" id="upload" style="height:40px" onclick="">New Item</button>           
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
<?php


?>