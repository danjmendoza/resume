<!doctype html>
<html lang="en" ng-app="danjmendoza">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Dan Mendoza, PHP Developer, Architect, Exeter, California.">
		<meta name="keywords" content="PHP, Kohana, Exeter, CA, Wordpress, Exeter, California, Drupal, jQuery, CA">
		<meta name="author" content="Dan Mendoza">

		<title>Dan Mendoza, Programmer / architect / developer</title>

		<!-- load font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="/assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">

		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

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
						<div class="sprite illo"><img src="/assets/img/dan.png"></div>
						<h4>Founder</h4>
						<h4>ValleyDS Web Design</h4>
					</div>

					<div class="col-md-5">
						<h1>Dan Mendoza</h1>
						<p>Programmer / architect / developer</p>
						<p>danjmendoza.com</p>
						<p><a href="#" data-toggle="modal" data-target="#contact"><span class="sprite comment"></span>Say Hi</a></p>
					</div>

					<div class="col-md-4 text-right">
						<h3>Flexible. Extendible. Structure.</h3>
						<br>
						<a href="/" class="btn btn-alex toggle <?php echo $nav == '/' ? 'active' : ''; ?>" rel="#bio">Bio</a>
						<a href="/portfolio" class="btn btn-alex toggle  <?php echo $nav == 'portfolio' ? 'active' : ''; ?>" rel="#folio">Portolio</a>
					</div>

				</div>

			</div>
		</div>
		
		<?php echo $content; ?>

		<div class="container">
			<hr>
			<footer>
				<p>&copy; Dan Mendoza, 2006 - <?php echo date('Y'); ?></p>
			</footer>
		</div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.7/angular.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.3/angular-resource.min.js"></script>
		<script src="/app/app.module.js"></script>
		<script src="/app/components/jobs/jobs-controller.js"></script>
		<script>
			$(document).ready(function(){
				$('.toggle').click(function(){
					$('.toggle').removeClass('active');
					$(this).addClass('active');
					var tab = $(this).attr('rel');
					$('.tab').hide();
					$(tab).show();
				});

				$('.form').submit(function(e){
					var form_data = $(this).serialize();
					$('.modal-footer .active').val('sending...');
					$.post('/contact/send.php', form_data, function(data){
						if (data.success == true)
						{
							$('.modal-footer').html(data.message);
							window.setTimeout(function(){
								$('#contact').modal('hide');
								$('.modal-footer .active').val('Submit');
								$('.modal-body .form-control').val('');
							}, 1400);

							
						} else {
							$('.response').html(data.message);
							$('.send').removeClass('disabled').attr('value', 'Send');
						}
					}, 'json');
					e.preventDefault();
				});

				/**
				 * Filters portfolio page. 
				 */
				$('.categories a').click(function(){
					$('.categories a').removeClass('active');
					$(this).addClass('active');
					var filter = $(this).attr('rel');
					console.log(filter);
					$('.thumbs .item').hide().filter("." + filter).fadeIn();
					return false;
				});
				
				// find the div.fade elements and hook the hover event
				$('div.trans').hover(function() {
					// on hovering over, find the element we want to fade *up*
					var fade = $('> div', this);

					// if the element is currently being animated (to a fadeOut)...
					if (fade.is(':animated')) {
						// ...take it's current opacity back up to 1
						fade.stop().fadeTo(250, 1);
					} else {
						// fade in quickly
						fade.fadeIn(250);
					}
				}, function () {
					// on hovering out, fade the element out
					var fade = $('> div', this);
					if (fade.is(':animated')) {
						fade.stop().fadeTo(2000, 0);
					} else {
						// fade away slowly
						fade.fadeOut(2000);
					}
				});
			});
		</script>
	</body>
</html>