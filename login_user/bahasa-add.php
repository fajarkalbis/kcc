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
        <li class="active">Add Language Skills</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Add Language Skills</h3>
					</div>
							<form class="form-horizontal">
								 <div class="box-body">
									<table class="table table-bordered">
										<tr>
										  <th>Language</th>
										  <th>Spoken <strong> (Range score: 0-100) </strong></th>
										  <th>Written<strong> (Range score: 0-100) </strong></th>
										</tr>
										<tr>
											<td><input type="text" class="form-control" placeholder="language"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="spoken"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="written"></td>
										</tr>
										<tr>
											<td><input type="text" class="form-control" placeholder="language"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="spoken"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="written"></td>
										</tr>
										<tr>
											<td><input type="text" class="form-control" placeholder="language"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="spoken"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="written"></td>
										</tr>
										<tr>
											<td><input type="text" class="form-control" placeholder="language"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="spoken"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="written"></td>
										</tr><tr>
											<td><input type="text" class="form-control" placeholder="language"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="spoken"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="written"></td>
										</tr>
										<tr>
											<td><input type="text" class="form-control" placeholder="language"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="spoken"></td>
											<td><input type="number" class="form-control" style="-moz-appearance:textfield;" placeholder="written"></td>
										</tr>
									</table>	
								  </div>
								<div class="box-footer">
									<a href="bahasa.php" class="btn btn-default">Cancel</a>
									<!-- <button type="submit" class="btn btn-default">Cancel</button> -->
									<button type="submit" class="btn btn-success pull-right">Submit</button>
								</div>
							</form>
				</div>
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
<?php
	include("layout/footer.php");	
?>
