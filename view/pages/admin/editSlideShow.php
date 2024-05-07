<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div class="container p-5">

<h4>Edit Mẫu</h4>

<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
<div class="form-group">
      <label for="desc">Mã mẫu:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label for="desc">Tên mẫu:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
  </form>
    </div>