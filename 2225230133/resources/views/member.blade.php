@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="css/style.css">

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HIMATIKA | Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">DATA ANGGOTA HIMATIKA</h1>

    <div class="container">
        <a href="/tambah" type="button" class="btn btn-success">Tambah +</a>
        <div class="row">
            @if($massage = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $massage }}
              </div>
            @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->Nama }}</td>
                        <td>{{ $row->NIM }}</td>
                        <td>{{ $row->Email }}</td>
                        <td>{{ $row->Jabatan }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                            <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

@endsection
