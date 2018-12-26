 var home_url = "http://localhost/backend_angular";
 var app = angular.module('userApp',['ngMaterial'], function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
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
        $scope.showSimpleToast();
      },
      function(response){
        console.log(response);
      });


  	} /*end saveEditedUser*/

    var last = {
      bottom: true,
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

 })
