<div class="modal fade" id="buku" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Buku
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="jenis_buku" class="col-md-4 col-form-label text-md-right">Jenis Buku</label>
                    <div class="col-md-6">
                        <select id="jenis_buku" name="jenis_buku" onselect="" class="form-control">
                            <option value="Cerita anak">Cerita anak</option>
                            <option value="Komik">Komik</option>
                            <option value="Dongeng">Dongeng</option>
                            <option value="Ensiklopedia anak">Ensiklopedia anak</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-md-4 col-form-label text-md-right">Keterangan</label>
                    <div class="col-md-6">
                        <input id="keterangan" type="text" class="form-control" name="keterangan" placeholder="">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\project_website\github\backup\web_gemmi\resources\views/pages_user/donasi/buku.blade.php ENDPATH**/ ?>