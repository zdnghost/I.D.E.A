
<div class="container p-3 bg-warning" id="heroes-section">
      <div class="row flex-lg-row-reverse align-items-center g-5 justify-content-center">
        <div class="col-lg-6">
          <img src="./view/assets/img/banners/shelving-b5da691fc15657844432718a75b747af.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" style="width: 100%; height: 400px;">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">This is IDEA</h1>
          <p class="lead mb-3">
            Welcome to IDEA, your ideal destination for high-quality furniture and endless inspiration 
            for your living space. Explore our diverse collection today!
          </p>
          <?php  if (!isset($_SESSION['userID'])) :?>
          <div class="d-flex gap-3 justify-content-md-start">
            <a class="btn btn-primary px-4" href="javascript:void(0)" role="button" onclick="ShowRegister()">Register now</a>
            <a class="btn btn-primary px-4" href="javascript:void(0)" onclick="ShowLogin()">Login to your account</a>
          </div>
          <?php endif?>
        </div>
      </div>
    </div>