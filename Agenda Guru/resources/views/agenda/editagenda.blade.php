@extends('layout.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form action="/updateagenda/{{$data->id}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputName1">Tanggal</label>
                      <input value="{{$data->tanggal}}"  name="tanggal" type="date" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Kelas</label>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kelas</label>
                          <select class="form-select" name="mapel_id" id="mapel_id">
                              @foreach ($mapel as $mapels)
                              @if (old('mapel_id', $data->mapel_id ) == $mapels->id)
                              <option value="{{ $mapels->id }}" selected>{{ $mapels->mata_pelajaran }}</option>
                              @else
                              <option value="{{ $mapels->id }}">{{ $mapels->mata_pelajaran }}</option>
                              @endif
                              @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Nama Guru</label>
                      <select class="form-select" name="guru_id" id="guru_id">
                              @foreach ($guru as $gurus)
                              @if (old('guru_id', $data->guru_id ) == $gurus->id)
                              <option value="{{ $gurus->id }}" selected>{{ $gurus->nama_guru }}</option>
                              @else
                              <option value="{{ $gurus->id }}">{{ $gurus->nama_guru }}</option>
                              @endif
                              @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleSelectGender">Mata Pelajaran</label>
                      <select class="form-select" name="kelas_id" id="kelas_id">
                              @foreach ($kelas as $kelass)
                              @if (old('kelas_id', $data->kelas_id ) == $kelass->id)
                              <option value="{{ $kelass->id }}" selected>{{ $kelass->nama_kelas }}</option>
                              @else
                              <option value="{{ $kelass->id }}">{{ $kelass->nama_kelas }}</option>
                              @endif
                              @endforeach
                      </select>
                      <!-- @error('mata_pelajaran')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Materi</label>
                      <input value="{{$data->materi_pelajaran}}" name="materi_pelajaran" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jam</label>
                      <input value="{{$data->jam_pelajaran}}" name="jam_pelajaran" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Jenis Pembelajaran</label>
                        <select name="jenis_pembelajaran" class="form-control" id="exampleSelectGender">
                          <option selected>{{$data->jenis_pembelajaran}}</option>
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
                      <textarea value="" name="siswa_absen" class="form-control" id="exampleFormControlTextarea1" rows="5">{{$data->siswa_absen}}</textarea>

                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">link</label>
                      <input value="{{$data->link}}" name="link" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Dokumentasi</label>
                        <input value="{{$data->dokumentasi}}" name="dokumentasi" id="dokumenasi" type="file" class="form-control file-upload-info" >
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Keterangan</label>
                      <input value="{{$data->keterangan}}" name="keterangan" type="text" class="form-control" id="exampleInputName1">
                      <!-- @error('nama_guru')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                      @enderror -->
                    </div>


                    <button type="submit" name="submit" value="save" class="btn btn-primary mr-2">Submit</button>
                    <a href="/agenda" class="btn btn-light">Cancel</a>
                  </form>

                  
                </div>
              </div>
          </div>
@endsection