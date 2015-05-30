(function () {

  'use strict';

  var wpKit = angular.module('wpKit');

  wpKit.controller('brandCtrl', function ($scope, brandFactory, $routeParams) {

    $scope.brand = $routeParams.brand;

    brandFactory.getData(
      { brand: $scope.brand },
      function(data) {
        $scope.pageInformation = data.page_information;
      	$scope.pageContent     = data.page_content;
    }, function(err){
      console.error(err);
    });
  });
})();
