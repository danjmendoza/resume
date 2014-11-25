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