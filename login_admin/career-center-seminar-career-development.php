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
						<h3 class="box-title">Seminar Career Development List</h3>
                        <span>
                            <a href="career-center-seminar-career-development-add.php" class="pull-right btn btn-success">Add Seminar Career Development</a>
                        </span>
                        
                        
					</div>
                    <div class="box-body with-border">
                        <div class="col-xs-12">
                              <table class="table table-hover ">
                                <tr>
                                  <th>ID</th>
                                  <th>Title</th>
                                  <th>Date Publish</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                                <tr>
                                  <td>183</td>
                                  <td>dawdawd</td>
                                  <td>11-7-2014</td>
                                  <td><span class="label label-primary">Upload</span></td>
                                  
								  <td>  <a href="career-center-seminar-career-development-update.php" class="btn btn-info"><i class="fa fa-trash"></i> Update</a>
								  <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
                                </tr>
                                
                              </table>
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

