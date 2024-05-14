<div>
    <!-- Header Section Starts -->
    <!-- Header Section Ends -->  


    <!-- Profile Section Starts -->
    <div class="container">
        <div class="row g-5">
          <div class="col-4 d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  Profile
                </a>
              </li>
              <li>
                <a href="#" class="nav-link active" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  Edit profile
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Favourites
                </a>
              </li>
            </ul>
            <hr>

            <button type="button" class="btn btn-outline-danger">
              <i class="bi bi-box-arrow-left" style="font-size: 16px;"></i>
              Sign out
            </button>
          </div>
            <div class="col-8 mx-auto">
              <h4 class="mb-3">Edit Profile</h4>
              <form class="needs-validation" novalidate="">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="firstName" class="form-label">Fullname</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your fullname" value="" required="">
                    <div class="invalid-feedback">
                      Valid name is required.
                    </div>
                  </div>
      
                  <div class="col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="phonenumber" class="form-label">Phone number </label>
                    <input type="text" class="form-control" id="phonenumber" placeholder="0123456789">
                    <div class="invalid-feedback">
                      Please enter a valid phone number for contact about shipping status.
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="example@email.com">
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                  </div>
                </div>

                <hr class="my-4">
      
                <button class="w-100 btn btn-primary btn-md" type="submit">Save changes</button>
              </form>
            </div>
          </div>
    </div>
    <!-- Profile Section Ends -->
</div>
