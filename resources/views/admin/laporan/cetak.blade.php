<!DOCTYPE html>
<html lang="en">

<head>

<div class="flex item-center">

    <center>
  <h2>PENGADUAN MASYARAKAT</h2>
  </center>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onload="window.print()">
<table border="1" cellpadding="3" cellspacing="0">
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
            <td><img src="/images/{{$data->foto}}" alt="" class="" style="width:50px;"></td>
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
