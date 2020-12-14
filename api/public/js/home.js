app.controller('HomeController',
    ['$scope', '$location', '$http', '$rootScope',
        function ($scope, $location, $http, $rootScope) {

            $scope.go = function (path) {
                $location.path(path).replace();
            }


        }])

