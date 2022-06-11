
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

<h1 class="text-center">Agenda Guru</h1>



<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <a href="/logout" class="btn btn-primary">Log Out</a>

                  <form action="/storeagendaguru" method="POST" class="mt-5 forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Tanggal</label>
                      <input name="tanggal" type="date" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Kelas</label>
                      <input name="kelas" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Guru</label>
                      <input name="nama_guru" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                      <div class="text-danger">
                        Kolom Belum Di isi
                      </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Mata Pelajaran</label>
                        <select name="mata_pelajaran" class="form-control" id="exampleSelectGender">
                          <option value="1">IPA</option>
                          <option value="2">IPS</option>
                          <option value="3">B Indonesia</option>
                          <option value="4">PAI</option>
                          <option value="5">B Inggris</option>
                          <option value="6">Matematika</option>
                        </select>
                      <!-- @error('mata_pelajaran')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Materi</label>
                      <input name="materi_pelajaran" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jam</label>
                      <input name="jam_pelajaran" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Jenis Pembelajaran</label>
                        <select name="jenis_pembelajaran" class="form-control" id="exampleSelectGender">
                          <option value="1">Daring</option>
                          <option value="2">Tatap Muka</option>
                        </select>
                      <!-- @error('mata_pelajaran')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Abesen Siswa</label>
                      <textarea name="siswa_absen" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>

                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">link</label>
                      <input name="link" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Dokumentasi</label>
                        <input name="dokumentasi" id="dokumenasi" type="file" class="form-control file-upload-info" >
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Keterangan</label>
                      <input name="keterangan" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>


                    <button type="submit" name="submit" value="save" class="btn btn-primary mr-2">Submit</button>
                    <a href="/guru" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>

            <div class=" grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">Data Guru</h3>

                <!-- Button trigger modal -->
                  <div class="table-responsive mt-3">
                    <table class="table">
                      <thead>
                        <tr>
                          <!-- <th>ID</th> -->
                          <th>Tanggal</th>
                          <th>Guru</th>
                          <th>Mapel</th>
                          <th>Jam</th>
                          <th>Kelas</th>
                          <th>Absen</th>
                          <th>Jenis</th>
                          <th>Dokumentasi</th>
                          <th>Keterangan</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                          <!-- <td>{{$row->id}}</td> -->
                          <td>{{$row->tanggal}}</td>
                          <td>{{$row->nama_guru}}</td>
                          <td>{{$row->mata_pelajaran}}</td>
                          <td>{{$row->jam_pelajaran}}</td>
                          <td>{{$row->kelas}}</td>
                          <td>{{$row->siswa_absen}}</td>
                          <td>{{$row->jenis_pembelajaran}}</td>
                          <td>
                            <img style="border-radius: 1px;" src="{{asset('dokumentasi/'.$row->dokumentasi)}}" alt="">
                          </td>
                          <td>{{$row->keterangan}}</td>
                        </tr>

                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>


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


