var phonecatApp = angular.module('phonecatApp', []);

phonecatApp.controller('PhoneListCtrl', function ($scope,$http) {
    $http.post('/angular/data').success(function(data)
    {$scope.phones=data});
    $scope.orderProp='age';
});