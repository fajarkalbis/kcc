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
        Profile
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
			<div class="col-md-3">
			  <!-- Profile Image -->
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">About Me</h3>
					  	<a href="profile-edit.php" class="pull-right btn btn-success"><small><i class="fa fa-edit margin-r-5"></i>Edit</small></a>
				</div>
            <!-- /.box-header -->
            <div class="box-body box-profile">
				<img class="profile-user-img img-responsive img-circle" src="../core/dist/img/user2-160x160.jpg" alt="User profile picture">
				<h3 class="profile-username text-center">Alexander Pierce</h3>
					<strong><i class="fa fa-address-card-o margin-r-5"></i> Email</strong>
					<p class="text-muted">1995@gmail.com</p>
				<hr>
					<strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
					<p class="text-muted">Malibu, California</p>
				<hr>
					<strong><i class="fa fa-mobile-phone margin-r-5"></i> Phone Number</strong>
					<p class="text-muted">0912-1211-1212</p>
				<hr>
					<strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
					<p>
					<span class="label label-danger">UI Design</span>
					<span class="label label-success">Coding</span>
					<span class="label label-info">Javascript</span>
					<span class="label label-warning">PHP</span>
					<span class="label label-primary">Node.js</span>
					</p>
				<hr>
					<strong><i class="fa fa-file-text-o margin-r-5"></i> Description</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
			</div>
			
			
			<div class="col-md-9">
				  <div class="nav-tabs-custom">
					<ul class="nav nav-tabs ">
					  <li class="active"><a href="#pengalaman" data-toggle="tab">Work Experience</a></li>
					  <li><a href="#pendidikan" data-toggle="tab">Education</a></li>
					  <li><a href="#keterampilan" data-toggle="tab">Skills</a></li>
					  <li><a href="#bahasa" data-toggle="tab">Language Skills</a></li>
					  <li><a href="#dokumen" data-toggle="tab">Document</a></li>
					</ul>
					<div class="tab-content">
						<div class="active tab-pane" id="pengalaman">
							<!-- timeline Pengalaman Kerja 1 -->
							<ul class="timeline timeline-inverse">
								<!-- Label Tanggal Kerja -->
								<li class="time-label">
									<span class="bg-red">
									  10 Feb. 2014
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
									  10 Feb. 2014
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
					  
						<div class="tab-pane" id="pendidikan">
							<ul class="timeline timeline-inverse">
								<!-- Label Tanggal Kerja -->
								<li class="time-label">
									<span class="bg-red">
									  10 Feb. 2014
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
						<div class="tab-pane" id="keterampilan">
							<div class="box-body">
								  <table class="table table-bordered">
									<tr>
									  <th style="width: 10px">#</th>
									  <th>Name</th>
									  <th>Score</th>
									  <th style="width: 120px">Label score</th>
									</tr>
									<tr>
									  <td>1.</td>
									  <td>Update software</td>
									  <td>
										<div class="progress progress-xs">
										  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
										</div>
									  </td>
									  <td><span class="badge bg-red">55%</span></td>
									</tr>
									<tr>
									  <td>2.</td>
									  <td>Clean database</td>
									  <td>
										<div class="progress progress-xs">
										  <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
										</div>
									  </td>
									  <td><span class="badge bg-yellow">70%</span></td>
									</tr>
									<tr>
									  <td>3.</td>
									  <td>Cron job running</td>
									  <td>
										<div class="progress progress-xs progress-striped active">
										  <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
										</div>
									  </td>
									  <td><span class="badge bg-light-blue">30%</span></td>
									</tr>
									<tr>
									  <td>4.</td>
									  <td>Fix and squish bugs</td>
									  <td>
										<div class="progress progress-xs progress-striped active">
										  <div class="progress-bar progress-bar-success" style="width: 90%"></div>
										</div>
									  </td>
									  <td><span class="badge bg-green">90%</span></td>
									</tr>
								  </table>
								</div>
								<!-- /.box-body -->
								<div class="box-footer clearfix">
								  <ul class="pagination pagination-sm no-margin pull-right">
									<li><a href="#">&laquo;</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">&raquo;</a></li>
								  </ul>
								</div>
						</div>
						
				
						<div class="tab-pane" id="bahasa">
							<div class="box-body">
								  <table class="table table-bordered">
									<tr>
									  <th style="width: 10px">#</th>
									  <th>Language</th>
									  <th>Spoken</th>
									  <th style="width: 120px">Written</th>
									</tr>
									<tr>
									  <td>1.</td>
									  <td>Bahasa Indonesia</td>
									  <td>60</td>
									  <td>90</td>
									</tr>
									<tr>
									  <td>2.</td>
									  <td>Bahasa Rusia</td>
									  <td>60</td>
									  <td>90</td>
									</tr>
									<tr>
									  <td>3.</td>
									  <td>Bahasa Inggris</td>
									  <td>60</td>
									  <td>90</td>
									</tr>
								  </table>
								</div>
								
						</div>
				
						
						<div class="tab-pane" id="dokumen">
							<div class="timeline-item">
								<span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

								<h3 class="timeline-header"><a href="#">Alexander Pierce</a> uploaded new dokumen</h3>

								  <div class="timeline-body">
									<img src="http://placehold.it/150x100" alt="..." class="margin">
									<img src="http://placehold.it/150x100" alt="..." class="margin">
									<img src="http://placehold.it/150x100" alt="..." class="margin">
									<img src="http://placehold.it/150x100" alt="..." class="margin">
								  </div>
							</div>
						</div>
						
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
