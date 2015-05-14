'use strict';


var modules = angular.module('RestService',[]);

modules.factory('Service',function($http){
    return {
        destroy: function (id,url) {
            console.log(url+id);
            //return $http.delete(url+id);
        }
    }
});




var App = angular.module('App', []);


App.factory('RestService',function($http){
    return {
        destroy: function (id,url) {
            console.log(url+id);
            //return $http.delete(url+id);
        }
    }
});


App.controller('GetItemController', function($scope,RestService) {
         $scope.deleteItem = function(id,url){ RestService.destroy(id,url);  }
});

App.controller('ProcessListCtrl', ['$scope', '$http', function($scope, $http) {
    $http.get('/api/site/v1/showListProcess').success(function(data) {
        $scope.processos = data;
    });
    $scope.orderProp = 'ficha';
}]);

App.controller('ShowSocialProfile', ['$scope', '$http', function($scope, $http) {
    $http.get('/api/site/v1/showSocialProfile').success(function(data) {
        $scope.social = data;
    });

}]);

App.controller('ShowSocialRecents', ['$scope', '$http', function($scope, $http) {
    $http.get('/api/site/v1/showSocialRecents/22').success(function(data) {
        $scope.recents = data;
    });
}]);



