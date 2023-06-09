<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Dashboard Admin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Welcome back!</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">nnn</span>
            </button>
            <a href="{{route('dataPetugas')}}" class="btn btn-warning">Data Petugas</a>
            <a href="{{route('indexLaporan')}}" class="btn btn-info">Laporan Pengaduan</a>
        </div>
    </nav>
    <section class="pengaduan">
        <!-- @auth
        <div>dapet</div>
        @else
        <div>ga dapet</div>
        @endauth -->

        <div class="container mt-4">
            <table id="myTable" class="display">
                <thead>
                    <tr>

                        <th>No</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Action</th>

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
                        <td class="d-flex">
                            <?php if($data->status == 0 ){ ?>
                            <form method="POST" action="{{route
                                ('approveLaporan')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <input type="submit" value="Validasi Laporan" class="btn btn-primary mr-1">
                            </form>
                            <?php }elseif($data->status == "proses"){?>
                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tanggapi</button> -->
                            <a href="{{route('formTanggapan',$data->id)}}" class="btn btn-primary">Tanggappi</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                            <?php }else{ ?>
                            -
                            <?php } ?>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                "iDisplayLength": 25
            });
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#data-document').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });

    </script>
</body>

</html>
