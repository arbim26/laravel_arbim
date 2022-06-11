@extends('layout.master')

@section('content')
    <div class=" grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">Data Kelas</h3>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                        Tambah
                    </button>

                  <div class="table-responsive mt-3">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Mata Pelajaran</kbd></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nama_kelas}}</td>
                            <td>
                              <div class="d-grid gap-4 d-flex justify-content-center">
                                <a href="/editkelas/{{$row->id}}" class="btn btn-warning" type="button">Edit</a>
                                  <form action="/deletekelas/{{$row->id}}" method="POST" style="margin-left:5px">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="hapus">
                                  </form>
                              </div>
                            </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tabah Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                            <div class="card-body">
                            <form class="forms-sample" action="/storekelas" method="POST">
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Nama Kelas</label>
                                    <input name="nama_kelas" type="text" class="form-control" id="exampleInputName1" placeholder="Nama Kelas">
                                    @error('nama_kelas')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" value="save" class="btn btn-primary mr-2">Submit</button>
                                </div>
                            </form>
                        </div>
            </div>

@endsection