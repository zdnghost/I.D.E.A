<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
    $id=$_POST['id'];
    $product 
?>
<div >
  <button type="button" class="btn btn-danger" style="height:40px" onclick="ShowSanPham()" >Back</button>
  <h2>Chi Tiết Sản Phẩm </h2>
  <h4 class="modal-title">Sản phẩm : <?=$id?></h4>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center"> màu</th>
        <th class="text-center">Số lượng</th>
        <th class="text-center">Hình</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      $sql="SELECT * from sanpham join mau on sanpham.idmau=mau.idmau where idsanpham='".$id."' and trangthai=1";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {

    ?>
    <tr>
      <td><?=$row["tenMau"]?></td>    
      <td><?=$row["soLuong"]?></td> 
      <td><?=$row["hinh"]?></td> 
      <td><button type="button" class="btn btn-danger" style="height:40px" onclick="itemEditForm('<?=$row['idsanpham']?>')">Delete</button></td>
      </tr>
      <?php
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#new-product">
    Add Product
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
              <label> màu:</label>
              <select id="category" class="form-control">
                <option id="" disabled selected>Chọn</option>
                <?php
                  $sql="SELECT * from mau where idmau!=0 and idmau not in (select mau.idmau from sanpham join mau on sanpham.idmau=mau.idmau where idsanpham=".$id.") ";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idmau']."'>".$row['tenMau'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="name">Hình:</label>
              <input type="file" class="fileToUpload form-control"></input>
            </div>
            
          </form>

        </div>
        <div class="modal-footer">
              <button  class="btn btn-secondary" id="upload" style="height:40px" onclick="">Add Item</button>           
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
<?php
    ?>