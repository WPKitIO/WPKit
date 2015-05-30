'use strict';

angular.module('wpKit')
.controller('carCtrl', function ($scope, carFactory, $routeParams) {

  $scope.brand = $routeParams.brand;
  $scope.car = $routeParams.car;

  carFactory.getData(
    { car: $scope.car },
    function(data) {
      $scope.pageInformation = data.page_information;
    	$scope.car     = data.car;
  }, function(err){
    console.error(err);
  });
});
