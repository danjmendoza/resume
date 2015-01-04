var app = angular.module('danjmendoza',['ngResource']);

app.factory('Job', function($resource){
	return $resource("/v1/jobs/:id");
});

