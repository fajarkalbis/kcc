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
        Article
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>  Article</a></li>
        <li class="active">Article</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid" >
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Add Article</h3>
                        <span>
                         
                        </span>
                        
                        
					</div>
                    <div class="box-body with-border">
                        <div class="col-xs-12">
                              <form class="form-horizontal">
								<div class="box-body">
									<div class="form-group">
										<label class="col-sm-2 control-label">date</label>
										<div class="col-sm-10">
											<input type="date" class="form-control" placeholder="Name">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label">title</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Category</label>
										<div class="col-sm-10">
								            <input type="radio" name="artikel" value="career">  <label> Career Article </label>
                                            <input type="radio" name="artikel" value="alumni">  <label> Alumni Article </label>
                                            
										</div>
									</div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
									<label class="col-sm-2 control-label">Article</label>
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
					
									<a href="article.php" class=" btn btn-warning">Back</a>
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

