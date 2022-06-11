@extends('layout.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form action="/updatekelas/{{$data->id}}" method="POST" class="forms-sample">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      <input value="{{$data->nama_kelas}}" name="nama_kelas" type="text" class="form-control" id="exampleInputName1" placeholder="Username">
                      @error('nama_kelas')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                       @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input value="{{$data->walas}}" name="walas" type="text" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      @error('walas')
                        <div class="text-danger ">
                            Kolom Belum Di isi
                        </div>
                      @enderror
                    </div>

                    <button type="submit" name="submit" value="save" class="btn btn-primary mr-2">Submit</button>
                    <a href="/kelas" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
@endsection