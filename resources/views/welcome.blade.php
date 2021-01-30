<!DOCTYPE html>
<html ng-app="MainApp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Add Angularjs scripts -->
    <script src="/js/angular.min.js"></script>
    <script src="/js/angular-ui-router.min.js"></script>

    <!--
    {{--for getting angularjs online--}}
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    {{--for getting the latest version of angular-ui-router--}}
    <script src="//unpkg.com/@uirouter/angularjs/release/angular-ui-router.min.js"></script>
    -->

    <!-- Add all controllers here -->
    <script src="/jscontrollers/app.js"></script>
    <script src="/jscontrollers/home.js"></script>
    <script src="/jscontrollers/profile.js"></script>


</head>

<body ng-controller="MainAppController">

<div ui-view="mainView"></div>

</body>

</html>


