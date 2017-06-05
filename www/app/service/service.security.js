angular.module('ejemplo').service('securityService', ['$http', function($http){
    
    this.validateUserAndPassword = function (data) {
      return $http.post('http://localhost/ejemplo/www/server.php/identificar', $.param(data));
    };

    // this.getUser = $http.get('http://localhost/cras/www/server.php/obtener_usuarios');
    
}]);