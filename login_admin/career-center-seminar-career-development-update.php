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
        Career Center
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>  Career Center</a></li>
        <li class="active">Seminar Career Development</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid" >
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Update Seminar Career Development</h3>
                        <span>
                         
                        </span>
                        
                        
					</div>
                    <div class="box-body with-border">
                        <div class="col-xs-12">
                              <form class="form-horizontal">
								<div class="box-body">
									
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Date Publish</label>
										<div class="col-sm-10">
											<input type="date" class="form-control" placeholder="Name">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Time</label>
										<div class="col-sm-10">
                                            <div class="col-sm-3">
                                                <label>Start</label><input type="text" class="form-control timepicker">
                                            </div>
											 <div class="col-sm-3">
                                                <label>End</label><input type="text" class="form-control timepicker">
                                            </div>
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-2 control-label">Location</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="location">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Speaker</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="speaker">
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-2 control-label">Total Participants</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" placeholder="">
										</div>
									</div>

                                    
                                    <div class="form-group">
									<label class="col-sm-2 control-label">Description</label>
										<div class="col-sm-10">
											<form>
											<textarea id="editor1" name="editor1" rows="10" cols="80">
																	This is my textarea to be replaced with CKEditor.
											</textarea>
											</form>
										</div>
									</div>
								</div>
                                <script>
                                $(document).ready(function() {
                                    $('.selek').select2();
                                });
                                </script>
									
								<div class="box-footer">
					
									<a href="career-center-seminar-career-development.php" class=" btn btn-warning">Back</a>
									<!-- <button type="submit" class="btn btn-default">Cancel</button> -->
									<button type="submit" class="btn btn-success pull-right">Submit</button>
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

