<!DOCTYPE html>
<html lang="es" ng-app="dcApp">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
  <title>Nextbook</title>

  <!-- css -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/prettify.css">
  <link rel="stylesheet" href="assets/css/main.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-primary">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigatio</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand bmd-ripple" href="#">Red Nextbook</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <!-- <li class="active"><a href="#" class="bmd-ripple">Link <span class="sr-only">(current)</span></a></li> -->
                  <!-- <li><a href="#" class="bmd-ripple">Link</a></li> -->
                  <!-- <li class="dropdown bmd-dropdown">
                      <a href="#" class="dropdown-toggle bmd-ripple" data-toggle="dropdown" role="button" aria-expanded="false">
                        Dropdown
                        <i class="flaticon-show8"></i>
                  </a>
                      <ul class="dropdown-menu" role="menu">
                          <a href="#" class="dropdown-toggle bmd-ripple" data-toggle="dropdown" role="button" aria-expanded="false">
                          </a>
                          <li>
                              <a href="#" class="dropdown-toggle bmd-ripple" data-toggle="dropdown" role="button" aria-expanded="false"></a><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li class="divider"></li>
                          <li><a href="#">One more separated link</a></li>
                      </ul>
                  </li> -->
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown bmd-dropdown">
              <a href="#" class="dropdown-toggle bmd-ripple" data-toggle="dropdown" role="button" aria-expanded="false">
                <i class="fa fa-th"></i>
                <i class="flaticon-show8"></i>
            </a>
              <ul class="dropdown-menu" role="menu">
                  <a href="#" class="dropdown-toggle bmd-ripple" data-toggle="dropdown" role="button" aria-expanded="false">
                  </a>
                  <li>
                      <a href="#" class="dropdown-toggle bmd-ripple" data-toggle="dropdown" role="button" aria-expanded="false"></a><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
              </ul>
          </li>
              <li class="active"><a href="#/Registro" class="bmd-ripple">Inicia Session</a></li>
              </ul>
          </div>
      </div>
  </nav>
  <!-- inline style for demo purpose -->
  <div id="sidebar-small" class="bmd-sidebar-primary bmd-sidebar bmd-sidebar-small bmd-sidebar-collapse bmd-sidebar-left bmd-sidebar-active" style="position:absolute;">
      <ul class="bmd-sidebar-nav list-unstyled">
          <li class="bmd-sidebar-brand">
              <h3><a href="#" class="bmd-ripple">Sidebar Menu</a></h3></li>
          <li><a href="#" class="bmd-ripple">Inicio<i class="bmd-sidebar-small-icon flaticon-android11"></i></a></li>
          <li>
              <a href="#" data-target="#submenu-small" data-toggle="collapse" class="bmd-ripple collapsed">Facturación Electrónica<i class="bmd-sidebar-small-icon flaticon-connection21"></i></a>
              <ul class="list-unstyled collapse" id="submenu-small">
                  <li><a href="#" class="bmd-ripple">Sub-item 1</a></li>
                  <li><a href="#" class="bmd-ripple">Sub-item 2</a></li>
                  <li><a href="#" class="bmd-ripple">Sub-item 3</a></li>
              </ul>
          </li>
          <li><a href="#">Repositorio Facturas<i class="bmd-sidebar-small-icon flaticon-drafts"></i></a></li>
      </ul>
  </div>
  <div class="bmd-page-container">
      <div class="container">
          <div app-view-segment="0">
          </div>
      </div>
  </div>
  <!-- inline style for demo purpose -->
  <a href="#" class="bmd-sidebar-toggle bmd-sidebar-toggle-primary" data-target="#sidebar-small" style="position:absolute;">
      <i class="flaticon-menu55"></i>
      <i class="flaticon-close47"></i>
  </a>

  <!-- Angular Material requires Angular.js Libraries -->
  <script src="assets/angular-1.5.0/angular.min.js"></script>
  <script src="assets/angular-1.5.0/angular-animate.min.js"></script>
  <script src="assets/angular-1.5.0/angular-aria.min.js"></script>
  <script src="assets/angular-1.5.0/angular-messages.min.js"></script>
  <script src="assets/angular-1.5.0/angular-route.js"></script>
  <script src="assets/angular-1.5.0/angular-route-segment.min.js"></script>
  <!-- Angular Material Library -->
  <script src="assets/angular-1.5.0/angular-material.min.js"></script>

    <!-- controller -->
    <script src="data/app.js"></script>
    <script src="data/route.js"></script>

    <!-- adicional script -->
    <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/bootstrap-material-datetimepicker-customized.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/prettify.js"></script>
  <script src="assets/js/main.min.js"></script>
  <script src="assets/js/mask.js"></script>
  <script src="data/require.js"></script>
  
</body>
</html>