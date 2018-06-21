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
        Work Experience
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Personal Data</a></li>
        <li class="active"> Work Experience</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title"> Work Experience</h3>
						<a href="pengalaman-add.php" class="btn btn-success pull-right">Add Work Experience</a>
					</div>
						<div class="konten">
							<ul class="timeline timeline">
								<!-- Label Tanggal Kerja -->
								<li class="time-label">
									<span class="bg-red">
									  Feb 2016 - Jan 2017
									</span>
									 <span  class=" pull-right">
										<a href="pengalaman-update.php" class="btn btn-info"><i class="fa fa-edit"></i> Update</a>
										<a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
									 </span>
								</li>
								<li>
									<i class="fa fa-address-card bg-green"></i>	
									<div class="timeline-item">
									  <h3 class="timeline-header"><a href="#">Nama Jabatan</a> Nama Perusahaan</h3>
									  <div class="timeline-body">
										<span> Spesialisasi: A		</span> </br>
										<span> Negara: B				</span> </br>
										<span> Industri: C			</span> </br>
										<span> Jabatan: D			</span> </br>
										<span> Keterangan Kerja: 	</span> </br>
										<span> Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo... 	</span> 
									  </div>
									  <div class="timeline-footer">
										IDR: 5.120.000
									  </div>
									</div>
								</li>
								<li class="time-label">
									<span class="bg-red">
									   Feb 2016 - Jan 2017
									</span>
									<span  class=" pull-right">
										<a href="pengalaman-update.php" class="btn btn-info"><i class="fa fa-edit"></i> Update</a>
										<a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
									 </span>
								</li>
								<!-- timeline Pengalaman Kerja 2 -->
								<li>
									<i class="fa fa-address-card bg-green"></i>	
									<div class="timeline-item">
									  <h3 class="timeline-header"><a href="#">Nama Jabatan</a> Nama Perusahaan</h3>
										<div class="timeline-body">
											<span> Spesialisasi: A		</span> </br>
											<span> Negara: B				</span> </br>
											<span> Industri: C			</span> </br>
											<span> Jabatan: D			</span> </br>
											<span> Keterangan Kerja: 	</span> </br>
											<span> Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo... 	</span> 
										</div>
									  <div class="timeline-footer">
										IDR: 5.120.000
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
