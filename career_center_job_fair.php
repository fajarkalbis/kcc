<?php 
	include("homepage_awal/header.php");
	include("homepage_awal/menu-umum.php");
?>



<div class="container-fluid seminar" id="seminar-id">
	<div class="row" style="margin-top:100px;">
		<div class="col-md-12 seminar-col" id="jobfair-id">
			
			<div class="card text-center">
			  <div class="card-header">
				<h3>List Job Fair Kalbis Instiute</h3>
			  </div>
			  <div class="card-body">
					<table class="table table-hover">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Subject</th>
							  <th scope="col">Date</th>
							  <th scope="col">Time</th>
							  <th scope="col">Location</th>
							  <th scope="col">Action</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Job Fair 2017 </td>
							  <td>17 March 2017</td>
							  <td>13:00 - 17:00 WIB	</td>
							  <td>Library, Kalbis Instiute</td>
							  <td><a href="View" data-toggle="modal" data-target=".jobfair-modal">Detail</a></td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Job Fair 2016 </td>
							  <td>17 March 2016</td>
							  <td>13:00 - 17:00 WIB	</td>
							  <td>Library, Kalbis Instiute</td>
							 <td><a href="View" data-toggle="modal" data-target=".jobfair-modal">Detail</a></td>
							</tr><tr>
							  <th scope="row">3</th>
							  <td>Job Fair 2015 </td>
							  <td>17 March 2015</td>
							  <td>13:00 - 17:00 WIB	</td>
							  <td>Library, Kalbis Instiute</td>
							  <td><a href="View" data-toggle="modal" data-target=".jobfair-modal">Detail</a></td>
							</tr>
							<tr>
							  <th scope="row">4</th>
							 <td>Job Fair 2014 </td>
							  <td>17 March 2014</td>
							  <td>13:00 - 17:00 WIB	</td>
							  <td>Library, Kalbis Instiute</td>
							  <td><a href="View" data-toggle="modal" data-target=".jobfair-modal">Detail</a></td>
							</tr>
						  </tbody>
					</table>
			  </div>
			  <div class="card-footer text-muted">
				Updating 2 days ago
			  </div>
			</div>
			
		</div>
		<?php
			include("modal.php");
		?>
	</div>
</div>
<?php
	include("homepage_awal/footer.php");
?>
 
