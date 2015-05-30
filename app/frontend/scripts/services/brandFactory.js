'use strict';

angular.module('wpKit')
.factory('brandFactory', function ($resource, CONFIG) {
  return $resource('http://' + CONFIG.apiBaseUrl + '/manufacturers/:brand', { callback: 'JSON_CALLBACK', brand: '@brand' }, {
    getData: {method: 'JSONP', params: { brand: ''} }
  });
});
