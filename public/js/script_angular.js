 var home_url = $("#home_url").val( );
 var app = angular.module('userApp',['ngMaterial','ngRoute'], function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
 });

 app.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {

        $routeProvider/*.when('/testhome', {
            templateUrl: home_url + '/test1',
            controller: 'singlePageTest1'
        })
        .when('/test1', {
          templateUrl: home_url + '/test1',
          controller: 'singlePageTest1'
        })*/

        .when('/view_list_order', {
            templateUrl: home_url + '/view_list_order',
            controller: 'singlePageTest2'
        })
        .when('/test3', {
            templateUrl: home_url + '/test3',
            controller: 'singlePageTest3'
        })

        .otherwise({
            templateUrl: home_url + '/test1',
            controller: 'singlePageTest1'          
        });          
        $locationProvider.html5Mode(true);
    }
]);  // config để chạy single page 
 app.controller('singlePageTest1', function($scope, $http){

  $http({
      url : home_url+"/testAngular",
      method: "GET"
    }).then(function(response){
      $scope.nhieunguoi = response.data.data;
    }, 
    function(response){
    });

 });
 app.controller('singlePageTest2', function($scope, $http, $mdToast){
  $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
  $http({
      url : home_url+"/list_order",
      method: "GET"
    }).then(function(response){
      $scope.nhieuorder = response.data.data;
    }, 
    function(response){
    });

  $scope.changeDisplay = function (x){
    x.hienra = !x.hienra;
  }

  $scope.saveEdit = function (order){
    order.hienra = !order.hienra;
      var data = $.param({
        id:order.id,
        order_code:order.order_code,
        user_name:order.name,
        email:order.email,
        phone:order.phone

      });

      $http({
        url: home_url+'/edit_order',
        data: data,
        method: "POST"
      }).then(function(response){
        console.log(response);
        displayToast($scope,$mdToast);
      },
      function(response){
        console.log(response);
      });
  }

 });
 app.controller('singlePageTest3', function($scope, $http){

  $http({
      url : home_url+"/testAngular",
      method: "GET"
    }).then(function(response){
      $scope.nhieunguoi = response.data.data;
    }, 
    function(response){
    });

 });

 app.controller('getUserListController',  function($scope, $http, $mdToast){

    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

    $http({
      url : home_url+"/testAngular",
      method: "GET"
    }).then(function(response){
      $scope.nhieunguoi = response.data.data;
    }, 
    function(response){
    });
    
  	$scope.changeDisplay = function (x){
      x.hienra = !x.hienra;
    } /*end changeDisplay*/
    
  	$scope.saveEditedUser = function(user){
  		user.hienra = !user.hienra;
      var data = $.param({
        id:user.id,
        username:user.name,
        email:user.email

      });

      $http({
        url: home_url+'/postSaveUserEdited',
        data: data,
        method: "POST"
      }).then(function(response){
        console.log(response);
        displayToast($scope,$mdToast);
      },
      function(response){
        console.log(response);
      });


  	} /*end saveEditedUser*/
   

 })

 function displayToast($scope,$mdToast){
  
  var last = {
        bottom: false,
        top: false,
        left: false,
        right: true
      };

      $scope.toastPosition = angular.extend({}, last);

      $scope.getToastPosition = function() {
        sanitizePosition();

        return Object.keys($scope.toastPosition)
        .filter(function(pos) {
          return $scope.toastPosition[pos];
        }).join(' ');
      };

      function sanitizePosition() {
        var current = $scope.toastPosition;

        if (current.bottom && last.top) {
          current.top = false;
        }
        if (current.top && last.bottom) {
          current.bottom = false;
        }
        if (current.right && last.left) {
          current.left = false;
        }
        if (current.left && last.right) {
          current.right = false;
        }

        last = angular.extend({}, current);
      }

      $scope.showSimpleToast = function() {
        var pinTo = $scope.getToastPosition();
        $mdToast.show(
          $mdToast.simple()
          .textContent('Update Successfully!')
          .position(pinTo)
          .hideDelay(3000));
      };
      $scope.showSimpleToast();
} /*end displayToast()*/
 
