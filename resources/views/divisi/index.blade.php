<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Data Divisi</h2>

    <table>
        <tr>
            <td>Kode</td>
            <td>Nama</td>
            <td>Aksi</td>
        </tr>
        @foreach ($divisi as $d)
            <tr>
                <td>{{$d->kode}}</td>
                <td>{{$d->nama}}</td>
                <td><a href="">edit</a> <a href="">hapus</a></td>
            </tr>
            
        @endforeach
</body>
</html>