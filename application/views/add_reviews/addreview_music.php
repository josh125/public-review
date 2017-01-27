<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Write us review for the public will known">
	<title>Write A Review - Public Review</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/star-rating.min.css">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<div class="header-top">
		<div id="header-nav-top" class="navbar-fixed-top">
			<div class="container">
					<div class="col-sm-5 col-md-3">
						<p class="hidden-xs">Read Reviews by the Public for the Public<p>
					</div>
					<div class="col-sm-3 col-md-3 hidden-xs"><!-- social icons -->
						<div class="fb-icon">
							<a href="#"><img src="<?php echo base_url();?>assets/img/home/fb.png" class="img-responsive" alt="facebook-icon" width="25px"></a>
						</div>	
						<div class="twitter-icon">
							<a href="#"><img src="<?php echo base_url();?>assets/img/home/twitter.png" class="img-responsive" alt="facebook-icon" width="25px"></a>
						</div>
						<div class="google-icon">
							<a href="#"><img src="<?php echo base_url();?>assets/img/home/google.png" class="img-responsive" alt="facebook-icon" width="25px"></a>
						</div>					
					</div><!-- end of social-icons -->
					<div class="col-xs-12 col-md-4 col-md-offset-2 hidden-xs">
	 					<p><a href="">Create an Account</a> or <button class="btn btn-primary btn-xs sign-button">Sign In</button></p>	
					</div>
					<div class="col-xs-12 visible-xs">
	 					<p class="sign-in"><a href="">Create an Account</a> or <button class="btn btn-primary btn-xs">Sign In</button></p>	
					</div>
			</div>
		</div>	
	</div>
	<header >
		<nav id="nav-top" class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
				<div class="navbar-header nav-inner">
				    <button type="button" class="navbar-toggle collapsed navbar-tog" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar tog-icon"></span>
				        <span class="icon-bar tog-icon"></span>
				        <span class="icon-bar tog-icon"></span>
						</button>
					<a class="navbar-brand logo-brand" href="#"><img src="<?php echo base_url(); ?>assets/img/home/logo.png" alt="Logo" width="180px;" /></a>
				</div>

				<form action="<?php echo base_url();?>writeareview/sample_search_design" method="get">
				<div id="search-bar">
					<div class="col-sm-3 col-md-4 hidden-xs">
						<div class="search-bar-find">
							<input type="text" class="form-control" name="find" placeholder="Find">
						</div>
					</div>
					<div class="col-sm-3 col-md-4 hidden-xs">
						<div class="search-bar-city">
							<input type="text" class="form-control" name="location" placeholder="Location">
						</div>
					</div>
					<button type="button" class="btn btn-primary hidden-xs"><i class="fa fa-search"></i></button>
				</div>
				</form>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav menu-bar">
						<li><a href="<?php echo base_url();?>home"><strong>Home</strong></a></li>
						<li><a href="<?php echo base_url();?>writeareview"><strong>Write A Review</strong></a></li>
						<li><a href=""><strong>About Me</strong></a></li>
						<li><a href="<?php echo base_url();?>contact_us"><strong>Contact Us</strong></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>	

	<section class="title-page">
		<div class="container">
			<div class="col-md-8">
				<div class="row"><br>
					<div class="col-md-1">
						<img src="<?php echo base_url();?>assets/img/add-review/calgary.jpg" alt="hotel_pic" width="50px" height="50px" class="img img-rounded">
					</div>
					<?php foreach($addreview as $row):?>
					<div class="col-xs-12 col-md-8">
						<p><?php echo ucwords($row->item_name);?></p>
						<p><?php echo ucwords($row->address);?>,<?php echo ucwords($row->country);?></p>  
					</div>
				</div><hr />

				<form id="add_a_review_form" method="post" action="<?php echo base_url(); ?>writeareview/addhotel_review">  
					
					<div class="form-group">   
						<label for="rate">Your overall rating of this hotel</label>  
						<input id="input-22" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs" name="overall_rate" value="<?php echo set_value('rate')?>" required>
					</div>   	
					<div class="form-group">  
						<label for="review_title">Title of your review</label>   
						<input type="text" class="form-control" name="review_title" id="review_title" placeholder="Summarize your visit or highlight an interesting detail" required>
					</div>   
					
					<div class="form-group">  
						<label for="review">Your review</label>   
						<textarea class="form-control" type="text" name="review" rows="5" placeholder="Tell the public your experience, your room, location, amentities?" required></textarea>
					</div>  
					<button type="submit" class="btn btn-default btn-primary pull-right">Add A Review</button><br>

				</form>
				<?php endforeach;?>
						 
			</div>
			<div class="col-md-4"><br>
				<div class="panel panel-default">
					<div class="panel panel-heading">  
						<h4>Recent reviews for <?php echo ucwords($row->item_name);?></h4>  
					</div>
					<div class="panel-body">
						<div class="row recent_reviews_hotel">
							<?php foreach($reviews as $r):?>  
							<div class="col-xs-4 col-md-3">
								<img class="img-responsive img-thumbnail" src="<?php echo base_url();?>assets/img/add-review/gallery3.jpg" width="90px">
							</div>
							<div class="col-md-9"> 
								<p><?php echo $r->firstname;?></p>
								<p><strong><?php echo $r->title_review;?></strong></p>
							</div>  
							<div class="col-md-12">   
								<p><?php echo word_limiter($r->review, 10);?><a href="#">more</a></p>
							</div>
							<?php endforeach;?>	
						</div>   
					</div>
				</div>  
			</div>
		</div>
	</section>

	<footer class="footer-background footer-footer">
		<div class="container">
			<div class="row"><br />
				<div class="col-md-3">
					<img src="<?php echo base_url();?>assets/img/home/logo.png" alt="public-review-logo" width="132px">
				</div>
				<div id="footer-link">
					<div class="col-md-6">
	                	<p class="footer-inc"><a href="#" class="footer-color-bottom">Contact Us</a>  | <a href="#" class="footer-color-bottom">About PublicReview</a> | <a href="#" class="footer-color-bottom"> Legal </a> | <a href="#" class="footer-color-bottom">Security Policy</a> | <a href="#" class="footer-color-bottom">Privacy Policy</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<p class="footer-copyright">&copy; 2015 Public Review Inc. All right reserved</p>
				</div>	
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/my_script.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/star-rating.min.js"></script>	


	<script type="text/javascript">

	    $("#input-id").rating();
	    $("#input-22").rating({
	    starCaptions: {1: "Very Poor", 2: "Poor", 3: "Ok", 4: "Good", 5: "Very Good"},
	    starCaptionClasses: {1: "text-danger", 2: "text-warning", 3: "text-info", 4: "text-primary", 5: "text-success"},
	    });

	</script>	
		

</body>
</html>