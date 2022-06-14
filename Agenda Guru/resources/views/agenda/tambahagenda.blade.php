@extends('layout.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <form action="/storeagenda" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control" id="exampleInputName1">
                    @error('tanggal')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <select class="form-select" name="kelas_id" id="kelas">
                        @foreach ($kelas as $kelass)
                            <option value="{{ $kelass->id }}">{{ $kelass->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                    <select class="form-select" name="guru_id" id="guru">
                        @foreach ($guru as $gurus)
                            <option value="{{ $gurus->id }}">{{ $gurus->nama_guru }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="mapel" class="form-label">Mata Pelajaran</label>
                    <select class="form-select" name="mapel_id" id="mapel">
                        @foreach ($mapel as $mapels)
                            <option value="{{ $mapels->id }}">{{ $mapels->mata_pelajaran }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Materi</label>
                    <input name="materi_pelajaran" type="text" class="form-control" id="exampleInputName1">
                    @error('materi_pelajaran')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Jam</label>
                    <input name="jam_pelajaran" type="text" class="form-control" id="exampleInputName1">
                    @error('jam_pelajaran')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Jenis Pembelajaran</label>
                    <select name="jenis_pembelajaran" class="form-control" id="exampleSelectGender">
                        <option value="1">Daring</option>
                        <option value="2">Tatap Muka</option>
                    </select>
                    @error('jenis_pembelajaran')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">link</label>
                    <input name="link" type="text" class="form-control" id="exampleInputName1">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Abesen Siswa</label>
                    <textarea name="siswa_absen" class="form-control" id="exampleFormControlTextarea1"
                        rows="5"></textarea>
                    @error('absen_siswa')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Dokumentasi</label>
                    <input name="dokumentasi" id="dokumenasi" type="file" class="form-control file-upload-info">
                    @error('dokumentasi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" id="exampleInputName1">
                    @error('keterangan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" name="submit" value="save" class="btn btn-primary mr-2">Submit</button>
                <a href="/agenda" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
