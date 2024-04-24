<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cloud-upload fa-fw"></i> Import Data Mahasiswa</h4>
</div>

<form method="post" action="<?php echo base_url() ?>Master/import_data_mahasiswa" enctype="multipart/form-data">
  <div class="modal-body" style="max-height: calc(100vh - 210px);  overflow-y: auto;">
    <div class="form-group">
        <label> Browse File <i>(File type *.xls)</i> :</label>
        <input type="file" name="file_upload" class="form-control" required>
    </div> 
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-cloud-upload fa-fw"></i> Simpan</button>
    <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fa fa-close fa-fw"></i>Close</button>
  </div>
</form>
</form>