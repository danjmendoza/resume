app.controller('jobs-controller', function($http, $scope, Job){
	
	/**
	 * Default Message to be shown when job page loads
	 * @type {String}
	 */
	$scope.message = 'Welcome To The Job Board';

	/**
	 * To display or not display the add job form on page load
	 */
	$scope.addForm = false;

	/**
	 * Placeholder area for holding the form data and default values.
	 */
	$scope.formData = {
		status: 'active'
	}

	/**
	 * Loads the initial set of jobs to be displayed.
	 */
	Job.query(function(jobs){
		$scope.jobs = jobs;
	});

	/**
	 * Handles the add new job form submission process. Pulls
	 * data from the job form and sets the submission header
	 * to mimic that of an actual form submission.
	 * Submits data to the API: POST /v1/jobs
	 *
	 * @todo  Form validation
	 */
	$scope.add_job = function() {
		$http({
			method: 'POST',
			url: '/v1/jobs',
			data: $.param($scope.formData),
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).success(function(response){
			// Success or Fail show the returned message.	
			$scope.message = response.message;
			if (response.error == false)
			{
				// Reset the job form
				$scope.jobForm.$setPristine();

				// Reset the form data
				$scope.formData = null;
				$scope.formData = {};

				// Add new job into list
				$scope.jobs.splice(0, 0, response.job);

				// Hide job form
				$scope.addForm = false;
			}
			else
			{
				// There was an error, keep form visiible.
				$scope.addForm = true;
			}
		});
	};

	/**
	 * Tell API to archive the job.
	 * Use: PUT /v1/jobs/{job_id} with data fields
	 * 
	 * @param  {integer} index [Array id allows for pulling of correct job from list]
	 */
	$scope.archive_job = function(index) {
		// Set the status of the job to inactive
		$scope.jobs[index].status = 'inactive';

		// Seperate job from array for passing to API
		var job = $scope.jobs[index];
		
		// Send request to update the job.
		$http.put('/v1/jobs/'+job.id, job)
			.success(function(response){
				if (response.error == false)
				{
					// Remove job from list.
					$scope.jobs.splice(index, 1);
				}
				// Set message
				$scope.message = response.message;
			});
	};

	/**
	 * Update job through api.
	 */
	$scope.update_job = function(index) {
		var job = $scope.jobs[index];
		$http.put('/v1/jobs/'+job.id, job)
			.success(function(response){
				// display message
				$scope.message = response.message;
			});
	};

	/**
	 * Delete the job from the application. Non-recoverable.
	 * Use: DELETE /v1/jobs/{job_id}
	 */
	$scope.delete_job = function(index) {
		job = $scope.jobs[index];
		$http.delete('/v1/jobs/'+job.id)
			.success(function(response){
				if (response.error == false) {
					// Remove job from listing
					$scope.jobs.splice(index, 1);
				}
				// Display message
				$scope.message = response.message;
			});
	}
});