@extends('layout.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form action="/updatemapel/{{$data->id}}" method="POST" class="forms-sample">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputName1">Mata Pelajaran</label>
                      <input value="{{$data->mata_pelajaran}}" name="mata_pelajaran" type="text" class="form-control" id="exampleInputName1" placeholder="Mata Pelajaran">
                      @error('mata_pelajaran')
                        <div class="text-danger">
                            Kolom Belum Di isi
                        </div>
                       @enderror
                    </div>

                    <button type="submit" name="submit" value="save" class="btn btn-primary mr-2">Submit</button>
                    <a href="/mapel" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
@endsection