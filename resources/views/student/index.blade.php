@extends('layouts.app')
@section('content')
    <div class="container mt-2">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <span>{{ session('success' )}}</span>
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
        @endif
        <div class="d-flex justify-content-between mt-2 mb-2">
            <div>
                <h2 class="text-xl font-semibold">Data Siswa</h2>
            </div>
            <div class="d-flex">
                <div class=" mr-2">
                    <form action="{{ route('student.print') }}" method="POST" target="_blank">
                        @csrf
                        <button type="submit" class="btn btn-primary" href="{{ route('student.print') }}">Print</button>
                    </form>
                </div>
                <div>
                    <a class="btn btn-success" href="{{ route('student.create') }}">Tambah</a>
                </div>
            </div>
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
                    <th scope="col">Aksi</th>
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
                    <td>
                        <a href="{{route('student.edit', $s->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{route('student.destroy', $s->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>      
                @empty
                <tr>
                    <td colspan="10">Data Kosong</td>
                </tr>
                @endforelse
            </tbody>
          </table>
    </div>

@endsection