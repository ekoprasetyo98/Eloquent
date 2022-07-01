<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>

        <?php $no=1?>
        @foreach($dataPegawai as $d)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$d->nama}}</td>
            <td>{{$d->alamat}}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>