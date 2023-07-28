<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

      <div class="container my-5">
        <h2>Data Pegawai</h2>
        <a href="{{ route('tambah.pegawai') }}"><button type="button" class="btn btn-primary">Tambah</button></a>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">NIP</th>
                <th scope="col">Status</th>
                <th scope="col">Jabatan</th>
                <th scope="col">foto</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pegawais as $pegawai)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $pegawai->nama }}</td>
                <td>{{ $pegawai->nip }}</td>
                <td>{{ $pegawai->status }}</td>
                <td>{{ $pegawai->jabatan }}</td>
                <td>
                  <img src="{{ asset('images/' . $pegawai->foto) }}" width="50" alt="">
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>