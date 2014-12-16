var app = angular.module('app',[]);

app.controller('JobController', function($http, $scope){
	
	$http.get('/jobs?json=dev').success(function(response){
		$scope.jobs = response;
		console.log(response);
	});

})

app.controller('AddJobController', function($http, $scope){
	
	$scope.formData = {}

	$scope.add_job = function()
	{
		$http.post('/jobs?json=dev', $.param($scope.formData))
			.success(function(response){
				console.log(response);
				$scope.message = response.message;
			});
	}
})