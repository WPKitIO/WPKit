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
  })
  // Manufacturers Page
  .when('/manufacturers/', {
    templateUrl: 'html/views/manufacturers.html',
    controller: 'manufacturersCtrl'
  })
  // Brand Page
  .when('/manufacturers/:brand', {
    templateUrl: 'html/views/brand.html',
    controller: 'brandCtrl'
  })
  // Car Page
  .when('/:brand/:car', {
    templateUrl: 'html/views/car.html',
    controller: 'carCtrl'
  });

  $locationProvider.html5Mode(true);
});
