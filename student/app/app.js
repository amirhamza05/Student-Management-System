var app = angular.module("myApp", ["ngRoute"]);


app.config(function($routeProvider) {
  $routeProvider
  
  .when("/", {
    
    templateUrl : "views/dashboard.html",
    controller : "dashboard"

  })


  .when("/batch_info", {

    templateUrl : "views/batch_info.html",
    controller : "get_batch_info" 
  })

  .when("/student_info", {
    templateUrl : "views/student_info.html",
    controller : "get_student_info"
  })

  .when("/program_info", {
    templateUrl : "views/program_info.html",
    controller : "get_program_info"
  })

  .when("/login", {
    templateUrl : "views/login.html",
    controller : "login"
  })

  .when("/send_sms",{
    templateUrl: "views/send_sms",
    controller: "send_sms"
  })

  .otherwise({
    redirectTo: "/login"
  });

});

