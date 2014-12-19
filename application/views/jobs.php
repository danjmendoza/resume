<div class="container">
	<div class="row">
		<div class="col-md-6 add-form" ng-controller="AddJobController">
			<button class="btn btn-success" ng-click="addForm = !addForm">Add New Job</button>
			<form ng-submit="add_job()" ng-show="addForm">
				<input type="hidden" ng-value="formData.status">
				<div class="form-group col-md-6">
					<input type="job-title" ng-model="formData.title" class="form-control" id="job-title" placeholder="Job Title">
				</div>
				<div class="form-group col-md-6">
					<input type="job-url" ng-model="formData.link" class="form-control" id="job-url" placeholder="Job URL">
				</div>
				<div class="form-group col-md-6">
					<input type="company-title"  ng-model="formData.company.title" class="form-control" id="company-title" placeholder="Company Title">
				</div>
				<div class="form-group col-md-6">
					<input type="company-website" ng-model="formData.company.website" class="form-control" id="company-website" placeholder="Company Website">
				</div>
				<div class="form-group col-md-6">
					<select name="job-url" class="form-control" ng-model="formData.progress">
						<option value="Not Sent" selected>Not Sent</option>
						<option value="App Sent">App Sent</option>
						<option value="Dead End">Dead End</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<input type="submit" class="btn btn-success" value="Add Job">
				</div>
			</form>
		</div>
	</div>
	<div class="row jobs" ng-controller="JobController">
		<div class="col-md-6" ng-repeat="job in jobs">
			<h2><a href="{{job.link}}">{{job.title}}</a> 
			<small><a href="{{job.company.webiste}}">{{job.company.title}}</a></small></h2>
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown" aria-expanded="false">{{job.progress}} <span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Not Sent</a></li>
					<li><a href="#">App Sent</a></li>
					<li><a href="#">Dead End</a></li>
				</ul>
			</div>
		</div>

	</div>
</div>