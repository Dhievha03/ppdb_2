@extends('layouts.app')
@section('content')
    <div class="container mt-2">
      <div class="card">
        <div class="card-header">
          <h2 class="font-semibold">Form PPDB</h2>
        </div>
        <div class="card-body">
          <form action="{{ route('student.store') }}" method="POST">
            @csrf
            <div class="form-row">
              <div class="col-md-6 mb-4">
                <label for="">NIS</label>
                <input type="text" name="nis" class="form-control @error('nis') is-invalid @enderror" placeholder="Masukan NIS">
                @error('nis')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama">
                @error('nama')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Jenis Kelamin</label>
                <select name="jns_kelamin" id="" class="form-control @error('jns_kelamin') is-invalid @enderror">
                    <option value="" selected disabled>-- Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('jns_kelamin')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Tempat Lahir</label>
                <input type="text" name="temp_lahir" class="form-control @error('temp_lahir') is-invalid @enderror" placeholder="Tempat Lahir">
                @error('temp_lahir')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                @error('tgl_lahir')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" placeholder="Asal Sekolah">
                @error('asal_sekolah')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Kelas</label>
                <select name="kelas" id="" class="form-control @error('kelas') is-invalid @enderror">
                    <option value="" selected disabled>-- Kelas --</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
                @error('kelas')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Jurusan</label>
                <select name="jurusan" id="" class="form-control @error('jurusan') is-invalid @enderror">
                    <option value="" selected disabled>-- Jurusan --</option>
                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                    <option value="TKJ">Teknik Komputer Jaringan</option>
                    <option value="MMD">Multimedia</option>
                    <option value="OTKP">Otomatisasi Tata Kelola Perkantoran</option>
                    <option value="BDP">Bisnis Daring Pemasaran</option>
                    <option value="TBG">Tata Boga</option>
                    <option value="HTL">Perhotelan</option>
                </select>
                @error('jurusan')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Alamat</label>
                <textarea name="alamat" id="" cols="30" rows="3" placeholder="Alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                @error('alamat')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-warning mr-2">Clear</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection