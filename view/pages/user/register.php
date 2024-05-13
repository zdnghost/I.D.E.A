
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./view/styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header Section Starts -->
    <?php
        include'header.php'
    ?>
    <!-- Header Section Ends -->  


    <!-- Register Section Starts -->
    <div class="container py-5 text-center border-bottom" style="max-width: 500px;">
        <main class="form-login">
            <form>
              <img class="mb-3" src="/view/assets/img/logo.png" alt="" width="auto" height="60px">
              <h2 class="mb-3 fw-normal">Create your new account</h2>
          
              <div class="form-floating mb-2">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-2">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-2">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
                <label for="floatingPassword">Confirm password</label>
              </div>
          
              <div class="d-flex align-items-center justify-content-center pb-4 mt-4">
                <p class="mb-0 me-2">Already have an account?</p>
                <a class="login-btn btn btn-outline-primary" href="login.php" role="button">Login here</a>
              </div>

              <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>
            </form>
          </main>
    </div>
    <!-- Register Section Ends -->


    <!-- Footer Section Starts -->
      <?php
        include'footer.php'
      ?>
  <!-- Footer Section Ends -->
</body>
