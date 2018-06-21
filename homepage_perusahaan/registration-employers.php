<?php 
	include("header.php");
	include("menu-employers.php");
?>

<section id="regis">
    <div class="row">
        <div class="container">
            <div class="col-md-12 tab-isi">
			<div class="card card-login">
					<div class="card-header" id="login">
						<h5 class=""> Have an account?<a href="employers.php#logon"> Log In</a></h5>
					</div>
					<div class="card-block logins">
					 <form>
				        <div class="form-group row">
						  <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
						  <div class="col-sm-9">
							<input type="text" class="form-control" id="inputEmail3" placeholder="Name">
						  </div>
						  </div>
                           <div class="form-group row">
						  <label for="inputEmail3" class="col-sm-3 col-form-label">Company Name</label>
						  <div class="col-sm-9">
							<input type="text" class="form-control" id="inputEmail3" placeholder="Company Name">
						  </div>
						  </div>
                         <div class="form-group row">
						  <label for="inputEmail3" class="col-sm-3 col-form-label">Birth of Date</label>
						  <div class="col-sm-9">
							<input type="date" class="form-control" id="inputEmail3" placeholder="Birth of Date">
						  </div>
						  </div>
                          <div class="form-group row">
						  <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
						  <div class="col-sm-9">
							<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						  </div>
						  </div>
						<div class="form-group row">
						  <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
						  <div class="col-sm-9">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						  </div>
						</div>
						<div class="form-group row">
						  <div class="text-right col-sm-12">
							<button type="submit" class="btn btn-success">Registration</button>
						  </div>
						</div>
					  </form>
					 </div>
			</div>
		</div>
        </div>
    </div>
</section>
<?php 
	include("footer.php");
?>


