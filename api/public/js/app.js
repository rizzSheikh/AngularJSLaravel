var app = angular.module('mainapp', ["ui.router"]);

app.controller('mainappCtrl', function ($scope, $http) {

});

app.config(function ($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise(function ($injector, $location) {

        var $state = $injector.get('$state');

        $state.go('/');

        return true;

    });

    $stateProvider.state('/', {
        url: '/',
        views: {
            "main": {
                templateUrl: "partials/home.html",
                data: {title: 'home'},
                controller: 'HomeController'
            }
        }
    })

});
