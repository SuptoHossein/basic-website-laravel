
<!DOCTYPE html>
<html>
<head>
	<title>Design a full template by bootsrap</title>
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/customize.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- Header Section -->
	<section class="header">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
				<a href="" class="navbar-brand"><img src="{{ asset('frontend') }}/image/logo.png" style="height: 50px;"></a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
					<div class="navbar-nav popular">
						<a href="index.html" class="nav-item nav-link active">Home</a>
						<div class="nav-item dropdown">
							<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
							<div class="dropdown-menu" style="background: #BADDFB;">
								<a href="aboutus.html" class="dropdown-item">About Us</a>
								<a href="" class="dropdown-item">Mission</a>
								<a href="" class="dropdown-item">Vision</a>
							</div>
						</div>
						<a href="" class="nav-item nav-link">News and Event</a>
						<a href="contact.html" class="nav-item nav-link">Contact Us</a>
						<a href="" class="nav-item nav-link">Login</a>
					</div>
					<div class="navbar-nav">
						<form class="form-inline">
							<div class="input-group">
								<input type="text" name="search" placeholder="Search">
								<div class="input-group-append">
									<button type="button" class="btn btn-secondary">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</section>
	<!-- Slider Section -->
    @include('layouts.slider')


    @yield('content')


	<!-- Footer Part -->
	<section class="footer_part">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h4 style="color: white">Contact Us</h4>
					<p style="color: white">Address: Notun bazar,Gulshan-Dhaka, Mobile: 01928511049, Email: asadullahkpi@gmail.com</p>
				</div>
				<div class="col-md-4">
					<h4 style="color: white">Follow Us</h4>
					<div class="social">
						<ul>
							<li><a href="https://www.facebook.com/popularsoftbd/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href=""><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCiO1LbMZH6E4vSEoaqS5erA/playlists" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p style="color: white;padding: 50px 0px 10px 0px;">
						Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> @ Popularsoft
					</p>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="gotoup">
					<img src="{{ asset('frontend') }}/image/scrl.jpg" style="width: 40px; height: 40px;">
				</div>
			</div>
		</div>
	</div>

	<!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if($(this).scrollTop()>300){
					$('.gotoup').fadeIn();
				}else{
					$('.gotoup').fadeOut();
				}
			});
			$('.gotoup').click(function(){
				$('html,body').animate({scrollTop:0},1000);
			});
		});
	</script>
	<script src="{{ asset('frontend') }}/js/popper.min.js"></script>
	<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
</body>
</html>
