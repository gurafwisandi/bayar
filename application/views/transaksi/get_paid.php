<?php echo form_open_multipart('transaksi');?>
	<div class="modal-body">
		<input type="text" name="id_transaksi" value="<?php echo $data[0]->id_transaksi;?>">
		<div class="row">
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <label for="inputFloatingLabel2" class="">Pajak</label>
            <input name="file" min="0" id="file" autocomplete="off" type="file" class="form-control input-solid" size="20" required>
          </div>
      </div>
		</div>
	</div>
	<div class="modal-footer no-bd">
		<button type="submit" name="submit" value="paid" class="btn btn-primary">Simpan</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>
</form>