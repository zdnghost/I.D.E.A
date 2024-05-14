

<div>
    <!-- Header Section Starts -->
    <!-- Header Section Ends -->  


    <!-- Checkout Section Starts -->
    <div class="container py-5" id="checkout-section">
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span>Your cart</span>
                <span class="badge bg-warning rounded-pill">3</span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Product name</h6>
                    <small class="text-success fw-bold">$4</small>
                    <span>x 3</strong>
                  </div>
                  <span class="text-success fw-bold">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Product name</h6>
                    <small class="text-success fw-bold">$4</small>
                    <span>x 3</strong>
                  </div>
                  <span class="text-success fw-bold">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Product name</h6>
                    <small class="text-success fw-bold">$4</small>
                    <span>x 3</strong>
                  </div>
                  <span class="text-success fw-bold">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  <strong>Total (USD)</strong>
                  <strong>$20</strong>
                </li>
              </ul>
              <ul class="nav d-flex justify-content-between">
                <li class="nav-item"><a href="cart.php" class="nav-link px-0">Change your cart</a></li>
                <li class="nav-item"><a href="shop.php" class="nav-link px-0">Continue to shopping</a></li>
              </ul>
            </div>
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Billing address</h4>
              <form class="needs-validation" novalidate="">
                <div class="row g-3">
                  <div class="col-12">
                    <label for="firstName" class="form-label">Fullname</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your fullname" value="" required="">
                    <div class="invalid-feedback">
                      Valid name is required.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" id="username" placeholder="Username" required="">
                    <div class="invalid-feedback">
                        Your username is required.
                      </div>
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="email" class="form-label">Phone number </label>
                    <input type="text" class="form-control" id="phonenumber" placeholder="0123456789" required>
                    <div class="invalid-feedback">
                      Please enter a valid phone number for contact about shipping status.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
                </div>
      
                <hr class="my-4">
      
                <button class="w-100 btn btn-warning btn-lg" type="submit">Proceed to checkout</button>
              </form>
            </div>
          </div>
    </div>
    <!-- Checkout Section Ends -->
</div>
