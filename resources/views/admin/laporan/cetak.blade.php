<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onload="window.print()">
    <table border="1px">
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
            <th>Tanggapan</th>
            <th>Tgl Tanggapan</th>
            <th>Tgl Pengaduan</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        <?php $i = 1;?>
        @foreach($data as $data)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$data->nik}}</td>
            <td>{{$data->isi_laporan}}</td>
            <td><img src="/images/{{$data->foto}}" alt="" class="" style="width:10px;"></td>
            <td>-</td>
            <td>-</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->status}}</td>
            <td><a href="" class="btn btn-warning">Cetak</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>
