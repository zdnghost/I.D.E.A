
<div class="container p-5">

<h4>Edit Phiếu Nhập</h4>

<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
<div class="form-group">
              <label>Mã Phiếu Nhập:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
                include_once "../config/dbconnect.php";
                  $sql="SELECT * from phieunhap";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['maPhieuNhap']."'>".$row['maPhieuNhap'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
      <label for="desc">Ngày nhập:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
              <label>Người Nhập:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
                include_once "../config/dbconnect.php";
                  $sql="SELECT * from nguoidung";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idnguoidung']."'>".$row['idnguoidung'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
  </form>
    </div>