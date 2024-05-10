<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
   $username = $_POST["id"];
    $account=getAccount($username);
?>
<div >

<h2>Edit Tài Khoản</h4>
<td><button class="btn btn-danger" style="height:40px" onclick="ShowTaiKhoan()">Back</button></td>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
    <div class="form-group">
      <label for="desc">Username:</label>
      <input type="text" class="form-control" value="<?=$account['username']?>" disabled >
    </div>
    <div class="form-group">
      <label for="desc">Ngày tạo:</label>
      <input type="text" class="form-control" value="<?=$account['ngaytao']?>" disabled>
    </div>
    <div class="form-group">
              <label>Vai trò:</label>
              <select id="category" <?php if ($account['vaitro'] == 1) {
                    echo 'disabled';
                } ?> >
                <option disabled selected><?=$account['tenvaitro']?></option>
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
      <label for="desc">Họ tên:</label>
      <input type="text" class="form-control" value="<?=$account['hoten']?>" disabled >
    </div>       
    <div class="form-group">
      <label for="desc">SĐT:</label>
      <input type="text" class="form-control" value="<?=$account['sdt']?>"  disabled>
    </div>
    <div class="form-group">
      <label for="desc">Địa chỉ:</label>
      <input type="text" class="form-control" value="<?=$account['diachi']?>" disabled>
    </div>
    <div class="form-group">
      <label for="desc">Email:</label>
      <input type="text" class="form-control" value="<?=$account['email']?>" disabled>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
  </form>
    </div>
    <?php
    function getAccount($accountID)
    {
        global $dp;
        $sql = "SELECT * FROM taikhoan
                join nguoidung on taikhoan.idnguoidung = nguoidung.idnguoidung
                join vaitro on taikhoan.vaiTro = vaitro.idvaitro
                WHERE username ='" . $accountID."'";
        $result = $dp->excuteQuery($sql);
        return $result->fetch_assoc();
    }
    ?>