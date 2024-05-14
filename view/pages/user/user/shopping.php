<div>
    <!-- Header Section Starts -->
    <!-- Header Section Ends -->  


    <!-- Shopping Section Starts -->
    <div class="container">
      <!-- Thanh tìm kiếm -->
      <form class="py-2 mx-auto d-flex gap-2" style="max-width: 700px;">
        <input class="search-bar form-control" type="text" placeholder="What are you looking for?" aria-label="Search">
        <button class="search-btn btn btn-outline-success" type="submit">Search</button>
      </form>

      <!-- Nút lọc sản phẩm -->
      <div class="d-flex justify-content-between">
        <button class="btn btn-outline-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" type="button" aria-controls="offcanvasExample">
          <i class="col bi bi-filter mr-4"></i> Filter
        </button>
  
        <div class="dropdown">
          <span class="mx-2">Sort by</span>
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
            Default
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Price ascending</a></li>
            <li><a class="dropdown-item" href="#">Price descending</a></li>
          </ul>
        </div>
      </div>
      
      <!-- Menu lọc sản phẩm ẩn -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Search filter</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <form>
            <div class="product-type-filter container pb-3 border-bottom">
              <h5 class="mb-3 fw-normal">Product type</h5>
              <div class="form-check my-3">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">All</label>
              </div>
              <div class="d-flex justify-content-start gap-3 flex-wrap">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Table</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Bed</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Chair</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Sofa</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Closet</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Jar</label>
                </div>
              </div>
            </div>

            <div class="rooms-filter container py-3 border-bottom">
              <h5 class="mb-3 fw-normal">Rooms</h5>
              <div class="form-check my-3">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">All</label>
              </div>
              <div class="d-flex justify-content-start gap-3 flex-wrap">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Living room</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Bedroom</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Bathroom</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Kitchen</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Home office</label>
                </div>
              </div>
            </div>

            <div class="d-flex fixed-bottom justify-content-start gap-3 m-3">
              <button class="btn btn-warning" type="submit">Search</button>
              <button class="btn btn-outline-secondary" type="submit">Reset</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Danh sách sản phẩm -->
      <div class=" product-cards row g-3 justify-content-start pt-3">
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="./view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
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
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="./view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
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
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="./view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
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
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="./view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
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
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="./view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
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
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="./view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
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
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Thanh phân trang -->
      <nav aria-label="..." class="pt-3">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Shopping Section Ends -->

</div>