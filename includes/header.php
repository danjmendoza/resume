<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Dan Mendoza, UX designer, Interaction designer, Irvine, California.">
		<meta name="keywords" content="UX design, Irvine, CA, Interaction designer, Irvine, California, UX designer, Orange County, CA, freelance UX designer, Irvine, CA.">
		<meta name="author" content="Dan Mendoza">

		<title>Dan Mendoza, Programer / architect / developer</title>

		<!-- load font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57100625-1', 'auto');
	  ga('send', 'pageview');

	</script>
		<!-- Modal -->
		<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header btn-lg">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Say Hi</h4>
					</div>
					<form action="/contact/send" method="POST" class="form">
						<div class="modal-body">
							<span style="display:none;">
								<input type="text" name="subject" value="" class="subject" />
							</span>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" value="" placeholder="" class="form-control" />
							</div>
							<div class="form-group">
								<label for="email">E-Mail</label>
								<input type="text" name="email" value="" placeholder="" class="form-control" />
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<textarea name="message" placeholder="" class="form-control"></textarea>
							</div>
							<div class="response"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-alex" data-dismiss="modal">Cancel</button>
							<input type="submit" class="btn btn-alex active" value="Submit" />
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron">
			<div class="container">
				<div class="row">

					<div class="col-md-3 text-center">

						<div class="sprite illo"><img src="/img/dan.png"></div>
						<h4>Founder</h4>
						<h4>ValleyDS Web Design</h4>
					</div>

					<div class="col-md-5">
						<h1>Dan Mendoza</h1>
						<p>Programer / architect / developer</p>
						<p>danjmendoza.com</p>
						<p><a href="#" data-toggle="modal" data-target="#contact"><span class="sprite comment"></span>Say Hi</a></p>
					</div>

					<div class="col-md-4 text-right">
						<h3>Flexible. Extendible. Structure.</h3>
						<!-- <br>
						<a href="#" class="btn btn-alex toggle active" rel="#bio">Bio</a>
						<a href="#" class="btn btn-alex toggle" rel="#folio">Folio</a> -->
					</div>

				</div>

			</div>
		</div>