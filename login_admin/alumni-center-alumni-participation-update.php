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
        Alumni Center
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>  Alumni Center</a></li>
        <li class="active">Events</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid" >
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Events Update</h3>
                        <span>
                         
                        </span>
                        
                        
					</div>
                    <div class="box-body with-border">
                        <div class="col-xs-12">
                              <form class="form-horizontal">
								<div class="box-body">
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Date</label>
										<div class="col-sm-10">
											<input type="date" class="form-control" placeholder="date">
										</div>
									</div>
                                   <div class="form-group">
										<label class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Name">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Speaker</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Name">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Location</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Name">
										</div>
									</div>

								</div>
                                
								<div class="box-footer">
					
									<a href="alumni-center-alumni-participation.php" class=" btn btn-warning">Back</a>
									<!-- <button type="submit" class="btn btn-default">Cancel</button> -->
									<button type="submit" class="btn btn-success pull-right">Update</button>
								</div>
							</form>
                            </div>
                            <!-- /.box-body -->
                    </div>
				</div>
			</div>
		</div>
    </section>

  </div>
<?php
	include("footer.php");	
?>

