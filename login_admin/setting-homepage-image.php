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
						<h3 class="box-title">Images Slideshow</h3>
                        <span>
                            <a href="setting-homepage-image-createBanner.php" class=" btn btn-success">Add New Banner</a>
                        </span>
                        
                        
					</div>
                    <div class="box-body with-border">
                        <div class="col-xs-12">
                              <table class="table table-hover ">
                                <tr>
                                  <th>ID</th>
                                  <th>Date</th>
								  <th>Picture</th>
                                  <th>Action</th>
                                </tr>
                                <tr>
                                  <td>183</td>
                                  <td>11-7-2014</td>
                                  <td><img width="400px" src="../homepage_awal/img/banner1.jpg" alt="User Image"></td>
                                  <td><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
                                </tr>
								<tr>
                                  <td>183</td>
                                  <td>11-7-2014</td>
                                  <td><img width="400px" src="../homepage_awal/img/banner2.jpg" alt="User Image"></td>
                                  <td><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
                                </tr>
								<tr>
                                  <td>183</td>
                                  <td>11-7-2014</td>
                                  <td><img width="400px" src="../homepage_awal/img/banner3.jpg" alt="User Image"></td>
                                  <td><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
                                </tr>
								<tr>
                                  <td>183</td>
                                  <td>11-7-2014</td>
                                  <td><img width="400px" src="../homepage_awal/img/banner4.jpg" alt="User Image"></td>
                                  <td><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
                                </tr>
								<tr>
                                  <td>183</td>
                                  <td>11-7-2014</td>
                                  <td><img width="400px" src="../homepage_awal/img/banner2.jpg" alt="User Image"></td>
                                  <td><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
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

