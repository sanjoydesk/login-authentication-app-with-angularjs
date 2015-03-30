
var app = angular.module('MyTutorialApp',  ['ngRoute']);

/**
 * Configure routing for application
 */
app.config(function($routeProvider) {

    $routeProvider
        // route for the login page
        .when('/login', {
            templateUrl : 'assets/templates/login.html',
            controller  : 'LoginController'
        })

        // route for the home page
        .when('/home', {
            templateUrl : 'assets/templates/home.phtml',
            controller  : 'HomeController'
        })

        // route for the contact page
        .when('/logout', {
            templateUrl : 'assets/templates/logout.html',
            controller  : 'LogoutController'
        });
});

/**
 * Url Service manager
 */
app.factory("UrlService", function($rootScope) {
    return {
        set: function(url) {
            $rootScope.baseUrl = url;
        },
        get: function() {
            return $rootScope.baseUrl;
        }
    }
});

/**
 * Authentication Service handler
 */
app.factory("AuthenticationService", function($http, UrlService) {

    var cacheSession = function () {
        sessionStorage.setItem('authenticated', true);
    };

    return {
        login: function(credentials, url) {
            UrlService.set(url);

            var input = {'email': credentials.email, 'password': credentials.password};
            var login = $http.post(UrlService.get()+"auth/check", JSON.stringify(input));

            login.success(function (data) {
                sessionStorage.setItem('authenticated', true);
                sessionStorage.setItem('username', data.name);
            });

            return login;
        },
        logout: function() {
            var logout = $http.get(UrlService.get() +"auth/logout");

            logout.success(function () {
                return sessionStorage.removeItem('authenticated');
            });

            return logout;
        },
        isLoggedIn: function() {
            return sessionStorage.getItem('authenticated');
        },
        getUser: function() {
            return sessionStorage.getItem('username');
        }
    };

});

/**
 * Handle Login request. Authenticate user against database
 * and login into application
 */
app.controller("LoginController", function($scope, $location, AuthenticationService) {

    $scope.credentials = { email: "", password: "" };

    if (AuthenticationService.isLoggedIn()) {
        $location.path('/home');
    }

    $scope.login = function() {

        AuthenticationService.login($scope.credentials, $scope.baseUrl).success(function(response, status, headers, config) {

            //console.log(response);
            if (response.success == true) {
                $location.path('/home');

            } else {
                alert(response.flash);
                return false;
            }
        }).error(function(response, status, headers, config) {
            alert("Login error: " + status + response);
            return false;
        });
    };


});

/**
 * Logout from current session
 */
app.controller("LogoutController", function($scope, $location, AuthenticationService) {

    $scope.logout = function () {

        AuthenticationService.logout().success(function(response) {

            console.log(response);
            if (response.success == true) {
                alert(response.flash);
                $location.path('/login');

            }
        }).error(function(response, status) {
                alert("Login error: " + status + response);
                return false;
            });
    };
});

app.service('WelcomeUserService', function ($rootScope) {
    $rootScope.welcomeuser = '';

    var sharedService = {};

    sharedService.welcome = '';

    sharedService.navbar = function (key) {
        this.welcome = key;
    };

    return {
        set: function(key) {
            $rootScope.welcome = key;
        },
        get: function() {
            return $rootScope.welcome;
        }
    }

    //return sharedService;
});


app.controller("HomeController", function($scope, $location, AuthenticationService) {

    $scope.username = '';
    if (!AuthenticationService.isLoggedIn()) {
        $location.path('/login');
        return false;
    }
    $scope.content = true;
    $scope.username = AuthenticationService.getUser();
    $scope.title = "Hello Developer!!";
    $scope.cygnite = "Cygnite PHP Framework";
    $scope.angular = "Angular JS";

});