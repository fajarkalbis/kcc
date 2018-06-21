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
        <li class="active">Alumni Testimony</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid" >
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Alumni Testimony List</h3>
                        <span>
                            <a href="alumni-center-alumni-testimony-add.php" class="pull-right btn btn-success">Add alumni testimony</a>
                        </span>
                        
                        
					</div>
                    <div class="box-body with-border">
                        <div class="col-xs-12">
                              <table class="table table-hover ">
                                <tr>
                                  <th>ID</th>
                                  <th>Date</th>
                                  <th>Photo</th>
                                  <th>Name</th>
                                  <th>Major</th>
                                  <th>Work as a</th>
                                  <th>Testimony </th>
                                </tr>
                                <tr>
                                  <td>183</td>
                                 <td>11-7-2014</td>
                                  <td>no foto</td>
                                    <td>andy</td>
                                    <td>it</td>
                                     <td>it</td>
                                    <td>helo</td>
                                  
                                  
								  <td>  <a href="alumni-center-alumni-testimony-update.php" class="btn btn-info"><i class="fa fa-trash"></i> Update</a>
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

