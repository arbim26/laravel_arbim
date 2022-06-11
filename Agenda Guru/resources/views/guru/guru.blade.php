@extends('layout.master')

@section('content')
    <div class=" grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">Data Guru</h3>
                    <a href="/tambahguru" type="button" class="btn btn-primary btn-md mt-3" >
                        Tambah
                    </a>

                  <div class="table-responsive mt-3">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Email</th>
                          <th>Nama</th>
                          <th>NIK</th>
                          <th>Mata Pelajaran</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->nama_guru}}</td>
                            <td>{{$row->nik}}</td>
                            <td>{{$row->mata_pelajaran}}</td>
                            <td>
                              <div class="d-grid gap-4 d-flex justify-content-center">
                                <a href="/editguru/{{$row->id}}" class="btn btn-warning" type="button">Edit</a>
                                <form action="/delete/{{$row->id}}" method="POST" style="margin-left:5px">
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
@endsection