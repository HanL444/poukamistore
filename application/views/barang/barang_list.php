<?php
$this->session->set_userdata('alamat', 'barang');
$this->load->view('Templates/Header');
?>


    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        	<?php if($this->session->userdata('status') == 'admin') { ?> 
                        	<div class="right" align="right" style="margin-top:-50px"><?php echo anchor(site_url("barang/tambah"),'<i class="fa fa-plus"></i>', 'class="btn btn-primary"');?></div>	
                        	<?php } ?>
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Data Barang</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                       <thead class="text-primary">
					<tr>
						<th width="5%" style="text-align:center;">No</th>
						<th style="text-align:center; vertical-align:middle;">Gambar</th>
						<th style="text-align:center; vertical-align:middle;">Nama Barang</th>
						<th style="text-align:center; vertical-align:middle;">Size</th>
						<th style="text-align:center; vertical-align:middle;">Jenis</th>
						<?php if($this->session->userdata('status') == 'admin') { ?>
						<th style="text-align:center; vertical-align:middle;">Aksi</th>
						<?php } ?>
					</tr>
				</thead>
                                    <tbody>
                                     	<?php foreach ($barang as $key => $value) { ?>
					<tr>
						<td align="center" style="vertical-align:middle;"><?php echo $key+1;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->gambar;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->nama_barang;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->size;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->jenis;?></td>
						
						<?php if($this->session->userdata('status') == 'admin') { ?>
						<td align="center" style="vertical-align:middle;">
						<?php echo anchor(site_url("barang/edit/".$value->id),
					'<i class="fa fa-pencil"></i>', 
					'class="btn btn-warning"');?>
						<?php echo anchor(site_url("barang/delete/".$value->id),
					'<i class="fa fa-trash"></i>', 
					'class="btn btn-danger"');?>
						</td>
						<?php } ?>
					</tr>
					<?php } ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--banner-->	
	
		   <?php
$this->load->view('Templates/Footer');
?>
</script>
</body>
</html>

