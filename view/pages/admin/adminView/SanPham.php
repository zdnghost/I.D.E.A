
<div >
  <h2>Sản Phẩm </h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Mã sản phẩm</th>
        <th class="text-center">Mã mẫu</th>
        <th class="text-center">Mã phòng</th>
        <th class="text-center">Mã loại</th>
        <th class="text-center">Tên sản phẩm</th>
        <th class="text-center">Giá</th>
        <th class="text-center">Mô tả</th>
        <th class="text-center">Hình</th>
        <th class="text-center">Số lượng</th>
        <th class="text-center">Trạng thái</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from sanpham";
      $result=$conn-> query($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["idsanpham"]?></td>
      <td><?=$row["idmau"]?></td>      
      <td><?=$row["idphong"]?></td> 
      <td><?=$row["idloai"]?></td>
      <td><?=$row["tensanpham"]?></td>      
      <td><?=$row["gia"]?></td> 
      <td><?=$row["mota"]?></td>
      <td><?=$row["hinh"]?></td>      
      <td><?=$row["soLuong"]?></td>    
      <td><?=$row["trangthai"]?></td>   
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['idsanpham']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" >Delete</button></td>
      </tr>
      <?php
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Product
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
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
              <label for="name">Mã sản phẩm:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label>Mã mẫu:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
                include_once "../config/dbconnect.php";
                  $sql="SELECT * from mau";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idmau']."'>".$row['idmau'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Mã phòng:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
                include_once "../config/dbconnect.php";
                  $sql="SELECT * from phong";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idphong']."'>".$row['idphong'] ."</option>";
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
                include_once "../config/dbconnect.php";
                  $sql="SELECT * from loai";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idloai']."'>".$row['idloai'] ."</option>";
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
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="name">Số lượng:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="name">Trạng thái:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   