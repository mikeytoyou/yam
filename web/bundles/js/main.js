
    var dep=['ngGrid'];
    var app = angular.module("myApp", dep);
    app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('/.').endSymbol('./');
    
})
//        app.config(function($mdThemingProvider) {
//
//    // Configure a dark theme with primary foreground yellow
//
//    $mdThemingProvider.theme('docs-dark', 'default')
//      .primaryPalette('yellow')
//      .dark();
//
//  });


