<form action="<?php echo site_url('/kurs/') ?>" method="POST">
	<div class="modal-body">
		<input type="text" name="id_kurs" value="<?php echo $data[0]->id_kurs;?>">
		<div class="row">
      <div class="col-sm-12">
        <div class="form-group form-floating-label">
          <select name="uang" class="form-control input-solid" id="selectFloatingLabel2" required>
            <?php 
              $query = $this->db->get('mata_uang');
              foreach ($query->result() as $row)
              {
            ?>
              <option value="<?php echo $row->id_mata_uang;?>" <?php if($data[0]->id_mata_uang == $row->id_mata_uang){ echo 'selected';} ?>><?php echo $row->desk;?></option>
            <?php	} ?>
          </select>
          <label for="selectFloatingLabel2" class="placeholder">Mata Uang</label>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group form-floating-label">
          <input name="nilai" value="<?php echo $data[0]->nilai;?>" autocomplete="off" id="inputFloatingLabel2" type="number" class="form-control input-solid" size="20" required>
          <label for="inputFloatingLabel2" class="placeholder">Nilai</label>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group form-floating-label">
          <select name="payment" class="form-control input-solid" id="selectFloatingLabel2" required>
            <?php 
              $query = $this->db->get('payment');
              foreach ($query->result() as $row)
              {
            ?>
              <option value="<?php echo $row->id_payment;?>" <?php if($data[0]->id_payment == $row->id_payment){ echo 'selected';} ?>><?php echo $row->merchant.' - '.$row->norek.' - '.$row->nama;?></option>
            <?php	} ?>
          </select>
          <label for="selectFloatingLabel2" class="placeholder">Payment</label>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group form-floating-label">
          <input name="tanggal" value="<?php echo $data[0]->tanggal;?>" autocomplete="off" id="inputFloatingLabel2" type="date" class="form-control input-solid" size="20" onkeyup="this.value = this.value.toUpperCase()" required>
          <label for="inputFloatingLabel2" class="placeholder" style="position:absolut; font-size: 85%!important;transform: translate3d(0,-10px,0);top: 0;opacity: 1;padding: .375rem 0 .75rem;font-weight: 600;">Tanggal</label>
        </div>
    </div>
		</div>
	</div>
	<div class="modal-footer no-bd">
		<button type="submit" name="submit" value="edit" class="btn btn-primary">Simpan</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>
</form>