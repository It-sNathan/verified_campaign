<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/ico" href="https://cdn.mypanel.link/m8x6dz/kkemlcwq59thdnco.ico">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	@stack('title')
</head>
<body>
<header class="header-desktop">
	<nav id="navbar" class="mobile-nav-toggle d-none d-lg-block py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-4 nav-logo">
                    <a href="/">
					<img src="https://cdn.mypanel.link/m8x6dz/ayprqo756mmg8dj2.png" alt="verified-campaign.net"></a>
				</div>
				<div class="col-md-8 nav-links">
					<ul>
						<li class="active"><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{route('services')}}">Services</a></li>
						<li><a href="#">Trading Signal</a></li>
						<li><a href="#">Campaigns</a></li>
						<li><a href="#">Faqs</a></li>
						<li><a href="{{url('/')}}/signup">Join us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

</header>