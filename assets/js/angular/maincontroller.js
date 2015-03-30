app.controller("MainController", function($scope,  $http){

    $scope.errors = [];
    $scope.msgs = [];

	$scope.SignUp = function() {
 
        $scope.errors.splice(0, $scope.errors.length); // remove all error messages
        $scope.msgs.splice(0, $scope.msgs.length);

        $http.post('http://localhost/service/tracywith/home/angular_js', {'username': $scope.username, 'userpassword': $scope.userpassword, 'useremail': $scope.useremail}
        ).success(function(data, status, headers, config) {

            if (data == '1') {
                $scope.msgs.push("Thanks! You have Registered Successfully!");
            } else {
                $scope.errors.push("Error Occured while saving into Database");
            }
        }).error(function(data, status) { // called asynchronously if an error occurs
            // or server returns response with an error status.
            $scope.errors.push(status);
        });
    }

});
