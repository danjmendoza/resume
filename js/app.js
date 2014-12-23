var app = angular.module('app',['ngResource']);

app.factory('Job', function($resource){
	return $resource("/v1/jobs/:id");
});

app.controller('JobsController', function($http, $scope, Job){
	Job.query(function(jobs){
		$scope.jobs = jobs;
	});
});

app.controller('JobController', function($http, $scope){
	$scope.archive_job = function()
	{
		var row = this;
		$http.put('/v1/jobs/'+$scope.job.id, $scope.job)
			.success(function(response){
				if (response.error == false)
				{
					$scope.jobs.splice(row.$index, 1);
				}
				$scope.message = response.message;
			});
	};

	$scope.update_job = function()
	{
		$http.put('/v1/jobs/'+$scope.job.id, $scope.job)
			.success(function(response){
				if (response.error == false)
				{

				}
				$scope.message = response.message;
			});
	}
});

app.controller('AddJobController', function($http, $scope){
	
	$scope.addForm = false;
	$scope.formData = {}
	$scope.formData.status = 'active';
	$scope.add_job = function()
	{
		$http.post('/v1/jobs', $.param($scope.formData))
			.success(function(response){
				$scope.message = response.message;
				if (response.error == false)
				{
					console.log(response.job);
				}
				else
				{
					$scope.addForm = false;
				}

			});
	}
})