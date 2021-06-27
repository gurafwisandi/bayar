<div class="page-header">
	<h4 class="page-title">Data Customer</h4>
	<ul class="breadcrumbs">
		<li class="nav-home">
			<a href="#">
				<i class="flaticon-database"></i>
			</a>
		</li>
		<li class="separator">
			<i class="flaticon-right-arrow"></i>
		</li>
		<li class="nav-item">
			<a href="#">Master</a>
		</li>
		<li class="separator">
			<i class="flaticon-right-arrow"></i>
		</li>
		<li class="nav-item">
			<a href="#">Customer</a>
		</li>
	</ul>
</div>
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<div class="card-head-row">
				<div class="card-title"></div>
				<div class="card-tools">
					<!-- <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
						<span class="btn-label">
							<i class="fa fa-pencil"></i>
						</span>
						Export
					</a> -->
					<button class="btn btn-info btn-border btn-round btn-sm mr-2" data-toggle="modal" data-target="#addRowModal">
					<i class="fa fa-plus"></i> Alamat Customer
					</button>
				</div>
			</div>
		</div>
		<div class="card-body">
      
			<!---Modal INPUT-->
      <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header no-bd">
							<h5 class="modal-title">
								<span class="fw-mediumbold">
								Input Customer</span> 
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
            <form action="<?php echo site_url('customer/customer_update/'.$data[0]->user_id) ?>" method="POST">
		          <input type="text" name="user_id" value="<?php echo $data[0]->user_id;?>">
						  <div class="modal-body">
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group form-floating-label">
												<label for="inputFloatingLabel2" class="">Alamat</label>
												<input name="alamat" placeholder="Alamat" autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" size="20" required>
										</div>
									</div>
									<div class="col-sm-6">
											<div class="form-group form-floating-label">
												<label for="selectFloatingLabel2" class="">Provinsi</label>
												<select name="provinsi" id="provinsi" class="form-control input-solid" id="selectFloatingLabel2" required>
													<option value="">-- Pilih Provinsi --</option>
													<?php 
														$this->db->group_by("provinsi");
														$query = $this->db->get('kodepos');
														foreach ($query->result() as $row)
														{
													?>
														<option value="<?php echo $row->provinsi;?>"><?php echo $row->provinsi;?></option>
													<?php	} ?>
												</select>
											</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-floating-label">
												<label for="inputFloatingLabel2" class="">Kabupaten</label>
												<select name="kabupaten" id="kabupaten" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
												</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-floating-label">
												<label for="inputFloatingLabel2" class="">Kecamatan</label>
												<select name="kecamatan" id="kecamatan" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
												</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-floating-label">
												<label for="inputFloatingLabel2" class="">Kelurahan</label>
												<select name="kelurahan" id="kelurahan" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-floating-label">
												<label for="inputFloatingLabel2" class="">Kode Pos</label>
												<select name="kodepos" id="kodepos" class="form-control input-solid" required="required" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
												</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-floating-label">
												<label for="inputFloatingLabel2" class="">RT/RW</label>
												<input name="rt_rw" placeholder="RT/RW" autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" size="20" required>
										</div>
									</div>
									<div class="col-sm-12">
											<div class="form-group form-floating-label">
												<label for="selectFloatingLabel2" class="placeholder" style="margin-left: 10px;margin-top: -8px;">
                        Pilih Sebagai Alamat Utama</label>
                        <input type="checkbox" name="checkbox" value="1">
											</div>
									</div>
								</div>
              </div>
              <div class="modal-footer no-bd">
                <button type="submit" name="submit" value="submit_addres" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </form>
					</div>
				</div>
			</div>
			<!--End Modal INPUT-->

      <div class="row">
        <div class="col-sm-12">
            <div class="form-group form-floating-label">
              <input name="nama" value="<?php echo $data[0]->nama;?>"  autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" size="20" onkeyup="this.value = this.value.toUpperCase()" required>
              <label for="inputFloatingLabel2" class="placeholder">Nama Lengkap</label>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-floating-label">
              <input name="email" value="<?php echo $data[0]->email;?>"  autocomplete="off" id="inputFloatingLabel2" type="email" class="form-control input-solid" size="20" required>
              <label for="inputFloatingLabel2" class="placeholder">Email</label>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-floating-label">
              <input name="no_hp" value="<?php echo $data[0]->no_hp;?>"  autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" required>
              <label for="inputFloatingLabel2" class="placeholder">Telp</label>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-floating-label">
              <input name="npwp" value="<?php echo $data[0]->npwp;?>"  autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" required>
              <label for="inputFloatingLabel2" class="placeholder">NPWP</label>
            </div>
        </div>
        <div class="col-sm-12">
          <hr>
        </div>
				<?php if(count($addres) > 0){?>
					<div class="col-sm-12">
							<div class="form-group form-floating-label">
								<label for="inputFloatingLabel2" class="">Alamat Utama</label>
								<input value="<?php echo $addres[0]->alamat;?>"  autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" disabled>
							</div>
					</div>
					<div class="col-sm-6">
							<div class="form-group form-floating-label">
								<label for="selectFloatingLabel2" class="">Provinsi</label>
								<select class="form-control input-solid" id="selectFloatingLabel2" disabled>
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
							</div>
					</div>
					<div class="col-md-6">
						<div class="form-group form-floating-label">
								<label for="inputFloatingLabel2" class="">Kota</label>
								<select class="form-control input-solid" disabled="disabled" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
									<option value="<?php echo $addres[0]->kabupaten?>"><?php echo $addres[0]->kabupaten?></option>
								</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group form-floating-label">
								<label for="inputFloatingLabel2" class="">Kecamatan</label>
								<select class="form-control input-solid" disabled="disabled" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
									<option value="<?php echo $addres[0]->kecamatan?>"><?php echo $addres[0]->kecamatan?></option>	
								</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group form-floating-label">
								<label for="inputFloatingLabel2" class="">Kelurahan</label>
								<select class="form-control input-solid" disabled="disabled" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
									<option value="<?php echo $addres[0]->kelurahan?>"><?php echo $addres[0]->kelurahan?></option>	
								</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group form-floating-label">
								<label for="inputFloatingLabel2" class="">Kode Pos</label>
								<select class="form-control input-solid" disabled="disabled" style="width: 100%;"  data-placeholder="-- Pilih Kabupaten --" tabindex="7">
									<option value="<?php echo $addres[0]->kodepos?>"><?php echo $addres[0]->kodepos?></option>	
								</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group form-floating-label">
								<label for="inputFloatingLabel2" class="">RT/RW</label>
								<input name="npwp" value="<?php echo $addres[0]->rt_rw;?>"  autocomplete="off" id="inputFloatingLabel2" type="text" class="form-control input-solid" disabled>
						</div>
					</div>
				<?php } ?>
        <div class="row"><div class="col-md-6">&nbsp;<br>&nbsp;<br>&nbsp;<br></div></div>
        <div class="table-responsive">
          <table id="basic-datatables" class="display table table-striped table-hover" >
            <thead>
              <tr>
                <th>No</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Kode Pos</th>
                <th>Rt/Rw</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              <?php foreach($addres as $u){ ?>
              <tr>
                <td><i class="<?php if($u->alamat_utama){ echo 'btn-info btn-xs'; }?>"><?php echo $no++; ?></i></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->provinsi ?></td>
                <td><?php echo $u->kabupaten ?></td>
                <td><?php echo $u->kecamatan ?></td>
                <td><?php echo $u->kelurahan ?></td>
                <td><?php echo $u->kodepos ?></td>
                <td><?php echo $u->rt_rw ?></td>
                <td>
                  <div class="form-button-action">
                    <!-- <label class="selectgroup-item">
											<a href="javascript:void(0)" data-toggle="modal" data-backdrop="static" data-keyboard="false" onclick="$('#view-modal').modal('show');" data-id="<?php echo $u->user_id; ?>" id="get_data" data-toggle="tooltip" title="Approval">
												<span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-edit btn btn-warning btn-xs"></i></span>
											</a>
                    </label> -->
                    <label class="selectgroup-item">
                      <a href="<?php echo base_url('customer/delete_address/'.$u->id_alamat.'/'.$u->user_id)?>" onclick="return confirm('Apakah Anda Yakin di Hapus')">
                        <span class="selectgroup-button selectgroup-button-icon "><i class="fas fa-trash-alt btn btn-danger btn-xs"></i></span>
                      </a>
                    </label>
                  </div>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

		</div>
	</div>
</div>

<!-- /.modal EDIT-->
<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog"> 
		<div class="modal-content" style="width: 600px;"> 
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">Edit Customer</span> 
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">              
				<div id="dynamic-content">
				</div>
			</div> 
		</div>
	</div>
</div>
<!-- /.modal EDIT-->

<script src="<?=base_url()?>assets/js/core/jquery.3.2.1.min.js"></script>
<script>
	$(document).ready(function(){
			$(document).on('click', '#get_data', function(e){
					e.preventDefault();
					var uid = $(this).data('id');   // it will get id of clicked row
					
					$('#dynamic-content').html(''); // leave it blank before ajax call
					$('#modal-loader').show();      // load ajax loader
					
					$.ajax({
							url  : "<?php echo site_url(); ?>customer/get_conten/"+uid,
							type: 'POST',
							dataType: 'html'
					})
					.done(function(url){ 
							console.log(url);
							$('#dynamic-content').html(url); // load response 
					})
					.fail(function(){
							$('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
							$('#modal-loader').hide();
					});
			});
			
			$("#provinsi").change(function(){
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

	$(document).ready(function() {
	$('#basic-datatables').DataTable({
	});

	$('#multi-filter-select').DataTable( {
		"pageLength": 5,
		initComplete: function () {
			this.api().columns().every( function () {
				var column = this;
				var select = $('<select class="form-control"><option value=""></option></select>')
				.appendTo( $(column.footer()).empty() )
				.on( 'change', function () {
					var val = $.fn.dataTable.util.escapeRegex(
						$(this).val()
						);

					column
					.search( val ? '^'+val+'$' : '', true, false )
					.draw();
				} );

				column.data().unique().sort().each( function ( d, j ) {
					select.append( '<option value="'+d+'">'+d+'</option>' )
				} );
			} );
		}
	});

	// Add Row
	$('#add-row').DataTable({
		"pageLength": 5,
	});

	var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
	$('#addRowButton').click(function() {
		$('#add-row').dataTable().fnAddData([
			$("#addName").val(),
			$("#addPosition").val(),
			$("#addOffice").val(),
			action
			]);
		$('#addRowModal').modal('hide');

	});
	});
</script>