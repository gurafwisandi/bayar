<?php 
$doc = $data[0]->file_pembayaran;
?>
<?php $file=substr($doc,-3);
if($file=='JPG' or $file=='PNG' or $file=='jpg' or $file=='png' or $file=='PEG' or $file=='peg'){?>
    <img style="width: 100%;" src="<?php echo base_url() ?>assets/file_upload/<?php echo $doc; ?>"  class="img-responsive" id="rotate-image7" style="border-radius: 10px;display: block;margin-left: auto;margin-right: auto;">
<?php }elseif( $file=='pdf' OR $file=='PDF'){?>
    <object data="<?php echo base_url() ?>assets/file_upload/<?php echo $doc; ?>#view=Fit" type="application/pdf" width="100%" height='850px'>
    </object>
<?php }else{ }?>