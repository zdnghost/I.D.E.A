<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/view/styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header Section Starts -->
    <?php
        include'header.php'
    ?>
    <!-- Header Section Ends -->  


    <!-- Product Detail Section Starts -->
    <div class="container p-3" id="product-detail-section">
      <div class="row g-5 justify-content-between">
        <div class="col-md-6 col-lg-4 d-flex justify-content-center">
          <img src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" style="max-width: 300px;">
        </div>
        <div class="col-md-6 col-lg-3">
          <h4 class="product-name">REVSKÄR</h4>
          <div class="informations">
            <h4 class="text-success fw-bold">$ 199</h4>
            <p><strong>Type:</strong> Sofa</p>
            <p><strong>Room:</strong> Living room</p>
            <strong>Colors:</strong>
            <div class="colors mt-2">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <label>
                    <input type="radio" name="color" value="black" class="d-none" checked>
                    <span class="swatch" style="background-color:#222"></span>
                  </label>
                </li>
                <li class="list-inline-item">
                  <label>
                    <input type="radio" name="color" value="white" class="d-none">
                    <span class="swatch" style="background-color:#fff"></span>
                  </label>
                </li>
                <li class="list-inline-item">
                  <label>
                    <input type="radio" name="color" value="red" class="d-none">
                    <span class="swatch" style="background-color:red"></span>
                  </label>
                </li>
              </ul>
            </div> 
          </div>
          <div class="d-flex mt-3">
            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
            <i class="bi bi-dash"></i>
            </button>

            <input id="form1" min="0" name="quantity" value="1" type="number"
            class="form-control" min="1" style="width: 52px;"/>

            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
            <i class="bi bi-plus"></i>
            </button>
        </div>
          <div class="d-flex gap-1 justify-content-md-start mt-3">
            <button class="add-to-cart-btn btn btn-warning">Add to cart</button>
            <button class="favourite-btn btn btn-outline-danger px-3"><i class="bi bi-heart-fill" style="font-size: 16px;"></i></button>
          </div>
        </div>
        <div class="col-lg-5">
          <h5 class="pb-3 border-bottom">Product Description</h5>
          <p class="product-description">Relax and entertain your guests in this comfy lounge set. It comes with a sofa for 2, a coffee table and a chaise longue with an integrated side table where you can place things you want to keep close.</p>
        </div>
      </div>
    </div>
    <!-- Product Detail Section Ends -->


    <!-- Footer Section Starts -->
    <?php
        include'footer.php'
      ?>
    <!-- Footer Section Ends -->
</body>
