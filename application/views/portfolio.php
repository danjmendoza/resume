<div id="folio" class="container tab">
	<div class="row">
		<div class="col-md-12">
			<ul class="categories">
				<!-- <li><a href="#filters" rel="github">Github Projects</a></li> -->
				<li><a href="#filters" rel="kohana">Kohana</a></li>
				<li><a href="#filters" rel="drupal">Drupal</a></li>
				<li><a href="#filters" rel="wordpress">Wordpress</a></li>
				<!-- <li><a href="#filters" rel="jquery">jQuery</a></li> -->
			</ul>
		</div>
	</div>
	<div class="row thumbs">
		<?php foreach ($sites as $site) { ?>
			<div class="col-md-3 item <?php echo $site->categories(); ?>">
				<a href="<?php echo $site->url(); ?>" target="_blank" class="thumbnail">
					<img src="/img/portfolio/<?php echo $site->image(); ?>" alt="...">
				</a>
				<?php echo $site->title(); ?>
			</div>
		<?php } ?>
	</div>
</div>