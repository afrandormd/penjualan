<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-tag fa-fw"></i> Edit Data Mahasiswa</h4>
</div>

<form method="post" action="<?php echo base_url() ?>Master/update_mahasiswa">
  <div class="modal-body" style="max-height: calc(100vh - 210px);  overflow-y: auto;">
  <?php
    foreach($mahasiswa->result() as $r){
      $npm = $r->npm;
      $namamahasiswa = $r->namamahasiswa;
      $jurusan = $r->jurusan;
      $alamat = $r->alamat;
      $nomorhp = $r->nomorhp;
      $email = $r->email;
    }
  ?>     
      <div class="form-group">
          <label> NPM :</label>
          <input type="text" name="npm" class="form-control" placeholder="NPM" required value="<?php echo $npm ?>" readonly>
      </div> 

      <div class="form-group">
          <label> Nama Mahasiswa :</label>
          <input type="text" name="namamahasiswa" class="form-control" placeholder="Nama Mahasiswa" required autocomplete="off" value="<?php echo $namamahasiswa ?>" onkeypress="return event.charCode >= 65 && event.charCode <= 127  || event.charCode == 32">
      </div> 
	  
	  <div class="form-group">
          <label> Jurusan :</label>
          <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="<?php echo $jurusan ?>" required autocomplete="off">
      </div> 
	  
      <div class="form-group">
          <label> Alamat :</label>
          <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $alamat ?></textarea>
      </div> 

      <div class="form-group">
          <label> No. HP :</label>
          <input type="text" name="nomorhp" class="form-control" placeholder="No. HP" value="<?php echo $nomorhp ?>" required autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode<= 57">
      </div> 
	  
	  <div class="form-group">
          <label> Email :</label>
          <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>" required autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode<= 57">
      </div> 

  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
    <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fa fa-close fa-fw"></i>Close</button>
  </div>
</form>