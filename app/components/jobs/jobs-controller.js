app.controller('jobs-controller', function($http, $scope, Job){
	$scope.message = 'Welcome To The Job Board';
	$scope.addForm = false;
	$scope.formData = {}
	$scope.formData.status = 'active';

	Job.query(function(jobs){
		$scope.jobs = jobs;
	});

	$scope.add_job = function() {
		$http({
			method: 'POST',
			url: '/v1/jobs',
			data: $.param($scope.formData),
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).success(function(response){
				$scope.message = response.message;
				if (response.error == false)
				{
					$scope.jobForm.$setPristine();
					$scope.formData = null;
					$scope.formData = {};
					$scope.jobs.splice(0, 0, response.job);
					$scope.addForm = false;
				}
				else
				{
					$scope.addForm = true;
				}
			});
	};

	$scope.archive_job = function(index) {
		$scope.jobs[index].status = 'inactive';
		var job = $scope.jobs[index];
		
		$http.put('/v1/jobs/'+job.id, job)
			.success(function(response){
				if (response.error == false)
				{
					$scope.jobs.splice(index, 1);
				}
				$scope.message = response.message;
			});
	};

	$scope.update_job = function(index) {
		var job = $scope.jobs[index];
		$http.put('/v1/jobs/'+job.id, job)
			.success(function(response){
				if (response.error == false)
				{

				}
				$scope.message = response.message;
			});
	};
	$scope.delete_job = function(index) {
		job = $scope.jobs[index];
		$http.delete('/v1/jobs/'+job.id)
			.success(function(response){
				if (response.error == false) {
					$scope.jobs.splice(index, 1);
				}
				$scope.message = response.message;
			});
	}
});