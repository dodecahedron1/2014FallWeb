<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" href="../includes/stylesheet.css" style="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<title>NuYu Fitness Tracker -- Home Page</title>

	
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
                <li><a href="../Controllers/about.php">About</a></li>
                 <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Your NuYu<span class="caret"></span></a>
               			 <ul class="dropdown-menu" role="menu">
                 				 <li><a href="../Controllers/progress.php">Progress</a></li>
                  				<li><a href="../Controllers/food_log.php">Food Log</a></li>
                  				<li class="divider"></li>
                                 <li><a href="#">Sign Out</a></li>
                		</ul>
                		
              	</li>
              	<li><a href="../Controllers/recipes.php">Recipes</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
      </div>
      


<footer>
				<p>
					&copy; Copyright  by Kevin O'Connor
				</p>
			</footer>
		</div>
		
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   
	</body>
</html>