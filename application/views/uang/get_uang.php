<form action="<?php echo site_url('/uang/') ?>" method="POST">
	<div class="modal-body">
		<input type="text" name="id_mata_uang" value="<?php echo $data[0]->id_mata_uang;?>">
		<div class="row">
			<div class="col-sm-12">
        <div class="form-group form-floating-label">
          <input name="desk" value="<?php echo $data[0]->desk;?>" autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" required>
          <label for="inputFloatingLabel2" class="placeholder">Deskripsi</label>
        </div>
			</div>
		</div>
	</div>
	<div class="modal-footer no-bd">
		<button type="submit" name="submit" value="edit" class="btn btn-primary">Simpan</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>
</form>