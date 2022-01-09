<html>
	<head>
		<title>Unturned Tools</title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<!-- MenuMaker Plugin -->
		<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
		<!-- Icon Library -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
	</head>
	<body>
		<div class="logo"></div>
		<div class="menu" ng-show="screen == 'preview'" ng-hide="loading">
			<div class="col-md-12">
				<div id="cssmenu">
					<div id="menu-button">Menu</div>
  <ul>
     <li><a href="pages/home.html" target="main"><i class="fa fa-fw fa-home"></i> Home</a></li>
     <li class="has-sub"><span class="submenu-button"></span><a href="web-console/src/" target="main">Console</a></li>
     <li class="has-sub"><span class="submenu-button"></span><a href="http://127.0.0.1:6080/vnc_lite.html?host=127.0.0.1&port=6080&password=vampire10&encrypt=0&true_color=1" target="main">Visual</a>
        </li>
     <li><a href="#" target="main">Rocketmod</a></li>
     <li><a href="#" target="main">Steam</a></li>
     <li><a href="#" target="main">Servidor Dedicado</a></li>
     <li class="has-sub"><span class="submenu-button"></span><a href="#" target="main">Social</a>
        <ul>
           <li><a href="#" target="main">E-Mail</a></li>
           <li><a href="#" target="main">Facebook</a></li>
           <li><a href="#" target="main">Twitter</a></li>
           <li><a href="#" target="main">WhatsApp</a></li>
           <li><a href="#" target="main">YouTube</a></li>
        </ul>
     </li>
  </ul>
</div>
</div>
      </div>
			<iframe name="main" src="pages/home.html" class="output"/>
		
	</body>
