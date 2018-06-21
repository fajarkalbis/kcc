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
        <li class="active">Media Sosial</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid" >
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Media Sosial</h3>

                        
                        
					</div>
                    <div class="box-body with-border">
                        <div class="col-xs-12">
                              <table class="table table-hover ">
                                <tr>
                                  <th>No</th>
                                  <th>Media Sosial</th>
								  <th>Link</th>
                                  <th>Action</th>
                                </tr>
                                <tr>
                                  <td>183</td>
                                  <td>Facebook</td>
                                  <td>https://blabla.com</td>
                                  <td>
								  <a href="#" class="btn btn-info"><i class="fa fa-trash"></i> Update</a>
								  <a href="#" class="btn btn-danger"><i class="f a fa-trash"></i> Delete</a></td>
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

