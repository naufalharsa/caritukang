<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mitra</h1>
    <table border="1" cellspacing="0" cellpadding="3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Nomor Hp</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mitra as $mitra)
            <tr>
                <td>{{$mitra->id}}</td>
                <td>{{$mitra->nama}}</td>
                <td>{{$mitra->alamat}}</td>
                <td>{{$mitra->nomorhp}}</td>
                <td>{{$mitra->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>