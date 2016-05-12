<!-- index.html -->
<!DOCTYPE html>
<html ng-app='app'>
<head>
  <link rel="stylesheet" href="app/css/bootstrap.min.css" />
</head>
<body ng-controller='mainController'>


<div class="container">
  <h2>Noticias</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#publicar">Publicar</a></li>
    <li><a data-toggle="tab" href="#preview">Vista Previa</a></li>
    <li><a data-toggle="tab" href="#update_delete">Modificar/Eliminar</a></li>
    <li><a data-toggle="tab" href="#otro">Otro</a></li>
  </ul>

  <div class="tab-content">
   <div ng-view></div>
</div>

	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
  	<script src="app/lib/angular-1.5.0/angular.min.js"></script>
  	<script src="app/lib/angular-1.5.0/angular-route.js"></script>
  	<script src="app/controllers/main.js"></script>
        <script src="app/js/jquery.min.js"></script>
        <script src="app/js/bootstrap.min.js"></script>

</body>
</html>