<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Level Penggunaan</title>
</head>
<body>
    <h1>Data Level Penggunaan</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>Level ID</th>
            <th>Level Kode</th>
            <th>Level Nama</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->level_id }}</td>
                <td>{{ $d->level_kode }}</td>
                <td>{{ $d->level_nama }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>