<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" href="NuYu/includes/stylesheet.css" style="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<title>NuYu Fitness Tracker</title>

	
	</head>

	<body>
	
		<div>
          <div class="navbar navbar-default">
          <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			<a class="navbar-brand" href="../Controllers/home.php">NuYu<span class="glyphicon glyphicon-heart-empty"></span></a>          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="../Controllers/about.php">About Nuyu</a></li>
               	<li><a href="../Controllers/progress.php">Excercise Tracker</a></li>
				<li><a href="../Controllers/food.php">Food Tracker</a></li>
              	<li><a href="../Controllers/profile.php">Your NuYu</a></li>


              	<li><a href="../Controllers/recipes.php">Recipes</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="form">
            	
            	</div>
			      </div>			
            </div><!--/.nav-collapse -->
           </div>
         </div>
    </div>
      

		
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>

<script>
				  window.fbAsyncInit = function() {
  					 FB.init({
				     appId      : '612157338912183',
				     xfbml      :  true,
				     version    : 'v2.2'
				    });
				  };
				
				  (function(d, s, id){
				     var js, fjs = d.getElementsByTagName(s)[0];
				     if (d.getElementById(id)) {return;}
				     js = d.createElement(s); js.id = id;
				     js.src = "//connect.facebook.net/en_US/sdk.js";
				     fjs.parentNode.insertBefore(js, fjs);
				   }(document, 'script', 'facebook-jssdk'));
		</script>
   <script type="text/javascript">
+			var $socialScope = null;
+			angular.module('app', [])
+				.controller('social', function($scope){
+					$socialScope = $scope;
+					$socialScope.$apply();
+				});
+			function checkLoginState() {
+			    FB.getLoginStatus(function(response) {
+				    $socialScope.status = response;
+				    if (response.status === 'connected') {
+				      FB.api('/me', function(response) {
+					      $socialScope.me = response;
+					      $socialScope.$apply();
+					      console.log(response);
+					    });
+				    } else if (response.status === 'not_authorized') {
+				      // The person is logged into Facebook, but not your app.
+				      console.log('not_authorized');
+				    } else {
+				      // The person is not logged into Facebook, so we're not sure if
+				      // they are logged into this app or not.
+				      console.log('Not Logged in');
+				    }
+			    });
+			  }
+		</script>

	</body>
</html>