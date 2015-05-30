'use strict';

angular.module('wpKit')
.factory('manufacturersFactory', function ($resource, CONFIG) {
  return $resource('http://' + CONFIG.apiBaseUrl + '/manufacturers', { callback: 'JSON_CALLBACK', slug: '@slug' }, {
    getData: {method: 'JSONP', params: { slug: ''} }
  });
});
