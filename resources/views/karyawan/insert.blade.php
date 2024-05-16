<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Karyawan</title>
    <style>
        .form-controll{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Tambah Data karyawan</h1>
    <a href="/">Kembali</a>
    <form action="/create" method="post" style="margin-top:20px">
        @csrf
        <div class="form-controll">
            <label for="nama">Nama</label>
            <br>
            <input type="text" name="nama">
            @error('nama')
            <br>
            {{ $message }}
            @enderror
        </div>
        <div class="form-controll">
            <label for="nama">Tanggal Lahir</label>
            <br>
            <input type="date" name="tanggal_lahir">
            @error('tanggal_lahir')
            <br>
            {{ $message }}
            @enderror
        </div>
        <div class="form-controll">
            <label for="nama">Gaji</label>
            <br>
            <input type="number" name="gaji">
            @error('gaji')
            <br>
            {{ $message }}
            @enderror
        </div>
        <div class="form-controll">
            <label for="status">Status</label>
            <br>
            <input type="number" name="status">
            @error('status')
            <br>
            {{ $message }}
            @enderror
        </div>
        <input type="submit" value="Proses">
    </form>
</body>
</html>