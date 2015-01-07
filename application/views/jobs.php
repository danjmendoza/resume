<div class="container" ng-controller="jobs-controller">
	<div class="row">
		<div class="col-md-12">
			{{message}}
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 add-form">
			<button class="btn btn-success" ng-click="addForm = !addForm">Add New Job</button><br><br>
			<form name="jobForm" ng-submit="add_job()" ng-show="addForm">
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
	<div class="row jobs">
		<div class="col-md-4" ng-repeat="job in jobs" ng-include src="'/app/components/jobs/job-view.html'"></div>
	</div>
</div>