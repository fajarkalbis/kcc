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
        Education
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Personal Data</a></li>
        <li class="active">Education</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Education</h3>
						<a href="pendidikan-add.php" class="btn btn-success pull-right">Add Education</a>
					</div>
					
					<div class="konten">
						<ul class="timeline timeline-inverse">
								<!-- Label Tanggal Kerja -->
								<li class="time-label">
									<span class="bg-red">
									  10 Feb. 2014
									</span>
									<span  class=" pull-right">
										<a href="pendidikan-update.php" class="btn btn-info"><i class="fa fa-edit"></i> Update</a>
										<a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
									 </span>
								</li>
								<li>
									<i class="fa fa-graduation-cap bg-green"></i>	
									<div class="timeline-item">
									  <h3 class="timeline-header"><a href="#">Jenjang</a> Nama Instansi/Asal Sekolah</h3>
									  <div class="timeline-body">
										Deskripsi Edukasi:</br> Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
										weebly ning heekya handango imeem plugg dopplr jibjab, movity
										jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
										quora plaxo ideeli hulu weebly balihoo...
									  </div>
									  <div class="timeline-footer">
										
									  </div>
									</div>
								</li>
								<li class="time-label">
									<span class="bg-red">
									  10 Feb. 2014
									</span>
									<span  class=" pull-right">
										<a href="pendidikan-update.php" class="btn btn-info"><i class="fa fa-edit"></i> Update</a>
										<a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
									 </span>
								</li>
								<!-- timeline Pengalaman Kerja 2 -->
								<li>
									<i class="fa fa-graduation-cap bg-green"></i>	
									<div class="timeline-item">
									  <h3 class="timeline-header"><a href="#">Jenjang</a> Nama Instansi/Asal Sekolah</h3>
									  <div class="timeline-body">
										Deskripsi Edukasi:</br> Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
										weebly ning heekya handango imeem plugg dopplr jibjab, movity
										jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
										quora plaxo ideeli hulu weebly balihoo...
									  </div>
									  <div class="timeline-footer">
										
									  </div>
									</div>
								</li>
								<!-- END timeline item -->
								<li>
									<i class="fa fa-clock-o bg-gray"></i>
								</li>
							</ul>
					</div>
				</div>
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  
<?php
	include("footer.php");	
?>
