@extends('layout.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <form action="/updatedata/{{$data->id}}" method="POST" class="forms-sample">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input value="{{$data->email}}" name="email" type="text" class="form-control" id="exampleInputName1"
                        placeholder="Email">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input value="{{$data->password}}" name="password" type="text" class="form-control"
                        id="exampleInputPassword4" placeholder="Password">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input value="{{$data->nama_guru}}" name="nama_guru" type="text" class="form-control"
                        id="exampleInputName1" placeholder="Name">
                    @error('nama_guru')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">NIK</label>
                    <input value="{{$data->nik}}" name="nik" type="number" class="form-control" id="exampleInputName1"
                        placeholder="NIK">
                    @error('nik')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="mapel" class="form-label">Mata Pelajaran</label>
                    <select class="form-select" name="mapel_id" id="mapel">
                        @foreach ($mapel as $mapels)
                        <option value="{{ $mapels->id }}">{{ $mapels->mata_pelajaran }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" name="submit" value="save" class="btn btn-primary mr-2">Submit</button>
                <a href="/guru" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
