<!DOCTYPE HTML>
<html>

<head>
	<title>Ship Industry A Industrial Category Flat Bootstrap Responsive Website Template | Contact :: W3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Ship Industry Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- font files -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css" media="all" rel="stylesheet"
	    type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!-- /font files -->
	<!-- css files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/typo.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/serv.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/nav.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- /css files -->
	<!-- js files -->
	<script src="js/modernizr.custom.js"></script>
	<!-- /js files -->
</head>

<body>
	<!--NAV BAR-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
				    aria-expanded="false">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
     			 </button>
				<a class="navbar-brand headerbar-logo" href="index.php"><img src="images/princess-logo_header.svg" alt="website logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</nav>
	<!--END OF NAV BAR-->
	<!-- MENU BAR-->
	<nav class="navbar navbar-inverse menu">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="planCruise.php">Plan a Cruise</a></li>
				<li><a href="career.php">Careers</a></li>
				<li><a href="onboardship.php">Onboard Our Ships</a></li>
				<li><a href="destination.php">Destinations</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	</nav>
	<!-- END OF MENU BAR-->
	<section class="login">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="text-center w3layouts w3 w3l w3ls">SIGN IN OR CREATE AN ACCOUNT</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-12 col-xs-12" id="login">
					<form class="container form-horizontal">
						<h4>Login</h4>
						<div class="input-group col-md-3 col-sm-5 col-xs-8">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email">
						</div>
						<div class="input-group col-md-3 col-sm-5 col-xs-8">
							<label for="pwd">Password</label>
							<input type="password" class="form-control" id="pwd">
						</div><br>
						<div>
							<label><a href="#">Forget Password?</a></label>
						</div>
						<div class="input-group">
							<div class="checkbox">
								<label><input type="checkbox" value="">Remember me</label>
							</div>
						</div>
						<div class="login">
							<a href="#" class="btn btn-info btn-mg" role="button">Login</a>
						</div>
					</form>
				</div>
				<div class="col-lg-6 col-sm-12 col-xs-12" id="reg">
					<h4>CREATE AN ACCOUNT</h4>
					<ul>
						<li>Save Money</li>
						<li>Get Personalized Offers</li>
						<li>Stay Informed</li>
						<li>Access the Circle Center</li>
					</ul>
					<div class="login green">
						<a href="#" class="btn btn-info btn-mg" role="button">Login</a>
					</div>
				</div>
			</div>
		</div>
	</section>







	<!-- /footer section -->
	<!-- back to top -->
	<a href="#0" class="cd-top">Top</a>
	<!-- /back to top -->
	<!-- js files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<!-- js for back to top -->
	<script src="js/top.js"></script>
	<!-- /js for back to top -->
	<!-- js for navigation -->
	<script>
		//  The function to change the class
		var changeClass = function (r, className1, className2) {
			var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
			if (regex.test(r.className)) {
				r.className = r.className.replace(regex, ' ' + className2 + ' ');
			} else {
				r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"), ' ' + className1 + ' ');
			}
			return r.className;
		};

		//  Creating our button in JS for smaller screens
		var menuElements = document.getElementById('menu');
		menuElements.insertAdjacentHTML('afterBegin',
			'<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>'
		);

		//  Toggle the class on click to show / hide the menu
		document.getElementById('menutoggle').onclick = function () {
			changeClass(this, 'navtoogle active', 'navtoogle');
		}

		// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
		document.onclick = function (e) {
			var mobileButton = document.getElementById('menutoggle'),
				buttonStyle = mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null)
				.display;

			if (buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' +
					mobileButton.className + ' ')) {
				changeClass(mobileButton, 'navtoogle active', 'navtoogle');
			}
		}
	</script>
	<!-- /js for navigation -->
	<!-- /js files -->
</body>

</html>