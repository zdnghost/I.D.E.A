<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div class="container p-5">

<h4>Edit Chi Tiết Phiếu Nhập</h4>

<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
<div class="form-group">
              <label>Mã phiếu nhập:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
          
                  $sql="SELECT * from phieunhap";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idphieunhap']."'>".$row['idphieunhap'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Mã sản phẩm:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
          
                  $sql="SELECT * from sanpham";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idsanpham']."'>".$row['idsanpham'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Mã mẫu:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
          
                  $sql="SELECT * from mau";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idmau']."'>".$row['idmau'] ."</option>";
                    }
                  }
                ?>
              </select>
            <div class="form-group">
              <label for="price">Số lượng:</label>
              <input type="number" class="form-control" id="p_price" required>
            </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
  </form>
    </div>