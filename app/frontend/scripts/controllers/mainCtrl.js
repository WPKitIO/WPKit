'use strict';

angular.module('wpKit')
.controller('mainCtrl', function ($scope, mainFactory) {

  mainFactory.getData( function(data) {
  	$scope.pageInformation = data.page_information;
  	$scope.pageContent     = data.page_content;
  }, function(err){
    console.error(err);
  });
});
