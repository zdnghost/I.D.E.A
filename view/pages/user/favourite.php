
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
    <div class="container" id="header-section">
      <header class="py-3 mb-3 border-bottom">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid gap-5 p-0 d-flex align-items-center ">
            <a href="index.php" class="link-body-emphasis text-decoration-none">
              <img src="./view/assets/img/logo.png" alt="" width="100px">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
              <ul class="nav nav-pills gap-2 navigation-links">
                <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="shopping.php" class="nav-link">Shopping</a></li>
                <li class="nav-item"><a href="profile.php" class="nav-link">My Account</a></li>
                <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                <li class="nav-item"><a href="checkout.php" class="nav-link">Checkout</a></li>
              </ul>
    
              <ul class="nav nav-pills navigation-icons">
                <li class="nav-item"><a href="cart.php" class="nav-link">
                    <i class="bi bi-bag" style="font-size: 16px;"></i>
                </a></li>
                <li class="nav-item"><a href="favourite.php" class="nav-link">
                    <i class="bi bi-heart" style="font-size: 16px;"></i>
                </a></li>
                <li class="nav-item"><a href="profile.php" class="nav-link">
                    <i class="bi bi-person" style="font-size: 16px;"></i>
                </a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    </div>
    <!-- Header Section Ends -->  


    <!-- Favourite Section Starts -->
    <div class="container py-5" id="favourite-section">
      <h4 class="mb-3">Your favourite items</h4>

      <div class=" product-cards row g-3 justify-content-start pt-3">
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-x-lg pt-2 text-end px-2 text-danger"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-center mt-1">
                <p class="fst-italic fw-light">In stock</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-x-lg pt-2 text-end px-2 text-danger"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-center mt-1">
                <p class="fst-italic fw-light">In stock</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-x-lg pt-2 text-end px-2 text-danger"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-center mt-1">
                <p class="fst-italic fw-light">In stock</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-x-lg pt-2 text-end px-2 text-danger"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-center mt-1">
                <p class="fst-italic fw-light">In stock</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-x-lg pt-2 text-end px-2 text-danger"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-center mt-1">
                <p class="fst-italic fw-light">In stock</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-x-lg pt-2 text-end px-2 text-danger"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-center mt-1">
                <p class="fst-italic fw-light">In stock</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Favourite Section Ends -->


    <!-- Footer Section Starts -->
    <?php
        include'footer.php'
      ?>
    <!-- Footer Section Ends -->
</body>
