var sap = angular.module("sap", ["ngRoute"]);

sap.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl: "home.html"
    })
    .when("/agregar", {
        templateUrl: "altas_alumnos.php"
    })
    .when("/modificar", {
        templateUrl: "cambios_alumnos.php"
    })
        .when("/editar", {
            templateUrl: "editar_alumno.php"
        })
    .when("/eliminar", {
        templateUrl: "bajas_alumnos.php"
    })
    .when("/buscar", {
        templateUrl: "consultas_alumnos.php"
    })
    .otherwise({redirectTo : '/'});
});