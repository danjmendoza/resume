<div class="container">
	<div class="row">
		<div class="col-md-6 add-form" ng-controller="AddJobController">
			<button class="btn btn-success" ng-click="addForm = !addForm">Add New Job</button><br><br>
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
					<textarea type="coverletter" ng-model="formData.coverletter" class="form-control" id="coverletter" placeholder="Coverletter"></textarea>
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
	<div class="row jobs" ng-controller="JobsController">
		<div class="col-md-6" ng-repeat="job in jobs" ng-controller="JobController">
			<form ng-submit="update_job()">
				<h2><a href="{{job.link}}">{{job.title}}</a> 
				<small><a href="{{job.company.website}}">{{job.company.title}}</a></small></h2>
				<div class="form-group">
					<select name="job-url" class="form-control" ng-model="job.progress">
						<option value="Not Sent" selected>Not Sent</option>
						<option value="App Sent">App Sent</option>
						<option value="Dead End">Dead End</option>
					</select>
				</div>
				<input type="submit" class="btn btn-success" value="Update">
				<button class="btn btn-warning" ng-click="archive_job()">Archive</button>
				<button class="btn btn-danger" ng-click="delete_job()">Delete</button>
			</form>
		</div>
	</div>
</div>