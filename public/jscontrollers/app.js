let app = angular.module('MainApp', ["ui.router"]);

app.controller('MainAppController', function ($scope, $http) {

    // code for controller

});


app.config(function ($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise(function ($injector, $location) {
        let $state = $injector.get('$state');
        $state.go('/');
        return true;
    });

    $stateProvider.state('/', {
        url: '/',
        views: {
            "mainView": {
                templateUrl: "html/home.html",
                data: {title: 'Home'},
                controller: 'HomeController'
            }
        }
    }).state('profile', {
        url: '/profile',
        views: {
            "mainView": {
                templateUrl: "html/profile.html",
                data: {title: 'Profile'},
                controller: 'ProfileController'
            }
        }
    })


});
