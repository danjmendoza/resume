var app = angular.module('app',[]);

app.controller('JobController', function($http, $scope){
	
	$http.get('/v1/jobs').success(function(response){
		$scope.jobs = response;
		console.log(response);
	});

})

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