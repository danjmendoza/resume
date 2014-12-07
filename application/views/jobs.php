<div class="container">
	<div class="row">
		<div class="btn-group">
			<button type="button" class="btn btn-default">Add Job</button>
		</div>
	</div>
	<div class="row jobs">
		<div class="col-md-6 add-form">
			<h2>Add New Job</h2>
			<div class="form-group col-md-6">
				<input type="job-title" class="form-control" id="job-title" placeholder="Job Title">
			</div>
			<div class="form-group col-md-6">
				<input type="job-url" class="form-control" id="job-url" placeholder="Job URL">
			</div>
			<div class="form-group col-md-6">
				<input type="company-title" class="form-control" id="company-title" placeholder="Company Title">
			</div>
			<div class="form-group col-md-6">
				<input type="company-website" class="form-control" id="company-website" placeholder="Company Website">
			</div>
			<div class="form-group col-md-6">
				<select name="job-url" class="form-control">
					<option value="Not Sent">Not Sent</option>
					<option value="App Sent">App Sent</option>
					<option value="Dead End">Dead End</option>
				</select>
			</div>
		</div>
		<?php foreach ($jobs as $job) { ?>
			<div class="col-md-6">
				<h2><a href="<?php echo $job->link(); ?>"><?php echo $job->title(); ?></a> 
				<small><a href="<?php echo $job->company()->website(); ?>"><?php echo $job->company()->title(); ?></a></small></h2>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle <?php echo $job->progress('button'); ?>" data-toggle="dropdown" aria-expanded="false"><?php echo $job->progress(); ?> <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Not Sent</a></li>
						<li><a href="#">App Sent</a></li>
						<li><a href="#">Dead End</a></li>
					</ul>
				</div>
			</div>
		<?php } ?>
	</div>
</div>