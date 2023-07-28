<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <h2>Tambah Data Pegawai</h2>
        @if (count($errors) > 0)
        <div class="alert alert-danger col-sm-8">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
        @endif
        <div class="my-4">
          <form action="{{ route('store.pegawai') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Pegawai</label>
          <div class="col-sm-6">
            <input type="name" name="nama" class="form-control" value="{{ old('nama') }}" id="inputPassword">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">NIP</label>
          <div class="col-sm-6">
            <input type="name" name="nip" class="form-control" value="{{ old('nip') }}" id="inputPassword">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-6">
            <select class="form-select" name="status"  aria-label="Default select example">
              <option>Silahkan Memilih</option>
              <option value="PNS" @if(old('status') === 'PNS') selected @endif >PNS</option>
              <option value="Honorer" @if(old('status') === 'Honorer') selected @endif>Honorer</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Jabatan</label>
          <div class="col-sm-6">
            <input type="name" name="jabatan" value="{{ old('jabatan') }}" class="form-control" id="inputPassword">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
          <div class="col-sm-6">
            <input type="file" name="foto" value="{{ old('foto') }}" class="form-control" id="inputPassword">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>