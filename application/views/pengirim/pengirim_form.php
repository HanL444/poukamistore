<?php
$this->session->set_userdata('alamat', 'pengirim');
$this->load->view('Templates/Header');
?>
<!--banner-->

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title"><?php echo $button; ?> Pembelian</h4>
					</div>
					<div class="card-content">
						<div class="blank">
							<div class="blank-page" style="padding-right:40px; padding-left:40px;">
								<div class="tab-content" style="margin-bottom:30px;">
									<div class="tab-pane active" id="horizontal-form">
										<form class="form-horizontal" action="<?php echo $action;?>" method="POST">

										<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Barang</label>
									<div class="col-sm-8">
										<select name="id">
											<?php foreach ($barang as $key => $value) { ?>
												<option value="<?php echo $value->id; ?>"><?php echo $value->nama_barang ?> <?php echo $value->size ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Stok</label>
									<div class="col-sm-8">
										<input type="text" name="stok" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $stok;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Store</label>
									<div class="col-sm-8">
										<select name="id_lok">
											<?php foreach ($lokasi as $key => $value) { ?>
												<option value="<?php echo $value->id_lok; ?>"><?php echo $value->store ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
				
								<input type="hidden" name="id_kir" value="<?php echo $id_kir; ?>">
						</div>
					</div>
					<div class="bs-example" data-example-id="form-validation-states-with-icons">
        <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
      </div>
      
											
											<div class="panel-footer">
												<div class="row">
													<div class="col-sm-8 col-sm-offset-2">
														<center>
															<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
															<a href="<?php echo site_url('pengirim'); ?>" class="btn btn-default">Kembali</a>
															<input type="reset" class="btn-inverse btn">
														</center>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>




								<?php
								$this->load->view('Templates/Footer');
								?>


		