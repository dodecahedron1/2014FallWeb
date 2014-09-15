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
			<a class="navbar-brand" href="index.php">NuYu<span class="glyphicon glyphicon-heart-empty"></span></a>          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="about.html">About</a></li>
                 <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Your NuYu<span class="caret"></span></a>
               			 <ul class="dropdown-menu" role="menu">
                 				 <li><a href="progress.html">Progress</a></li>
                  				<li><a href="food_log.html">Food Log</a></li>
                  				<li class="divider"></li>
                                 <li><a href="#">Sign Out</a></li>
                		</ul>
                		
              	</li>
              	<li><a href="recipes.html">Recipes</a></li>
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
    <!--JUMBOTRON-->
     <div class="jumbotron">
        <h1>Welcome to the NuYu</h1>
        <p class="lead">NuYu is a fitness tracker app that takes your needs into account. NuYu can help you obtain a goal weight or keep you in shape. Some features include: recipes based on your preferred diet, a food log to keep track of your caloric intake, and a progress report to keep you up to date on your weight loss. Sign up today and let NuYu create the 'New You.' </p>
        <p><a class="btn btn-lg btn-success" href="sign_up.php" role="button">Sign Up Today!</a></p>
      </div>
    
    <!--COLUMNS-->
	<div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Recipes</h2>
          <p>You can't just work out. You have to make sure you're eating right too! Check out these healthy and tasty meal ideas! Whether you eat vegan, kosher, or a gluten-free diet, NuYu has all the best dishes to keep you energized and feeling slim. </p>
          <p><a class="btn btn-default" href="recipes.html" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Progress</h2>
          <p>Keeping track of your weight loss, the progress feature helps you establish a guidedline to a healthier life. Based on your input, graphs and charts are created to guide your fitness journey, help you reach your goals, and show you how far you've come.</p>
          <p><a class="btn btn-default" href="progress.html" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Contact</h2>
          <p>Questions? Comments? Concerns? Feel free to contact NuYu if you need to reach us. We are always ready to aid you in your fitness journey.</p>
          <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="Our Email is NuYu@gmail.com">Click here for our email! </button>
                  </div>
      </div>

<footer>
				
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   
		
	</body>
</html>
