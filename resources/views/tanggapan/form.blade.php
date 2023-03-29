<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tanggapan</title>
</head>

<body>
    <form action="{{route('storeTanggapan',$data->id)}}" method="post">
        @csrf
    <div class="row col-md-6">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <input type="hidden" value="{{$data->id}}" name="id_pengaduan">
            <div class="form-group">
                <strong>Tanggal :</strong>
                <input type="date" name="tgl_tanggapan" value="" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggapan :</strong>
                <textarea name="tanggapan" class="form-control" cols="30" rows="4"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        </div>
    </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </div>
    </form>
</body>

</html>
