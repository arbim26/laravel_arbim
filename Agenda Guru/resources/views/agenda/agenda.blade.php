@extends('layout.master')

@section('content')
    <div class=" grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">Agenda</h3>
                    <a href="/tambahagenda" type="button" class="btn btn-primary btn-md mt-3" >
                        Tambah
                    </a>

                <!-- Button trigger modal -->
                  <div class="table-responsive mt-3">
                    <table class="table">
                      <thead>
                        <tr>
                          <!-- <th>ID</th> -->
                          <th>Tanggal</th>
                          <th>Guru</th>
                          <th>Kelas</th>  
                          <th>Mapel</th>
                          <th>Jam</th>
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
                          <td>{{$row->guru->nama_guru}}</td>
                          <td>{{$row->kelas->nama_kelas}}</td>
                          <td>{{$row->mapel->mata_pelajaran}}</td>
                          <td>{{$row->jam_pelajaran}}</td>
                          <td>{{$row->siswa_absen}}</td>
                          <td>{{$row->jenis_pembelajaran}}</td>
                          <td>
                            <img style="border-radius: 0px;" src="{{asset('fotobukti/'.$row->dokumentasi)}}" alt="">
                          </td>
                          <td>{{$row->keterangan}}</td>
                          <td>
                            <div class="d-flex justify-content-center flex-column">
                              <a style="margin-bottom:5px" href="/editagenda/{{$row->id}}" class="btn btn-warning" type="button">Edit</a>
                              <form action="/deleteagenda/{{$row->id}}" method="POST" style="margin-left:5px">
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