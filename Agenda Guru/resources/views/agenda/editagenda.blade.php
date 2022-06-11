@extends('layout.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form action="/updateagenda/{{$agenda->id}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputName1">Tanggal</label>
                      <input value="{{$agenda->tanggal}}"  name="tanggal" type="date" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Kelas</label>
                      <input value="{{$agenda->kelas}}" name="kelas" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Guru</label>
                      <input value="{{$agenda->nama_guru}}" name="nama_guru" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                      <div class="text-danger">
                        Kolom Belum Di isi
                      </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Mata Pelajaran</label>
                        <select name="mata_pelajaran" class="form-control" id="exampleSelectGender">
                          <option selected >{{$agenda->mata_pelajaran}}</option>
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
                      <input value="{{$agenda->materi_pelajaran}}" name="materi_pelajaran" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jam</label>
                      <input value="{{$agenda->jam_pelajaran}}" name="jam_pelajaran" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Jenis Pembelajaran</label>
                        <select name="jenis_pembelajaran" class="form-control" id="exampleSelectGender">
                          <option selected>{{$agenda->jenis_pembelajaran}}</option>
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
                      <textarea value="" name="siswa_absen" class="form-control" id="exampleFormControlTextarea1" rows="5">{{$agenda->siswa_absen}}</textarea>

                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">link</label>
                      <input value="{{$agenda->link}}" name="link" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Dokumentasi</label>
                        <input value="{{$agenda->dokumentasi}}" name="dokumentasi" id="dokumenasi" type="file" class="form-control file-upload-info" >
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Keterangan</label>
                      <input value="{{$agenda->keterangan}}" name="keterangan" type="text" class="form-control" id="exampleInputName1">
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
@endsection