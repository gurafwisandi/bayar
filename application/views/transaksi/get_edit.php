<form action="<?php echo site_url('/transaksi/') ?>" method="POST">
	<div class="modal-body">
		<input type="text" name="id_transaksi" value="<?php echo $data[0]->id_transaksi;?>">
		<div class="row">
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <input name="website" value="<?php echo $data[0]->website;?>" autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" size="20" required>
            <label for="inputFloatingLabel2" class="placeholder">Website</label>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <input name="item" value="<?php echo $data[0]->item;?>" autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" size="20" required>
            <label for="inputFloatingLabel2" class="placeholder">Item/Services</label>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <select name="id_kurs" class="form-control input-solid" id="selectFloatingLabel2" required>
              <option value="">&nbsp;</option>
              <?php 
                $this->db->select('kurs.id_kurs, desk')
                        ->from('kurs')
                        ->join('mata_uang', 'mata_uang.id_mata_uang=kurs.id_mata_uang')
                        ->join('payment', 'payment.id_payment=kurs.id_payment');
                $query = $this->db->get();
                foreach ($query->result() as $row)
                {
              ?>
                <option value="<?php echo $row->id_kurs;?>" <?php if($data[0]->id_kurs == $row->id_kurs){ echo 'selected';} ?>><?php echo $row->desk;?></option>
              <?php	} ?>
            </select>
            <label for="selectFloatingLabel2" class="placeholder">Kurs</label>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <input name="harga" min="0" value="<?php echo $data[0]->harga;?>" autocomplete="off" id="inputFloatingLabel2" type="number" class="form-control input-solid" size="20" required>
            <label for="inputFloatingLabel2" class="placeholder">Harga</label>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <input name="shipping" min="0" value="<?php echo $data[0]->shipping;?>" autocomplete="off" id="inputFloatingLabel2" type="number" class="form-control input-solid" size="20" required>
            <label for="inputFloatingLabel2" class="placeholder">Shipping</label>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <input name="tax" min="0" value="<?php echo $data[0]->tax;?>" autocomplete="off" id="inputFloatingLabel2" type="number" class="form-control input-solid" size="20" required>
            <label for="inputFloatingLabel2" class="placeholder">Tax</label>
          </div>
      </div>
    
		</div>
	</div>
	<div class="modal-footer no-bd">
		<button type="submit" name="submit" value="edit" class="btn btn-primary">Simpan</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>
</form>