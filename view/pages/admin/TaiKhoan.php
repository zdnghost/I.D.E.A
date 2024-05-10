<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
    $newID=getNewAccID();
?>
<div >
  <h2>Tài Khoản </h2>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#new-account">
    New Account
  </button>
  
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Username</th>
        <th class="text-center">Ngày tạo</th>
        <th class="text-center">Vai trò</th>
        <th class="text-center">Họ tên</th>
        <th class="text-center">Email</th>
        <th class="text-center" colspan="1">Action</th>
      </tr>
    </thead>
    <?php
      $sql="SELECT * from taikhoan tk join nguoidung ng on tk.idnguoidung=ng.idnguoidung where trangthai=1 ";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["username"]?></td>       
      <td><?=$row["ngaytao"]?></td>
      <td><?=$row["vaitro"]?></td>
      <td><?=$row["hoten"]?></td>
      <td><?=$row["email"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="editTaiKhoan('<?=$row['username']?>')">Edit</button></td>
      </tr>
      <?php
          }
        }
      ?>
  </table>



  <!-- Modal -->
  <div class="modal fade" id="new-account" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Tài Khoản</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">

    <div class="form-group">
      <label for="desc">Username:</label>
      <input type="text" class="form-control username"  >
    </div>
    <div class="form-group">
      <label for="desc">Password:</label>
      <input type="password" class="form-control password"  >
    </div>
    <div class="form-group">
              <label>Vai trò:</label>
              <select id="category " class="role">
                <option disabled selected>Chọn</option>
                <?php

                  $sql="SELECT * from vaitro";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idvaitro']."'>".$row['tenvaitro'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
    <div class="form-group">
      <label for="desc">Họ Tên:</label>
      <input type="text" class="form-control name"  >
    </div>
    <div class="form-group">
      <label for="desc">email:</label>
      <input type="text" class="form-control email"  >
    </div>
    <div class="form-group">
      <label for="desc">SĐT :</label>
      <input type="text" class="form-control phoneNumber"  >
    </div>
    <div class="form-group">
      <label for="desc">Địa chỉ:</label>
      <input type="text" class="form-control address"  >
    </div>
       <div class="modal-footer">
              <button type="button" class="btn btn-secondary" id="upload" style="height:40px" onClick="createNewAccount()">Add Item</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
function getNewAccID(){
  global $dp;
  $sql = "SELECT MAX(idnguoidung) as newID FROM taikhoan";
  $result=$dp->excuteQuery($sql);
  $newID = 1;
  if ($result->num_rows > 0) {
    $newID = $result->fetch_assoc()['newID'] + 1;
}
return $newID;
}

?>