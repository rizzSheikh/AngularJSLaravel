<!DOCTYPE html>
<html ng-app="mainapp">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{--for getting angularjs in laravel--}}
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

        {{--for getting the latest version of angular-ui-router--}}
        <script src="//unpkg.com/@uirouter/angularjs/release/angular-ui-router.min.js"></script>

        {{--custom bootstrap file--}}
        <link rel="stylesheet" href="/css/bootstrap.css">


        <script src="/js/app.js"></script>
        <script src="/js/home.js"></script>



    </head>

    <body ng-controller="mainappCtrl">

    <div ui-view="main"></div>

    </body>

</html>
