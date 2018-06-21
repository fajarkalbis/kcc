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
        Online Applications
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Vacancy</a></li>
        <li class="active">Online Applications</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

		<div class="row">
			<div class="col-lg-3 col-xs-12">
			  <div class="box box-primary">
					<div class="box-header with-border">
					  <h3 class="box-title">Search Jobs</h3>
					  <div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					  </div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					  <form action="#" method="post">
						<div class="form-group">
						  <input type="text" class="form-control" name="emailto" placeholder="Search Jobs By Title, Skills, or Keywords">
						</div>
						<div class="form-group">
						  <select class="form-control" name="emailto" placeholder="Lokasi">
								<option>All Location</option>
								<option>DKI Jakarta</option>
								<option>Banten</option>
								<option>Bekasi</option>
								<option>Bogor</option>
						  </select>
						</div>
						<div>
						</div>
					  </form>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
					  <button type="button" class="pull-right btn btn-primary" id="sendEmail">Search
						<i class="fa fa-arrow-circle-right"></i></button>
					</div>
					<!-- /.box-footer -->
				  </div>
			</div>

			 <div class="col-lg-8 col-xs-12">
			  <div class="box box-success">
					<div class="box-header with-border">
					  <h3 class="box-title">Filter: <strong>All Location </strong></h3>
					  <div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					  </div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					
						<div class="post">
						  <div class="user-block">
							<img class="img-circle img-bordered-sm" src="../core/dist/img/default-50x50.gif" alt="user image">
								<span class="username">
								  <a href="#">Product Initiative Manager Job (Life Insurance) Jakarta, Indonesia</a>
								</span>
							<span class="description">
							PT Monroe Consulting Group </br>
							DKI Jakarta </br>
							IDR: 3,100,000
							</span>
						  </div>
							<!-- /.user-block -->
						  <p>
							Executive recruitment company Monroe Consulting Group Indonesia is recruiting on behalf of a growing multinational insurance company. Our highly...
						  </p>
						</div>
						
						<div class="post">
						  <div class="user-block">
							<img class="img-circle img-bordered-sm" src="../core/dist/img/default-50x50.gif" alt="user image">
								<span class="username">
								  <a href="#">Product Initiative Manager Job (Life Insurance) Jakarta, Indonesia</a>
								</span>
							<span class="description">
							PT Monroe Consulting Group </br>
							DKI Jakarta </br>
							IDR: 3,100,000
							</span>
						  </div>
							<!-- /.user-block -->
						  <p>
							Executive recruitment company Monroe Consulting Group Indonesia is recruiting on behalf of a growing multinational insurance company. Our highly...
						  </p>
						</div>
						
						
						
						
						
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
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

