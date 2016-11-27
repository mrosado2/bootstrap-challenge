<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Custom CSS Goes HERE -->
		<link rel="stylesheet" href="css/styles.css" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<title>Bootstrap Challenge Demo</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<!-- begin header and navbar-->
			<header>
				<nav class="navbar navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Bootstrap Challenge Demo</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#about">About Me</a></li>
								<li><a href="#moar">Moar Stuff</a></li>
								<li><a href="https://github.com/rlewis2892/bootstrap-challenge-demo" target="_blank"><i class="fa fa-github"></i>&nbsp;&nbsp;GitHub</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>

			<!-- begin welcome section -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="jumbotron text-center">
								<h1>Welcome to the Bootstrap Challenge Demo!</h1>
								<p class="lead">View the source code or the GitHub project :D</p>
							</div>
						</div><!-- /.col-sm-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>

			<!-- begin photo/text section -->
			<a name="about"></a><!-- this is an "anchor" link -->
			<section class="bg-gray">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<img src="http://www.fillmurray.com/230/230" alt="bill murray" class="img-responsive img-thumbnail xs-center-block m-b-2">
						</div>
						<div class="col-sm-9">
							<p class="lead">I am the best. The dog smells bad rub face on owner. Go into a room to decide you didn't want to be in there anyway inspect anything brought into the house.</p>
							<p>Throwup on your pillow sniff other cat's butt and hang jaw half open thereafter friends are not food damn that dog ignore the squirrels, you'll never catch them anyway then cats take over the world leave fur on owners clothes. Scratch at the door then walk away.</p>
							<p>Caticus cuteicus licks your face, kitten is playing with dead mouse. Behind the couch groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked!. You call this cat food? refuse to leave cardboard box.</p>
							<p>Sun bathe scratch the box make meme, make cute face for wake up wander around the house making large amounts of noise jump on top of your human's bed and fall asleep again this human feeds me.</p>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>

			<!-- begin 4 column section -->
			<a name="moar"></a><!-- this is an "anchor" link -->
			<section>
				<div class="container">
					<div class="row">

						<div class="col-sm-3">
							<div class="text-center m-b-2">
								<img src="http://www.fillmurray.com/100/100" alt="fillmurray.com" class="img-responsive img-circle img-thumbnail">
								<div>
									<h3>Title 1</h3>
									<p class="text-justify">Caticus cuteicus licks your face, kitten is playing with dead mouse. Behind the couch groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked!. You call this cat food? refuse to leave cardboard box.</p>
								</div>
							</div>
						</div><!-- /.col-sm-3 -->

						<div class="col-sm-3">
							<div class="text-center m-b-2">
								<img src="http://www.fillmurray.com/100/100" alt="fillmurray.com" class="img-responsive img-circle img-thumbnail">
								<div>
									<h3>Title 2</h3>
									<p class="text-justify">Caticus cuteicus licks your face, kitten is playing with dead mouse. Behind the couch groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked!. You call this cat food? refuse to leave cardboard box.</p>
								</div>
							</div>
						</div><!-- /.col-sm-3 -->

						<div class="col-sm-3">
							<div class="text-center m-b-2">
								<img src="http://www.fillmurray.com/100/100" alt="fillmurray.com" class="img-responsive img-circle img-thumbnail">
								<div>
									<h3>Title 3</h3>
									<p class="text-justify">Caticus cuteicus licks your face, kitten is playing with dead mouse. Behind the couch groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked!. You call this cat food? refuse to leave cardboard box.</p>
								</div>
							</div>
						</div><!-- /.col-sm-3 -->

						<div class="col-sm-3">
							<div class="text-center m-b-2">
								<img src="http://www.fillmurray.com/100/100" alt="fillmurray.com" class="img-responsive img-circle img-thumbnail">
								<div>
									<h3>Title 4</h3>
									<p class="text-justify">Caticus cuteicus licks your face, kitten is playing with dead mouse. Behind the couch groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked!. You call this cat food? refuse to leave cardboard box.</p>
								</div>
							</div>
						</div><!-- /.col-sm-3 -->

					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
		</div><!-- /.sfooter-content -->

		<!-- begin footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>&copy; Copyright Text Here :P</p>
						<div class="small">
							<a href="#top"><i class="fa fa-arrow-up"></i>&nbsp;&nbsp;Back to Top</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>