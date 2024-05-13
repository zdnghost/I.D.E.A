<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
  <h2>Hóa Đơn </h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Mã Hóa Đơn</th>
        <th class="text-center">Tên khách hàng</th>
        <th class="text-center">Thời gian đặt</th>
        <th class="text-center">Trạng Thái</th>
        <th class="text-center">Địa chỉ giao hàng</th>
        <th class="text-center" >Action</th>
      </tr>
    </thead>
    <?php
      $sql="SELECT * from hoadon join nguoidung on hoadon.idnguoidung=nguoidung.idnguoidung";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["idhoadon"]?></td>
      <td><?=$row["hoten"]?></td>      
      <td><?=$row["thoigiandat"]?></td>    
      <?php if($row['trangthai']==1){?>
      <td>chờ xử lý</td>
      <?php }?>
      <?php if($row['trangthai']==-1){?>
      <td>hủy</td>
      <?php }?>
      <?php if($row['trangthai']==2){?>
      <td>đã xử lý</td> 
      <?php }?>
      <td><?=$row["diachigiaohang"]?></td>     
      <td><button type="button" class="btn btn-primary" style="height:40px" onclick="editHoaDon('<?=$row['idhoadon']?>')">Edit</button></td>
      </tr>
      <?php
          }
        }
      ?>
  </table>


  
</div>
   