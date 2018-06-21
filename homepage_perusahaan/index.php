<?php 
	include("header.php");
	include("menu-employers.php");
?>
 <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('hp/img/banner1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><a href="#">Slider One</a></h3>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('hp/img/banner4.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><a href="#">Slider Two</a></h3>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('hp/img/banner3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><a href="#">Slide Three</a></h3> 
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <div id="logon-employers">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-5  text-right card card-employers">
					<div class="col-md-12 card-atas">
						<h5 class="text-center"> Welcome Back, Please Log In </h5>
					</div>
                    <hr>
					<div class="card-block logins">
					 <form>
						<div class="form-group row">
						  <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
						  <div class="col-sm-8">
							<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
						  <div class="col-sm-8">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						  </div>
						</div>
						<div class="form-group row">
						  <div class="text-right col-sm-12">
							<button type="submit" class="btn btn-success">Log in</button>
						  </div>
						</div>
					  </form>
					 </div>
			</div>
                <div class="col-md-5   card card-employers" >
					<div class="col-md-12 card-atas">
                        <h5 class="text-center"> Registration </h5></br>
                        <p><strong>How to registration as Employers Member?</strong></br>
                        You can register by filling the registration form <a href="registration-employers.php">here</a></p>
                        <p><strong>How to reset the password?</strong></br>
                        You can reset your password by following the steps <a href="registration-employers.php">here</a></p>
					</div>
                    <hr>
</div>
			</div>
            </div>
        </div>

	<!-- Page Content -->
    <div id="services">
        <div class="container service">
            <div class="text-center">
                <h2> <img src="fav-white.png"> Our  Services</h2>
                <div class="row">
                    <div class="col logo-service">
                        <i class="fa fa-users"></i>
                        <h4>Publication of vacancies</h4>
                    </div>
                    <div class="col logo-service">
                        <i class="fa fa-child"></i>
                        <h4>Activity in recruiting applicants</h4>
                    </div>
                    <div class="col logo-service">
                        <i class="fa fa-universal-access"></i>
                        <h4>Easy to recruit applicants</h4>
                    </div>
                </div>
            </div>
          
        </div>
    </div>

<!--
<div id="faq">
        <div class="container faqs">
            <div class="text-center">
                <h2> <img src="fav-white.png"> FAQ</h2>
                <div class="row">
                    <div class="col logo-service">
                        <i class="fa fa-users"></i>
                        <h4>Publication of vacancies</h4>
                    </div>
                    <div class="col logo-service">
                        <i class="fa fa-child"></i>
                        <h4>Activity in recruiting applicants</h4>
                    </div>
                    <div class="col logo-service">
                        <i class="fa fa-universal-access"></i>
                        <h4>Easy to recruit applicants</h4>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
-->
<?php 
	include("footer.php");
?>
