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
       Setting Homepage
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>  Setting Homepage</a></li>
        <li class="active">Images Slideshow</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid" >
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Create Images Slideshow</h3>
                        <span>
                            <a href="setting-homepage-image.php" class=" btn btn-success">Back</a>
                        </span>
                        
                        
					</div>
                   <form class="form-horizontal">
								<div class="box-body">
									<div class="form-group">
										<label class="col-sm-2 control-label">Date</label>
										<div class="col-sm-10">
											<input type="date" class="form-control" placeholder="date">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Browse</label>
										<div class="col-sm-10">
											<input type="file">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Additional From</label>
										<div class="col-sm-10" >
                                            <div class="col-sm-3">
                                                <label>Artikel</label>
                                                <select class="selek select2" name="state" style="width:150px;">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                 <label>Seminar</label>
                                                <select class="selek select2" name="state" style="width:150px;">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Job Fair</label>
                                                <select class="selek select2" name="state" style="width:150px;">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Events</label>
                                                <select class="selek select2" name="state" style="width:150px;">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
										</div>
									</div>
                                    
                                  
                                    
								</div>
                                <script>
                                $(document).ready(function() {
                                    $('.selek').select2();
                                });
                                </script>
									
								<div class="box-footer">
									<button type="submit" class="btn btn-success pull-right">Submit</button>
								</div>
							</form>
				</div>
			</div>
		</div>
    </section>

  </div>
<?php
	include("footer.php");	
?>

