<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="./assets/template/spica/template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./assets/template/spica/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/template/spica/template/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./assets/template/spica/template/images/favicon.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="./assets/template/spica/template/images/logo-dark.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post" action="proses.php?action=login">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg border-lift-0" id="exampleInputEmail" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword" placeholder="Password">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center my-3 font-weight-light">
                <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="LOGIN">
                <input type="reset" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="RESET">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="./assets/template/spica/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <script src="./assets/template/spica/template/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- inject:js -->
  <script src="./assets/template/spica/template/js/off-canvas.js"></script>
  <script src="./assets/template/spica/template/js/hoverable-collapse.js"></script>
  <script src="./assets/template/spica/template/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
