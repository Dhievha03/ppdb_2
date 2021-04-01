@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h2>Edit Siswa</h2>
        <form action="{{ route('student.update', $student->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-row">
              <div class="col-md-6 mb-4">
                <label for="">NIS</label>
                <input type="text" name="nis" class="form-control @error('nis') is-invalid @enderror" placeholder="Masukan NIS" value="{{$student->nis}}">
                @error('nis')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama" value="{{$student->nama}}">
                @error('nama')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Jenis Kelamin</label>
                <select name="jns_kelamin" id="" class="form-control @error('jns_kelamin') is-invalid @enderror">
                    <option value="Laki-laki" {{$student->jns_kelamin === 'Laki-laki' ? 'selected' : ''}}>Laki - laki</option>
                    <option value="Perempuan" {{$student->jns_kelamin === 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                </select>
                @error('jns_kelamin')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Tempat Lahir</label>
                <input type="text" name="temp_lahir" class="form-control @error('temp_lahir') is-invalid @enderror" placeholder="Tempat Lahir" value="{{$student->temp_lahir}}">
                @error('temp_lahir')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{$student->tgl_lahir}}">
                @error('tgl_lahir')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" placeholder="Asal Sekolah" value="{{$student->asal_sekolah}}">
                @error('asal_sekolah')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Kelas</label>
                <select name="kelas" id="" class="form-control @error('kelas') is-invalid @enderror">
                    <option value="X" {{$student->kelas === 'X' ? 'selected' : ''}}>X</option>
                    <option value="XI" {{$student->kelas === 'XI' ? 'selected' : ''}}>XI</option>
                    <option value="XII" {{$student->kelas === 'XII' ? 'selected' : ''}}>XII</option>
                </select>
                @error('kelas')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Jurusan</label>
                <select name="jurusan" id="" class="form-control @error('jurusan') is-invalid @enderror">
                    <option value="RPL" {{$student->jurusan === 'RPL' ? 'selected' : ''}}>Rekayasa Perangkat Lunak</option>
                    <option value="TKJ" {{$student->jurusan === 'TKJ' ? 'selected' : ''}}>Teknik Komputer Jaringan</option>
                    <option value="MMD" {{$student->jurusan === 'MMD' ? 'selected' : ''}}>Multimedia</option>
                    <option value="OTKP" {{$student->jurusan === 'OTKP' ? 'selected' : ''}}>Otomatisasi Tata Kelola Perkantoran</option>
                    <option value="BDP" {{$student->jurusan === 'BDP' ? 'selected' : ''}}>Bisnis Daring Pemasaran</option>
                    <option value="TBG" {{$student->jurusan === 'TBG' ? 'selected' : ''}}>Tata Boga</option>
                    <option value="HTL" {{$student->jurusan === 'HTL' ? 'selected' : ''}}>Perhotelan</option>
                </select>
                @error('jurusan')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6 mb-4">
                <label for="">Alamat</label>
                <textarea name="alamat" id="" cols="30" rows="3" placeholder="Alamat" class="form-control @error('alamat') is-invalid @enderror">{{$student->alamat}}</textarea>
                @error('alamat')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
    </div>
@endsection