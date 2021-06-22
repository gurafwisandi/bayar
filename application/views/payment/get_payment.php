<form action="<?php echo site_url('/payment/') ?>" method="POST">
	<div class="modal-body">
		<input type="text" name="id_payment" value="<?php echo $data[0]->id_payment;?>">
		<div class="row">
			<div class="col-sm-12">
					<div class="form-group form-floating-label">
						<input name="merchant" value="<?php echo $data[0]->merchant;?>" autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" size="20" onkeyup="this.value = this.value.toUpperCase()" required>
						<label for="inputFloatingLabel2" class="placeholder">Merchant</label>
					</div>
			</div>
			<div class="col-sm-12">
					<div class="form-group form-floating-label">
						<input name="norek" value="<?php echo $data[0]->norek;?>" autocomplete="off" id="inputFloatingLabel2" type="number" class="form-control input-solid" required>
						<label for="inputFloatingLabel2" class="placeholder">Nomor Rekening</label>
					</div>
			</div>
			<div class="col-sm-12">
					<div class="form-group form-floating-label">
						<input name="nama" value="<?php echo $data[0]->nama;?>" autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" required>
						<label for="inputFloatingLabel2" class="placeholder">Nama Rekening</label>
					</div>
			</div>
		</div>
	</div>
	<div class="modal-footer no-bd">
		<button type="submit" name="submit" value="edit" class="btn btn-primary">Simpan</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>
</form>