
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



var App = angular.module('App', [] );

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

    $scope.$emit('LOAD')
    $http.get('/api/site/v1/showListProcess').

        success(function(data) {
        $scope.processos = data;
        $scope.$emit('UNLOAD')
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



 App. controller('appController',['$scope',function($scope){
        $scope.$on('LOAD',function(){$scope.loading=true});
        $scope.$on('UNLOAD',function(){$scope.loading=false});
    }])




/*
<!DOCTYPE html>
<html lang="en" ng-app="APP">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link data-require="bootstrap-css@*" data-semver="3.0.0" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    <script data-require="angular.js@*" data-semver="1.2.0-rc2" src="http://code.angularjs.org/1.2.0-rc.2/angular.js"></script>
  </head>


  <body ng-controller="appController">
    <div class="alert alert-info" ng-show="loading">Loading ...</div>
    <div ng-controller="myController">
      <ul>
        <li ng-repeat="person in people">
                  {{person.fname}}
              </li>
      </ul>
    </div>


    <script>

    angular.module('APP',[]).

    controller('myController',['$scope','$http',function($scope,$http){
        $scope.$emit('LOAD')
        $http.jsonp('http://filltext.com/?rows=10&delay=2&fname={firstName}&callback=JSON_CALLBACK')
        .success(function(data){
            $scope.people=data
            $scope.$emit('UNLOAD')
        })
    }]).
    controller('appController',['$scope',function($scope){
        $scope.$on('LOAD',function(){$scope.loading=true});
        $scope.$on('UNLOAD',function(){$scope.loading=false});
    }])
    </script>
  </body>
</html>

*/