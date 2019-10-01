<!Doctype html>
<html lang="en">
	<head>
		<title>Belajar Angular</title>
		<script src="js/angular.js"></script>
		<script src="js/ngroute.js"></script>

	</head>
	<body ng-app="MyApp">
		<p><a href="#/!">Main</a></p>
		<a href="#!red">Red</a>
		<a href="#!green">Green</a>
		<a href="#!blue">Blue</a>
		<a href="#!<?php echo strtolower(date('M')); ?>"><?php echo strtolower(date('M')); ?></a>

		<div ng-view></div> 
		<script>
			var app = angular.module("MyApp", ["ngRoute"]);
			app.config(function ($routeProvider) {
				$routeProvider
				.when("/<?php echo strtolower(date('M')); ?>", {
					templateUrl : "<?php echo strtolower(date('M')); ?>.php"
				})
				.when("/", {
					templateUrl : "main.php"
				})
				.when("/red", {
					templateUrl : "red.php"
				})
				.when("/green", {
					templateUrl : "green.php"
				})
				.when("/blue", {
					templateUrl : "blue.php"
				});
			});
		</script>
	</body>
</html>