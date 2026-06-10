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
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <!-- Ganti bagian <form class="pt-3"> menjadi seperti ini -->
                            <form class="pt-3" method="POST" action="proses_register.php">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="username"
                                        placeholder="Username" required>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        placeholder="Password" required>
                                </div>

                                <div class="form-group">
                                    <select class="form-control form-control-lg" name="tipe_user" required>
                                        <option value="" disabled selected>Role</option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Supplier">Supplier</option>
                                        <option value="Customer">Customer</option>
                                    </select>
                                </div>

                                <div class="text-center my-3 font-weight-light">
                                    <input type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        value="CREATE">

                                    <input type="reset"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        value="RESET">
                                </div>

                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account?
                                    <a href="login.php" class="text-primary">Login</a>
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