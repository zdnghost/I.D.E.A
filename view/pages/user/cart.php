<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
session_start();
$userID = $_SESSION['$userID'];
$sql1 = "SELECT giohang.soluong as slgh, sanpham.* FROM giohang join sanpham on (giohang.idsanpham = sanpham.idsanpham and giohang.idmau = sanpham.idsanpham) 
          where idnguoidung = '" . $userID . "'";
$result1 = $dp->excuteQuery($sql1);
$sanpham = array();
if ($result1->num_rows > 0) {
  while ($row = $result1->fetch_assoc()) {
    array_push($sanpham, $row);
  }
  }
$sql2 = "select diaChi from nguoiDung where idnguoidung='" . $userID . "'";
$result2 = $dp->excuteQuery($sql2);
$address = $result2->fetch_assoc()['diachi'];
?>
    <!-- Header Section Starts -->
    <?php
        include'header.php'
    ?>
    <!-- Header Section Ends -->  


    <!-- Cart Section Starts -->
    <div class="container border-bottom py-5" id="cart-section">
        <div class="row g-5">
            <div class="col-md-4 col-lg-3 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span>Summary</span>
                <span class="badge bg-warning rounded-pill">3</span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between">
                  <strong>Total (USD)</strong>
                  <strong>00</strong>
                </li>
              </ul>
              <a href="checkout.php" class="w-100 btn btn-warning btn-md" role="button">Proceed to checkout</a>
            </div>
            <div class="col-md-8 col-lg-9">
              <h4 class="mb-3">Your cart</h4>

              <hr class="my-4">
              <?php foreach ($sanpham as $sp): ?>
                <div class="row mb-4 d-flex flex-wrap align-items-center">
                <div class="col-2">
                    <a href="product-detail.php">
                      <img
                    src="/data/img/<?= $al['hinh'] ?>"
                    class="img-fluid rounded-3" alt="Cotton T-shirt" style="overflow: hidden; width: 100px;">
                    </a>
                </div>
                <div class="col-3 text-break">
                    <h6 class="text-muted"><a href="product-detail.php" class="text-decoration-none text-black nav-link px-0"><?= $sp['tensanpham'] ?></a></h6>
                    <h6 class="text-black mb-0">$ 199</h6>
                </div>
                <div class="col-3 d-flex">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                    onclick="changeQuantity(<?= $sp['masanpham'] ?>,-1,this);summary()">
                    <i class="bi bi-dash"></i>
                    </button>

                    <input type="text" id="form1" min="0" name="quantity" value="1" type="number"
                    onchange="changeQuantity(<?= $sp['masanpham'] ?>,0,this);">
                    class="form-control" min="1" style="width: 52px;"/>
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                    onclick="changeQuantity(<?= $sp['masanpham'] ?>,1,this);">
                    <i class="bi bi-plus"></i>
                    </button>
                </div>
                <div class="col-3">
                    <h6 class="mb-0"><?= number_format((float) $al["gia"], 2, '.', '') ?></h6>
                </div>
                <div class="col-1 text-end">
                    <a href="#!" class="text-muted"><i class="bi bi-x-lg"></i></a>
                </div>
                </div>

                <hr class="my-4">

                <?php endforeach ?>
                
                
    <!-- Cart Section Ends -->


    <!-- Footer Section Starts -->
    <?php
      include'footer.php'
    ?>
  <!-- Footer Section Ends -->
</body>
