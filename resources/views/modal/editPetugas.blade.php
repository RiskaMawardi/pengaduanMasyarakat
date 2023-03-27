<div class="modal fade" id="tambahDataPetugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Petugas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nama Petugas:</label>
            <input type="text" class="form-control" id="recipient-name" name="nama_petugas" value="{{$data->nama_petugas}}">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Username:</label>
            <input type="text" class="form-control" id="recipient-name" name="username" value="{{$data->username}}">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">NO Telepon:</label>
            <input type="text" class="form-control" id="recipient-name" name="telp" value="{{$data->telp}}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>