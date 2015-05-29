(function () {
  'use strict';

  var wpKit = angular.module('wpKit', [
    // Angular Resource
    'ngResource',
    // Angular Router
    'ngRoute',
    // Angular Sanitize
    'ngSanitize'
  ]);

  // Set up the Routes
  wpKit.config( function($routeProvider, $locationProvider) {
    $routeProvider
    // Index Page
    .when('/', {
      templateUrl: 'html/views/main.html',
      controller: 'mainCtrl'
    });

    $locationProvider.html5Mode(true);
  });

})();
