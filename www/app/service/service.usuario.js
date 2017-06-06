angular.module('ejemplo').service('agregarContactoService', ['$http', function($http){
    
    

    this.obtenerUsu = $http.get('http://localhost/ejemplo/www/server.php/obtenerUsuario');
    
    
    this.agregarContacto = function (data) {
      return $http.post('http://localhost/ejemplo/www/server.php/agregarContacto', $.param(data));
    };
    
    this.obtenerContacto = $http.get('http://localhost/ejemplo/www/server.php/obtenerContacto');
    
    this.editarContacto = function (data) {
      return $http.post('http://localhost/ejemplo/www/server.php/editarContacto', $.param(data));
    };
    
    this.eliminarContacto = function (data) {
      return $http.post('http://localhost/ejemplo/www/server.php/eliminarContacto', $.param(data));
    };
}]);