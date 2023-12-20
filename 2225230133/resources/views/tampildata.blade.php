<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <link rel="stylesheet" href="css/style.css">
    <h1 class="text-center mb-5 ">EDIT ANGGOTA HIMATIKA</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card-body">
                    <form action="/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                          <input type="text" name="Nama" class="form-control @error('Nama') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('Nama', $data->Nama) }}">
                          @error('Nama')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIM</label>
                            <input type="number" name="NIM" class="form-control @error('NIM') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('NIM', $data->NIM) }}">
                            @error('NIM')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="Email" class="form-control @error('Email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('Email', $data->Email) }}">
                            @error('Email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                            <input type="text" name="Jabatan" class="form-control @error('Jabatan') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('Jabatan', $data->Jabatan) }}">
                            @error('Jabatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
