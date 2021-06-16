<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Customer</h1>
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
        @foreach($customer as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->nama}}</td>
                <td>{{$customer->alamat}}</td>
                <td>{{$customer->nomorhp}}</td>
                <td>{{$customer->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>