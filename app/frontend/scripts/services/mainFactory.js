(function () {

  'use strict';

  var wpKit = angular.module('wpKit');

  wpKit.factory('mainFactory', function ($resource, CONFIG) {
    return $resource('http://' + CONFIG.apiBaseUrl, { callback: 'JSON_CALLBACK', slug: '@slug' }, {
      getData: {method: 'JSONP', params: { slug: ''} }
    });
  });

})();
