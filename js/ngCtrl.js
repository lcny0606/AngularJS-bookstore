//books.controller('booklist', function($scope, $http) {
//$http.get("./control/booksel.php")
//.success(function (response) {$scope.bookstore = response.rs;});
//});

books.controller('booklist-default', function($scope, $http) {
  $http.get("./control/booksel.php")
  .success(function (response) {$scope.bookstore = response.rs;});
});

books.controller('booklist-price', function($scope, $http) {
  $http.get("./control/sel-price.php")
  .success(function (response) {$scope.bookstore = response.rs;});
});

books.controller('booklist-soled', function($scope, $http) {
  $http.get("./control/sore-soled.php")
  .success(function (response) {$scope.bookstore = response.rs;});
});

books.controller('booklist-time', function($scope, $http) {
  $http.get("./control/sore-time.php")
  .success(function (response) {$scope.bookstore = response.rs;});
});

books.config(function($routeProvider){
		$routeProvider.when("/",{templateUrl:'./tpl/sore-deful.html',controller:'booklist-default'})
					.when("/prcie",{templateUrl:'./tpl/sore-price.html',controller:'booklist-price'})
					.when("/soled",{templateUrl:'./tpl/sore-soled.html',controller:'booklist-soled'})
					.when("/pubtime",{templateUrl:'./tpl/sore-time.html',controller:'booklist-time'})
					.otherwise({redirectTo:'/'})
})

//bookmsg.controller('bookmsg', function($scope, $http) {
//$http.get("./control/bookmsg.php")
//.success(function (response) {$scope.bookmessage = response.rs;});
//});

book_msg.controller('numadd',function($scope){
		$scope.booknum=1;
		$scope.numadd=function(){
			$scope.booknum+=1;
		};
		
		$scope.numdel=function(){
			$scope.booknum-=1;
		}
	
	
	
})
