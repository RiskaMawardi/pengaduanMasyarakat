<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"  href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Petugas</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">Welcome back!</a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">nnn</span>
            </button>
            <a href="{{route('dashboard-admin')}}" class="btn btn-warning">Kembali</a>

        </div>
    </nav>
    <section class="pengaduan">
    <a href="" title="Tambah Data" style="float: right; margin-right: 10%" class="btn btn-primary mr-1 mb-4" data-bs-toggle="modal" data-bs-target="#tambahDataPetugas">Tambah Data</a>
      <div class="container mt-5">
      <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Telepon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;?>
                    @foreach($data as $data)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$data->nama_petugas}}</td>
                            <td>{{$data->username}}</td>
                            <td>{{$data->telp}}</td>
                            <td class="d-flex">
                               
                                <button type="button" class="btn btn-warning ml-2" data-bs-toggle="modal" data-idUpdate="'.$data->id.'" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Edit</button>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
      </div>
    </section>
    @include('modal.tanggapan')
    @include('modal.tambahDataPetugas')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "iDisplayLength": 25
        });
    });
</script>
  </body>
</html> 