<?php
	include("header.php");
	include("header-menu.php");
	include("sidebar-kiri.php");
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Documents
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Personal Data</a></li>
        <li class="active">Documents</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		<div class="row">
			<div class="col-lg-3 col-xs-12">
			  <div class="box box-success">
					<div class="box-header with-border">
					  <h3 class="box-title">Documents</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					  <ul class="products-list product-list-in-box">
						<li class="item">  
							<a href="javascript:void(0)" class="product-title">Ijasah Sarjana</br>
								<span  class="">
									<a href="pendidikan-update.php" class="btn-xs btn-info"><i class="fa fa-download"></i> Download</a>
									<a href="#" class="btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
								</span>
							</a>
						</li>
						<li class="item">  
							<a href="javascript:void(0)" class="product-title">Transkrip Nilai</br>
								<span  class="">
									<a href="pendidikan-update.php" class="btn-xs btn-info"><i class="fa fa-download"></i> Download</a>
									<a href="#" class="btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
								</span>
							</a>
						</li>
						<li class="item">  
							<a href="javascript:void(0)" class="product-title">SKCK</br>
								<span  class="">
									<a href="pendidikan-update.php" class="btn-xs btn-info"><i class="fa fa-download"></i> Download</a>
									<a href="#" class="btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
								</span>
							</a>
						</li>
					  </ul>
					</div>
					<!-- /.box-body -->
					<div class="box-footer text-center">
					</div>
					<!-- /.box-footer -->
				  </div>
			</div>
			<div class="col-lg-9 col-xs-12">
			  <div class="box box-success">
					<div class="box-header with-border">
					  <h3 class="box-title">Upload Documents</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					  <form role="form">
						  <div class="box-body">
							<div class="form-group">
							  <label for="exampleInputPassword1">File Name:</label>
							  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="File Name">
							</div>
							<div class="form-group">
							  <label for="exampleInputFile">Input File</label>
							  <input type="file" id="exampleInputFile">
							  <p class="help-block">Example block-level help text here.</p>
							</div>
						  </div>
						  <!-- /.box-body -->

						  <div class="box-footer">
							<button type="submit" class="btn btn-success">Submit</button>
						  </div>
						</form>
					</div>
					<!-- /.box-body -->
					<div class="box-footer text-center">
					</div>
					<!-- /.box-footer -->
				  </div>
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  
<?php
	include("footer.php");	
?>
