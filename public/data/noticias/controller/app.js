//alert("");
var app = angular.module('app', ['ngRoute']);

var API_URL='http://localhost/api_ex/public/api/v1/';

app.factory('service', function($http){
        var service = {};
            service.shownoticicas= function() {
                    return  $http({
                        url:API_URL + "noticias", 
                        method: 'GET'
                    })
            }
        return service;
    });


// // Configuración de las rutas
// app.config(function($routeProvider) {

// 	$routeProvider
// 		.when('/Noticias', {
// 			templateUrl	: 'data/noticias/view/add_noticia.html',
// 			controller 	: 'mainController'
// 		})
// 		$stateProvider
//         .state("PageTab.Page1", {
//             url:"/Page1",
//             templateUrl: "Page-1.html"
//         })
//         .state("PageTab.Page2", {
//             url:"/Page2",
//             templateUrl: "Page-2.html"
//         })
//         .state("PageTab.Page3", {
//             url:"/Page3",
//             templateUrl: "Page3.html"
//         });
// });


app.controller('mainController', function($scope,service) {
    $scope.employees="";
service.shownoticicas().success(function(data, status){
          $scope.employees =data;
      });

          //console.log($scope.employee);


    // $http.get()
    //         .success(function(response) {
    //             $scope.employees = response;

    //         });

    //show modal form
 //    $scope.toggle = function(modalstate, id) {
 //        $scope.modalstate = modalstate;
 //        switch (modalstate) {
 //            case 'add':
 //                $scope.form_title = "Add New Employee";
 //                break;
 //            case 'edit':
 //                $scope.form_title = "Employee Detail";
 //                $scope.id = id;
 //                $http.get(API_URL + 'employees/' + id)
 //                        .success(function(response) {
 //                            console.log(response);
 //                            $scope.employee = response;
 //                        });
 //                break;
 //            default:
 //                break;
 //        }
 //        console.log(id);
 //        $('#myModal').modal('show');
 //    }

 // //save new record / update existing record
 //    $scope.save = function(modalstate, id) {
 //        var url = API_URL + "employees";
        
 //        //append employee id to the URL if the form is in edit mode
 //        if (modalstate === 'edit'){
 //            url += "/" + id;
 //        }
        
 //        $http({
 //            method: 'POST',
 //            url: url,
 //            data: $.param($scope.employee),
 //            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
 //        }).success(function(response) {
 //            console.log(response);
 //            location.reload();
 //        }).error(function(response) {
 //            console.log(response);
 //            alert('Error');
 //        });
 //    }

 //    //delete record
 //    $scope.confirmDelete = function(id) {
 //        var isConfirmDelete = confirm('Está seguro de eliminar?');
 //        if (isConfirmDelete) {
 //            $http({
 //                method: 'DELETE',
 //                url: API_URL + 'employees/' + id
 //            }).
 //                    success(function(data) {
 //                        console.log(data);
 //                        location.reload();
 //                    }).
 //                    error(function(data) {
 //                        console.log(data);
 //                        alert('no se pudo eliminar');
 //                    });
 //        } else {
 //            return false;
 //        }
 //    }



});

app.controller('aboutController', function($scope) {
	$scope.message = 'Esta es la página "Acerca de"';
});

app.controller('contactController', function($scope) {
	$scope.message = 'Esta es la página de "Contacto", aquí podemos poner un formulario';
});

