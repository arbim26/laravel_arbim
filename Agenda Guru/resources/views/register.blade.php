
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SMP 49 Oslo</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="../assets/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../assets/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../assets/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../assets/template/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="../assets/template/images/favicon.png" /> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../assets/template/images/Oslo.png" alt="logo">
              </div>
              <h4>Daftar Admin Baru</h4>
              <form action="/registernew" method="POST">
              @csrf
                <div class="input-group mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Nama">
                  @error('name')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="input-group mb-3">
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  @error('email')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-4 m-auto">
                  <button type="submit" name="submit" class="btn btn-primary ">Daftar</button>
                  <a href="/dashboard" class="mt-2 btn btn-light">Cancel</a>
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
  <!-- plugins:js -->
  <!-- plugins:js -->
  <script src="../assets/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../assets/template/vendors/chart.js/Chart.min.js"></script>
  <script src="../assets/template/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../assets/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../assets/template/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../assets/template/js/off-canvas.js"></script>
  <script src="../assets/template/js/hoverable-collapse.js"></script>
  <script src="../assets/template/js/template.js"></script>
  <script src="../assets/template/js/settings.js"></script>
  <script src="../assets/template/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../assets/template/js/dashboard.js"></script>
  <script src="../assets/template/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
