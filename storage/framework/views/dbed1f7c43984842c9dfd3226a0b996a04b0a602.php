<div class="modal fade" id="gnj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                GNJ
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="jenis_nasi" class="col-md-4 col-form-label text-md-right">Jenis Nasi</label>
                    <div class="col-md-6">
                        <select id="jenis_nasi" name="jenis_nasi" onselect="" class="form-control">
                            <option value="Kotak">Kotak</option>
                            <option value="Bungkus">Bungkus</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tambahan_donasi_gnj" class="col-md-4 col-form-label text-md-right">Tambahan Donasi</label>
                    <div class="col-md-6">
                        <input id="tambahan_donasi_gnj" type="text" class="form-control" name="tambahan_donasi_gnj" placeholder="">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button id="save_gnj" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>

            <script>
                // $('#save_gnj').click(function (){
                //     $('#jenis_donasi_value').val($('#jenis_nasi').val());
                //     $('#jenis_donasi_value_tambahan_keterangan').val($('#tambahan_donasi_gnj').val());
                // });
            </script>
        </div>
    </div>
</div>
<?php /**PATH D:\project_website\github\backup\web_gemmi\resources\views/pages_user/donasi/gnj.blade.php ENDPATH**/ ?>