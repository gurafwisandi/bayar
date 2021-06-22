<form action="<?php echo site_url('/produk/') ?>" method="POST">
	<div class="modal-body">
		<input type="text" name="id_produk" value="<?php echo $data[0]->id_produk;?>">
		<div class="row">
			<div class="col-sm-12">
					<div class="form-group form-floating-label">
						<input name="jenis_jasa" value="<?php echo $data[0]->jenis_jasa;?>" autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" size="20" onkeyup="this.value = this.value.toUpperCase()" required>
						<label for="inputFloatingLabel2" class="placeholder">Jenis Jasa</label>
					</div>
			</div>
			<div class="col-sm-12">
					<div class="form-group form-floating-label">
						<input name="fee" value="<?php echo $data[0]->fee;?>" autocomplete="off" id="inputFloatingLabel2" type="number" class="form-control input-solid" required>
						<label for="inputFloatingLabel2" class="placeholder">Fee</label>
					</div>
			</div>
		</div>
	</div>
	<div class="modal-footer no-bd">
		<button type="submit" name="submit" value="edit" class="btn btn-primary">Simpan</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>
</form>