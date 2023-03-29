<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Masyarakat</title>
    <link rel="stylesheet"  href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section class="navbar">
        <div class="container">
            <h1>halooo !</h1>
            @auth
        <div>dapet</div>
        @else
        <div>ga dapet</div>
        @endauth
        </div>
    </section>
    <section class="form-pengaduan">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session ('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2>Form Pengaduan</h2>
                        </div>
                        <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <input type="hidden" value="{{$id}}" name="nik">
                                <label for="">Isi Laporan</label>
                                <textarea type="text" name="isi_laporan" class="form-control"></textarea>
                                <label for="">Foto</label>
                                <input type="file" name="foto" class="form-control">
                                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="table">
        <div class="container mt-5">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Isi Laporan</th>
                            <th>Foto</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;?>
                    @foreach($data as $data)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$data->isi_laporan}}</td>
                            <td><img src="/images/{{$data->foto}}" alt="" class="w-50"></td>
                            @if($data->status == 0)
                            <td>Laporan Pending</td>
                            @else
                            <td>{{$data->status}}</td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </section>
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
