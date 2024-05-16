<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Karyawan</title>
    <style>
        .form-controll{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Tambah Data karyawan</h1>
    <a href="/">Kembali</a>
    <form action="/update" method="post" style="margin-top:20px">
        @csrf
        <input type="hidden" name="id" value="{{ $karyawan->id }}">
        <div class="form-controll">
            <label for="nama">Nama</label>
            <br>
            <input type="text" name="nama" value="{{ $karyawan->nama }}">
        </div>
        <div class="form-controll">
            <label for="nama">Tanggal Lahir</label>
            <br>
            <input type="date" name="tanggal_lahir" value="{{ $karyawan->tanggal_lahir }}">
        </div>
        <div class="form-controll">
            <label for="nama">Gaji</label>
            <br>
            <input type="number" name="gaji" value="{{ $karyawan->gaji }}">
        </div>
        <div class="form-controll">
            <label for="status">Status</label>
            <br>
            <input type="number" name="status" value="{{ $karyawan->status }}">
        </div>
        <input type="submit" value="Proses">
    </form>
</body>
</html>