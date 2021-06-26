<form action="<?php echo site_url('/transaksi/') ?>" method="POST">
	<div class="modal-body">
		<input type="text" name="id_transaksi" value="<?php echo $data[0]->id_transaksi;?>">
		<div class="row">
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
        <table>
          <tr>
            <td>Transaksi</td>
            <td>:</td>
            <td><?php echo $data[0]->id_transaksi;?></td>
          </tr>
          <tr>
            <td>Tanggal Transaksi</td>
            <td>:</td>
            <td><?php echo $data[0]->tanggal_transaksi;?></td>
          </tr>
          <tr>
            <td>Website</td>
            <td>:</td>
            <td><?php echo $data[0]->website;?></td>
          </tr>
          <tr>
            <td>Item/Services</td>
            <td>:</td>
            <td><?php echo $data[0]->item;?></td>
          </tr>
          <tr>
            <td>Kurs</td>
            <td>:</td>
            <td>
              <?php 
                $this->db->select('kurs.id_kurs, desk')
                        ->from('kurs')
                        ->join('mata_uang', 'mata_uang.id_mata_uang=kurs.id_mata_uang')
                        ->join('payment', 'payment.id_payment=kurs.id_payment')
                        ->where('kurs.id_kurs',$data[0]->id_kurs);
                $query = $this->db->get();
                foreach ($query->result() as $row)
                {
                  echo $row->desk;
                }
              ?></td>
          </tr>
          <tr>
            <td>Harga</td>
            <td>:</td>
            <td><?php echo  number_format($data[0]->harga);?></td>
          </tr>
          <tr>
            <td>Shipping</td>
            <td>:</td>
            <td><?php echo  number_format($data[0]->shipping);?></td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>:</td>
            <td><?php echo  number_format($data[0]->tax);?></td>
          </tr>
          <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo  number_format($data[0]->total);?></td>
          </tr>
          <tr>
            <td>Kurs Modal</td>
            <td>:</td>
            <td><?php echo number_format($data[0]->kurs_modal);?></td>
          </tr>
        </table>
        </div>
      </div>
      <input type="text" name="harga" id="harga" value="<?php echo $data[0]->harga;?>">
      <input type="text" name="shipping" id="shipping" value="<?php echo $data[0]->shipping;?>">
      <input type="text" name="kurs_modal" id="kurs_modal" value="<?php echo $data[0]->kurs_modal;?>">
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <label for="inputFloatingLabel2" class="">Kurs Transaksi</label>
            <input name="kurs_transaksi" id="kurs_transaksi" onkeyup="myFunctionTotal()" min="0" value="<?php echo $data[0]->kurs_transaksi;?>" autocomplete="off" id="inputFloatingLabel2" type="number" class="form-control input-solid" size="20" required>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <label for="selectFloatingLabel2" class="">Payment</label>
            <select name="id_payment" class="form-control input-solid" id="selectFloatingLabel2" required>
              <option value="">&nbsp;</option>
              <?php 
                $this->db->select('*')->from('payment');
                $query = $this->db->get();
                foreach ($query->result() as $row)
                {
              ?>
                <option value="<?php echo $row->id_payment;?>" <?php if($data[0]->id_payment == $row->id_payment){ echo 'selected';} ?>><?php echo $row->merchant.' - '.$row->norek.' - '.$row->nama;?></option>
              <?php	} ?>
            </select>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <label for="selectFloatingLabel2" class="">Jenis Jasa</label>
            <select name="id_produk" class="form-control input-solid" id="selectFloatingLabel2" required>
              <option value="">&nbsp;</option>
              <?php 
                $this->db->select('*')->from('produk');
                $query = $this->db->get();
                foreach ($query->result() as $row)
                {
              ?>
                <option value="<?php echo $row->id_produk;?>" <?php if($data[0]->id_produk == $row->id_produk){ echo 'selected';} ?>><?php echo $row->jenis_jasa.' - '.number_format($row->fee);?></option>
              <?php	} ?>
            </select>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <label for="inputFloatingLabel2" class="">Extra Fee</label>
            <input name="extra_fee" id="extra_fee" onkeyup="myFunctionTotal()" min="0" value="<?php echo $data[0]->extra_fee;?>" autocomplete="off" id="extra_fee" type="number" class="form-control input-solid" size="20" required>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <label for="inputFloatingLabel2" class="">Pajak</label>
            <input name="pajak" min="0" id="pajak" onkeyup="myFunctionTotal()" value="<?php echo $data[0]->pajak;?>" autocomplete="off" id="pajak" type="number" class="form-control input-solid" size="20" required>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <label for="inputFloatingLabel2" class="">Total Rupiah</label>
            <input readonly name="total_rupiah" min="0" value="<?php echo $data[0]->total_rupiah;?>" autocomplete="off" id="total_rupiah" type="number" class="form-control input-solid" size="20" required>
          </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group form-floating-label">
            <label for="inputFloatingLabel2" class="">Margin</label>
            <input readonly name="total_margin" min="0" value="<?php echo $data[0]->margin;?>" autocomplete="off" id="total_margin" type="number" class="form-control input-solid" size="20" required>
          </div>
      </div>
		</div>
	</div>
	<div class="modal-footer no-bd">
		<button type="submit" name="submit" id="submit" value="proses" class="btn btn-primary" disabled>Simpan</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>
</form>

<script>
function myFunctionTotal() {
  var extra_fee = document.getElementById('extra_fee').value;
  var pajak = document.getElementById('pajak').value;
  var shipping = document.getElementById('shipping').value;
  var harga = document.getElementById('harga').value;
  var kurs_transaksi = document.getElementById('kurs_transaksi').value;
  
  var belanja = parseInt(harga) + parseInt(shipping);
  var total_belanja = ( belanja * parseInt(kurs_transaksi) ); // hasil belanja * kurs transaksi
  var total_rupiah = parseInt(total_belanja) + parseInt(extra_fee) + parseInt(pajak);
  document.getElementById("total_rupiah").value = total_rupiah;

  var kurs_modal = document.getElementById('kurs_modal').value;
  var margin = parseInt(total_rupiah) - ( ( ( parseInt(belanja) * parseInt(kurs_modal) ) ) + parseInt(pajak) );
  document.getElementById("total_margin").value = margin;

  if(margin > 0){
    document.getElementById("submit").disabled = false;
  }else{
    document.getElementById("submit").disabled = true;
  }
  // console.log(kali_kurs);
  // $.ajax({
  //     url: "<?php echo site_url('transaksi/x')?>",
  //     data: {'pajak': pajak},
  //     cache: false,     
  //     success: function(data){
  //         console.log(data);
  //         // $("#total_lembur").val(data);
  //     }
  // });  
}
</script>