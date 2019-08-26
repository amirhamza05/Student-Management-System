
site_url="http://localhost/project/youth/api.php?key=12345";
url="http://localhost/project/youth/api.php?key=12345&type=student_info&student_id=10001";
send_sms_url=site_url+"&type=send_sms";

app.controller("dashboard", function($scope, $http) {
    
  var theme="views/send_sms.html";

 	$http.get(send_sms_url).then(function(response){
        $scope.sms_error=response.data.error
        $scope.sms = response.data.data;
  });

  $http.get(url).then(function (response) {
        $scope.error=response.data.error
        $scope.student = response.data.data;
  });

 
    
    $scope.units = [
        {'name': 'Profile', 'icon': 'user','function': '3'},
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
      else if(no==2)theme="views/send_sms.html"; 
      else if(no==2)theme="views/login.html";
      else if(no==2)theme="views/login.html";
      else if(no==3)theme="views/student_info.html";
      return theme;
    }

  	$scope.get_student_list= function(){
  		theme="views/login.html";
  	}

  	$scope.get_template= function (name){
  		return name;
  	}

    $scope.send_sms=function(){
      var mobile=document.getElementById('mobile').value;
      var text=document.getElementById('text').value;
      var sms_data={
        'mobile': mobile,
        'text': text
      }
      sms_data=JSON.stringify(sms_data);
      var make_url="&type=post_sms&data="+sms_data;
      make_url=site_url+make_url;
      $http.get(make_url).then(function(response1){
        console.log(response1.data.data);
      });

    }

});


app.controller("login", function($scope, $http,$window) {
 
 	$scope.submit=function(){
    var user_name=$scope.user_name;
    var pass=$scope.pass;
    if(user_name=="admin" && pass=="12345"){
      alert(user_name);
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

app.controller("send_sms",function($scope,$http){


    $http.get(send_sms_url).then(function(response){
        $scope.error=response.data.error
        $scope.sms = response.data.data;
    });

}); 