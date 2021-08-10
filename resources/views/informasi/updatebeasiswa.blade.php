<form action="{{route('proseseditbeasiswa',['id'=>$data_beasiswa->id])}}" method="GET">
    {{csrf_field()}}
    <div class="form-group">
    <div class="form-group">
                                <label for="nama">Nama Beasiswa</label>
                                <input class="form-control" type="text" name="nama_beasiswa">
                        </div>
                        <div class="form-group">
                                <label for="harga">Kategori Beasiswa</label>
                                <input class="form-control" type="text" name="kategori">
                        </div>
                        <div class="form-group">
                                <label for="harga">Keterangan</label>
                                <input class="form-control" type="text" name="keterangan">
                        </div>
                        <div class="form-group">
                                <label for="harga">Tanggal Upload</label>
                                <input class="form-control" type="date" name="tgl_upload">
                        </div>
                        <div class="form-group">
                                <label for="gambar">Upload File</label>
                                <input class="form-control" type="file" name="gambar">
                        </div>
                        <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Simpan">
                        </div>                    

<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>
