<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>
    <style>
        th, tr, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Data semua karyawan</h1>
    <a href="/insert">Tambah</a>
    <table border="1px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Gaji</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1;?>
        @foreach($karyawan as $k)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $k->nama }}</td>
            <td>{{ $k->tanggal_lahir }}</td>
            <td>{{ $k->gaji }}</td>
            <td>{{ $k->status }}</td>
            <td><a href="/edit/{{ $k->id }}">Edit</a> <a href="/delete/{{ $k->id }}" onclick="return confirm('Yakin Hapus data?')">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>