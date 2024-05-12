<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
<td><button type="button" class="btn btn-danger" style="height:40px" onclick="ShowSanPham()">Back</button></td>

  <h2>Màu </h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Mã màu</th>
        <th class="text-center">Tên màu</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php

      $sql="SELECT * from mau where idmau!=0";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["idmau"]?></td>
      <td><?=$row["tenMau"]?></td>      
      <td><button type="button" class="btn btn-primary" style="height:40px" onclick="editMau('<?=$row['idmau']?>')">Edit</button></td>
      <td><button type="button" class="btn btn-danger" style="height:40px" >Delete</button></td>
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
          <h4 class="modal-title">New Màu</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
    <div class="form-group">
      <label for="desc">Tên màu:</label>
      <input type="text" class="form-control"  >
    </div>
            
          </form>

        </div>
       <div class="modal-footer">
              <button typer="button" onclick="newmau()" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
    </div>
  </div>

  
</div>