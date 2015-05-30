'use strict';

angular.module('wpKit')
.controller('manufacturersCtrl', function ($scope, manufacturersFactory) {

  manufacturersFactory.getData( function(data) {
  	$scope.pageInformation = data.page_information;
  	$scope.pageContent     = data.page_content;
  }, function(err){
    console.error(err);
  });
});
