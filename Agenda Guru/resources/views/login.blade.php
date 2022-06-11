<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./assets/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="./assets/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./assets/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./assets/template/images/favicon.png" />
</head>




<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
              
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../assets/template/images/Oslo.png" alt="logo">
              </div>

              <form action="/postlogin" method="POST">
              @csrf
                <div class="input-group mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                  </div>
                </div>
                <div class="col-4 m-auto">
                  <button type="submit" name="submit" class="btn btn-primary ">Masuk</button>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
</div>
    <!-- page-body-w