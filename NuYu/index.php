<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" href="stylesheet.css" style="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<title>NuYu Fitness Tracker -- Home Page</title>

	
	</head>

	<body>
		<!--NAVBAR-->
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
            <a class="navbar-brand" href="index.php">NuYu</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li><a href="recipes.html">Recipes</a></li>
            <li><a href="progress.html">Progress</a></li>
            <li><a href="profile.html">Profile</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
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
    <!--JUMBOTRON-->
     <div class="jumbotron">
        <h1>Welcome to the NuYu</h1>
        <p class="lead">NuYu is a fitness tracker app that takes your needs into account. NuYu can help you obtain a goal weight or keep you in shape. Some features include recipies based on your diet, music to get you pumped up, and a progress report to keep you up to date on your weight loss. Sign up today and let NuYu create the 'New You.' </p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign Up Today!</a></p>
      </div>
    
    <!--COLUMNS-->
	<div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Recipies</h2>
          <p>You can't just work out. You have to make sure you're eating right too! Check out these healthy and tasty recipie ideas! Whether you eat vegan, kosher, or a gluten-free diet, NuYu has all the best dishes that are beneficial to your progress. </p>
          <p><a class="btn btn-default" href="recipes.html" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
      
      <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
  </ul>
</div>

      



			<footer>
				<p></p>
				<p></p>
				<p></p>
				<blockquote>
  				<p>You are never too old to set another goal or dream a new dream.</p>
				  <footer>C.S. Lewis</footer>
				</blockquote>
				
				<p>
					&copy; Copyright  by Kevin O'Connor 2014
				</p>
			</footer>
		</div>
		
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
		
	</body>
</html>
