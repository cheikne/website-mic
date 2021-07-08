var app = angular.module('website_mic', []);
app.controller('myController', function($scope) {
  $http.get("staticData.json")
  .then(function(response) {
      $scope.staticData = JSON.parse(response.data);
  })
});