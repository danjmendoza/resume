/**
 * Initialize the app and make ngResource available.
 * @type {[type]}
 */
var app = angular.module('danjmendoza',['ngResource']);

/**
 * Load the job resource
 */
app.factory('Job', function($resource){
	return $resource("/v1/jobs/:id");
});

