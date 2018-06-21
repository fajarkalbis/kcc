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
        Language Skills
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Personal Data</a></li>
        <li class="active"> Language Skills</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title"> Language Skills</h3>
						<a href="bahasa-add.php" class="btn btn-success pull-right">Add  Language Skills</a>
					</div>
						<div class="konten">
								<table class="table table-bordered">
									<tr>
									  <th style="width: 10px">#</th>
									  <th>Language</th>
									  <th>Spoken</th>
									  <th>Written</th>
									  <th style="width: 150px">Action</th>
									</tr>
									<tr>
									  <td>1.</td>
									  <td>Bahasa Indonesia</td>
									  <td>60</td>
									  <td>90</td>
									  <td>
										<span  class="">
											<a href="pendidikan-update.php" class="btn-xs btn-info"><i class="fa fa-edit"></i> Update</a>
											<a href="#" class="btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
										</span>
									  </td>
									</tr>
									<tr>
									  <td>2.</td>
									  <td>Bahasa Rusia</td>
									  <td>60</td>
									  <td>90</td>
									  <td>
										<span  class="">
											<a href="pendidikan-update.php" class="btn-xs btn-info"><i class="fa fa-edit"></i> Update</a>
											<a href="#" class="btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
										</span>
									  </td>
									</tr>
									<tr>
									  <td>3.</td>
									  <td>Bahasa Inggris</td>
									  <td>60</td>
									  <td>90</td>
									  <td>
										<span  class="">
											<a href="pendidikan-update.php" class="btn-xs btn-info"><i class="fa fa-edit"></i> Update</a>
											<a href="#" class="btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
										</span>
									  </td>
									</tr>
								  </table>
						</div>
				</div>
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  
<?php
	include("footer.php");	
?>
