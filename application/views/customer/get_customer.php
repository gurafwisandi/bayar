<form action="<?php echo site_url('/customer/customer_update/') ?>" method="POST">
	<div class="modal-body">
		<input type="text" name="user_id" value="<?php echo $data[0]->user_id;?>">
		<div class="row">
			<!-- <div class="col-sm-6">
					<div class="form-group form-floating-label">
						<select name="provinsi" id="provinsi" class="form-control input-solid" id="selectFloatingLabel2" required>
							<option value="">&nbsp;</option>
							<?php 
								$this->db->group_by("provinsi");
								$query = $this->db->get('kodepos');
								foreach ($query->result() as $row)
								{
							?>
								<option value="<?php echo $row->provinsi;?>" <?php if($addres[0]->provinsi == $row->provinsi){ echo 'selected';}?>><?php echo $row->provinsi;?></option>
							<?php	} ?>
						</select>
						<label for="selectFloatingLabel2" class="placeholder">Provinsi</label>
					</div>
			</div>
			<div class="col-md-6">
				<div class="form-group form-floating-label">
						<select name="kabupaten" id="kabupaten" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
							<option value="<?php echo $addres[0]->kabupaten?>"><?php echo $addres[0]->kabupaten?></option>
						</select>
						<label for="inputFloatingLabel2" class="placeholder">Kota</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group form-floating-label">
						<select name="kecamatan" id="kecamatan" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
							<option value="<?php echo $addres[0]->kecamatan?>"><?php echo $addres[0]->kecamatan?></option>	
						</select>
						<label for="inputFloatingLabel2" class="placeholder">Kecamatan</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group form-floating-label">
						<select name="kelurahan" id="kelurahan" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
							<option value="<?php echo $addres[0]->kelurahan?>"><?php echo $addres[0]->kelurahan?></option>	
						</select>
						<label for="inputFloatingLabel2" class="placeholder">Kelurahan</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group form-floating-label">
						<select name="kodepos" id="kodepos" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
							<option value="<?php echo $addres[0]->kodepos?>"><?php echo $addres[0]->kodepos?></option>	
						</select>
						<label for="inputFloatingLabel2" class="placeholder">Kode Pos</label>
				</div>
			</div> -->


			<div class="col-sm-6">
											<div class="form-group form-floating-label">
												<select name="provinsi" id="provinsi" class="form-control input-solid" id="selectFloatingLabel2" required>
													<option value="">&nbsp;</option>
													<?php 
														$this->db->group_by("provinsi");
														$query = $this->db->get('kodepos');
														foreach ($query->result() as $row)
														{
													?>
														<option value="<?php echo $row->provinsi;?>"><?php echo $row->provinsi;?></option>
													<?php	} ?>
												</select>
												<label for="selectFloatingLabel2" class="placeholder">Provinsi</label>
											</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-floating-label">
												<select name="kabupaten" id="kabupaten" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
												</select>
												<label for="inputFloatingLabel2" class="placeholder">Kota</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-floating-label">
												<select name="kecamatan" id="kecamatan" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
												</select>
												<label for="inputFloatingLabel2" class="placeholder">Kecamatan</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-floating-label">
												<select name="kelurahan" id="kelurahan" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
												</select>
												<label for="inputFloatingLabel2" class="placeholder">Kelurahan</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-floating-label">
												<select name="kodepos" id="kodepos" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
												</select>
												<label for="inputFloatingLabel2" class="placeholder">Kode Pos</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-floating-label">
												<input name="rt_rw" autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" size="20" required>
												<label for="inputFloatingLabel2" class="placeholder">RT/RW</label>
										</div>
									</div>


		</div>
	</div>
	<div class="modal-footer no-bd">
		<button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>
	</form>
<!-- <script src="<?=base_url()?>assets/js/core/jquery.3.2.1.min.js"></script> -->
<script>
	$(document).ready(function(){
			console.log('x');
			$("#provinsi").change(function(){
			console.log('dasdax');
					var provinsi = $("#provinsi").val();
					console.log(provinsi);
					$.ajax({
							url: "<?php echo site_url('auth/ambil_provinsi')?>",
							data: "provinsi="+provinsi,
							cache: false,     
							success: function(data){
									$("#kabupaten").html(data);
									
							}
					}); 
			});  
			$("#kabupaten").change(function(){
					var kabupaten = $("#kabupaten").val();
					console.log(kabupaten);
					$.ajax({
							url: "<?php echo site_url('auth/ambil_kabupaten')?>",
							data: "kabupaten="+kabupaten,
							cache: false,     
							success: function(data){
									$("#kecamatan").html(data);
							}
					}); 
			}); 
			$("#kecamatan").change(function(){
					var kecamatan = $("#kecamatan").val();
					var kabupaten = $("#kabupaten").val();
					$.ajax({
							url: "<?php echo site_url('auth/ambil_kecamatan')?>",
							data: {'kecamatan': kecamatan, 'kabupaten': kabupaten},
							cache: false,     
							success: function(data){
									$("#kelurahan").html(data);
									console.log(data);
							}
					}); 
			});
			$("#kelurahan").change(function(){
					var kelurahan = $("#kelurahan").val();
					var kecamatan = $("#kecamatan").val();
					var kabupaten = $("#kabupaten").val();
					$.ajax({
							url: "<?php echo site_url('auth/ambil_kelurahan')?>",
							data: {'kelurahan':kelurahan,'kecamatan': kecamatan, 'kabupaten': kabupaten},
							cache: false,     
							success: function(data){
									$("#kodepos").html(data);
							}
					}); 
			});
	});

</script>