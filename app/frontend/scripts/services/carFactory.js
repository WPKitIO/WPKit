(function () {

  'use strict';

  var wpKit = angular.module('wpKit');

  wpKit.factory('carFactory', function ($resource, CONFIG) {
    return $resource('http://' + CONFIG.apiBaseUrl + '/cars/:car', { callback: 'JSON_CALLBACK', car: '@car' }, {
      getData: {method: 'JSONP', params: { car: ''} }
    });
  });

})();
