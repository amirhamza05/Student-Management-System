url="http://localhost/project/youth/api.php?key=12345&type=student_info&student_id=10021";

app.controller("get_student_info", function($scope, $http) {
 
 	$http.get(url).then(function (response) {
      $scope.error=response.data.error
      $scope.myData = response.data.data;
  	});

  	$scope.units = [
        {'id': -1, 'label': 'Select Program'},
        {'id': 10, 'label': 'SSC Program'},
        {'id': 27, 'label': 'JSC Program'},
        {'id': 39, 'label': 'HSC Program'},
    ]

    $scope.data = {
      'unit': -1
    }

	 $scope.unitChanged= function(val){
    	
    } 

});


app.controller("dashboard", function($scope, $http) {
    
  var theme="views/student_info.html";

 	 $http.get(url).then(function (response) {
        $scope.error=response.data.error
        $scope.student = response.data.data;
  });
    
    $scope.units = [
        {'name': 'Profile', 'icon': 'user','function': '1'},
        {'name': 'Result', 'icon': 'list-alt','function': '2'},
        {'name': 'Payment', 'icon': 'eur','function': '1'},
        {'name': 'Attendence', 'icon': 'check','function': '2'},
        {'name': 'Live Chat', 'icon': 'envelope','function': '1'}
    ]
    
    $scope.getPartial = function () {
      return theme;
  	}

    $scope.get_login=function(no){

      if(no==1)theme="views/login.html";
      else if(no==2)theme="views/result.html";
      else if(no==2)theme="views/login.html";
      else if(no==2)theme="views/login.html";
      return theme;
    }

  	$scope.get_student_list= function(){
  		theme="views/login.html";
  	}

  	$scope.get_template= function (name){
  		return name;
  	}

});

app.controller("login", function($scope, $http,$window) {
 
 	$scope.submit=function(){
    var user_name=$scope.user_name;
    var pass=$scope.pass;
    if(user_name=="admin" && pass=="12345"){
      $window.location.href = '../student/';
    }
    else alert("Wrong Pass");
  }

  $scope.islogin=function(){
      
  }

  $scope.logout=function(){

  }

  

});

app.controller("student", function($scope, $http) {
 
  $http.get(url).then(function (response) {
        $scope.error=response.data.error
        $scope.student = response.data.data;
  });

});