@extends('layouts.app')
@section('content')
        <div class="d-flex">
            <h2>Data Siswa</h2>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $s)
                <tr>
                    <td>{{$s->nis}}</td>
                    <td>{{$s->nama}}</td>
                    <td>{{$s->jns_kelamin}}</td>
                    <td>{{$s->temp_lahir}}</td>
                    <td>{{$s->tgl_lahir}}</td>
                    <td>{{$s->alamat}}</td>
                    <td>{{$s->asal_sekolah}}</td>
                    <td>{{$s->kelas}}</td>
                    <td>{{$s->jurusan}}</td>
                </tr>      
                @empty
                <tr>
                    <td colspan="9">Data Kosong</td>
                </tr>
                @endforelse
            </tbody>
          </table>

@endsection