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
        Skills
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Personal Data </a></li>
        <li class="active">Skills</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Skills</h3>
						<a href="keterampilan-add.php" class="btn btn-success pull-right">Add Skills</a>
					</div>
						<div class="konten">
								<table class="table table-bordered">
									<tr>
									  <th style="width: 10px">#</th>
									  <th>Name</th>
									  <th>Score</th>
									  <th>Label Score</th>
									  <th style="width: 150px">Action</th>
									</tr>
									<tr>
									  <td>1.</td>
									  <td>Update software</td>
									  <td>
										<div class="progress progress-xs">
										  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
										</div>
									  </td>
									  <td><span class="badge bg-red">55%</span></td>
									  <td>
										<span  class="">
											<a href="pendidikan-update.php" class="btn-xs btn-info"><i class="fa fa-edit"></i> Update</a>
											<a href="#" class="btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
										</span>
									  </td>
									</tr>
									<tr>
									  <td>2.</td>
									  <td>Clean database</td>
									  <td>
										<div class="progress progress-xs">
										  <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
										</div>
									  </td>
									  <td><span class="badge bg-yellow">70%</span></td>
									  <td>
										<span  class="">
											<a href="pendidikan-update.php" class="btn-xs btn-info"><i class="fa fa-edit"></i> Update</a>
											<a href="#" class="btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
										</span>
									  </td>
									</tr>
									<tr>
									  <td>3.</td>
									  <td>Cron job running</td>
									  <td>
										<div class="progress progress-xs progress-striped active">
										  <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
										</div>
									  </td>
									  <td><span class="badge bg-light-blue">30%</span></td>
									  <td>
										<span  class="">
											<a href="pendidikan-update.php" class="btn-xs btn-info"><i class="fa fa-edit"></i> Update</a>
											<a href="#" class="btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
										</span>
									  </td>
									</tr>
									<tr>
									  <td>4.</td>
									  <td>Fix and squish bugs</td>
									  <td>
										<div class="progress progress-xs progress-striped active">
										  <div class="progress-bar progress-bar-success" style="width: 90%"></div>
										</div>
									  </td>
									  <td><span class="badge bg-green">90%</span></td>
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
