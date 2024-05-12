<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
    $id=$dp->getNewPhieuNhapId();
?>
<div >
  <h2>Phiếu Nhập </h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Mã Phiếu Nhập</th>
        <th class="text-center">Mã người nhập</th>
        <th class="text-center">Ngày nhập</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php

      $sql="SELECT * from phieunhap";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["idphieunhap"]?></td>
      <td><?=$row["idnguoinhap"]?></td>      
      <td><?=$row["ngaynhap"]?></td>    
      <td><button type="button" class="btn btn-primary" style="height:40px" onclick="editPhieuNhap('<?=$row['idphieunhap']?>')">Edit</button></td>
      <td><button type="button" class="btn btn-danger" style="height:40px" >Delete</button></td>
      </tr>
      <?php
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" onclick="ShowChiTietPhieuNhap(<?=$id?>)">
    New Supply
  </button>

  
</div>
   