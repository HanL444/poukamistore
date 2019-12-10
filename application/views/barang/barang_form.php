<?php
$this->session->set_userdata('alamat', 'barang');
$this->load->view('Templates/Header');
?>
<!--banner-->



<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title"><?php echo $button; ?> Barang</h4>
					</div>
					<div class="card-content">
						<div class="blank">
							<div class="blank-page" style="padding-right:40px; padding-left:40px;">
								<div class="tab-content" style="margin-bottom:30px;">
									<div class="tab-pane active" id="horizontal-form">
										<form class="form-horizontal" action="<?php echo $action;?>" method="POST">

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="focusedinput" class="col-sm-2 control-label">Nama Barang</label>
														<div class="col-sm-8">
															<input type="text" name="nama_barang" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $nama_barang;?>">
														</div>
													</div>

													<div class="form-group">
														<label for="focusedinput" class="col-sm-2 control-label">Size</label>
														<div class="col-sm-8">
															<input type="text" name="size" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $size;?>">
														</div>
													</div>
													<div class="form-group">
														<label for="focusedinput" class="col-sm-2 control-label">Jenis</label>
														<div class="col-sm-8">
															<input type="text" name="jenis" class="form-control1" id="focusedinput" placeholder="" value="<?php echo $jenis;?>">
														</div>
													</div>
												</div>
												<input type="hidden" name="id" value="<?php echo $id; ?>">
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
														<a href="<?php echo site_url('barang'); ?>" class="btn btn-default">Kembali</a>
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