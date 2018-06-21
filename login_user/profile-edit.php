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
        Home
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Personal Data</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Edit Profile</h3>
					</div>
							<form class="form-horizontal">
								<div class="box-body">
									<div class="form-group">
										<label class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Name">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" placeholder="">
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Location</label>
                                        <div class="col-sm-10">
                                        <select class="selek form-control" name="state">
                                          <option value="AL">Alabama</option>
                                          <option value="WY">Wyoming</option>
                                        </select>
                                        </div>
                                    </div>
                                     <div class="form-group">
										<label class="col-sm-2 control-label">Phone Number</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Skills</label>
                                        <div class="col-sm-10">
                                        <select class="selek form-control" name="state">
                                          <option value="AL">Alabama</option>
                                          <option value="WY">Wyoming</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                        <textarea class=" form-control" name="state">
                                         
                                        </textarea>
                                        </div>
                                    </div>
								</div>
                                <script>
                                $(document).ready(function() {
                                    $('.selek').select2();
                                });
                                </script>
									
								<div class="box-footer">
									<a href="pendidikan.php" class="btn btn-default">Cancel</a>
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
	include("footer.php");	
?>

