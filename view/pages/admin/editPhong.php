<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
<td><button type="button" class="btn btn-danger" style="height:40px" onclick="ShowPhong()">Back</button></td>
<h2>Edit Phòng</h4>

<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
<div class="form-group">
      <label for="desc">Mã phòng:</label>
      <input type="text" class="form-control" disabled >
    </div>
    <div class="form-group">
      <label for="desc">Tên phòng:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <button  style="height:40px" class="btn btn-primary">Update Phòng</button>
    </div>
  </form>
    </div>