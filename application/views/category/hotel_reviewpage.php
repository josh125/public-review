<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Reach us here any message or suggestion you like">
	<?php foreach($hotel as $row):?>
	<title><?php echo $row->item_name;?> - Hotels Reviews</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<?php $this->load->view('includes/navbar');?>


	<section class="title-page">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="item-title"><?php echo ucwords($row->item_name);?></h1>
						<p><img class="reviewpage_star" src="<?php echo base_url();?>assets/img/reviewpage/one_star.png" alt="one star" /><img class="reviewpage_star" src="<?php echo base_url();?>assets/img/reviewpage/one_star.png" alt="one star" /><img class="reviewpage_star" src="<?php echo base_url();?>assets/img/reviewpage/one_star.png" alt="one star" /><img class="reviewpage_star" src="<?php echo base_url();?>assets/img/reviewpage/one_star.png" alt="one star" /><img class="reviewpage_star" src="<?php echo base_url();?>assets/img/reviewpage/one_star.png" alt="one star" /> &nbsp; 
						<span class="num_reviews">
							<?php if(count($reviews)> 0):?>
								<?php echo count($reviews);?> reviews
							    <?php else:?>
						  		<?php echo 0;?> reviews
							    <?php endif;?>	
						</span>&nbsp; 
						</p>
						<p><a href="#"><?php echo $row->category;?></a> <a href="#" class="btn btn-default btn-xs"> <i class="fa fa-pencil-square-o fa-lg">  Edit </i></a></p>
				</div><br>
				<div class="col-md-4 col-md-offset-2">

					<?php

						$id = $row->main_category_item_id;

						$encrypt_id = $this->encrypt->encode($id);
						$enc_id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypt_id);
					?>	

					<p><a class="btn btn-primary btn-lg pull-right" href="<?php echo base_url();?>writeareview/hotel/<?php echo $enc_id;?>"><i class="fa fa-star"> Write A Review</i></a>
				</div>
			<?php endforeach;?>	
			</div>
			<div class="row"><br>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
						<img class="img-responsive" src="<?php echo base_url();?>assets/upload/<?php echo $row->category_img;?>" alt="resto_img" width="328px"><br>
							<p><strong><?php echo $row->address;?></strong></p>
							<p><i class="fa fa-phone"> <?php echo $row->phone_no;?></i></p>
							<p><?php echo $row->city;?>, <?php echo $row->country;?></p>
							<p><a href="#"><?php echo $row->website_url;?></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="<?php echo base_url();?>assets/img/reviewpage/10.jpg" alt="...">
						      <div class="carousel-caption">
						        ...
						      </div>
						    </div>
						    <div class="item">
						      <img src="<?php echo base_url();?>assets/img/reviewpage/11.jpg" alt="...">
						      <div class="carousel-caption">
						        ...
						      </div>
						    </div>

						     <div class="item">
						      <img src="<?php echo base_url();?>assets/img/reviewpage/12.jpg" alt="...">
						      <div class="carousel-caption">
						        ...
						      </div>
						    </div>
						    ...
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
					</div>
				</div><!-- end of col-md-8 -->
			</div><!-- end of row -->
		</div>
			<div class="cotainer-fluid wrap_body"><hr>
				<div class="container">
					<div class="col-md-9">
						<div class="well">
							<?php if(count($reviews) > 0):?>
							<?php foreach($reviews as $r):?>
							<div class="row">
								<div class="col-md-2">
									<img class="user_image img-responsive img-rounded hidden-xs" src="<?php echo base_url();?>assets/img/reviewpage/gallery3.jpg" alt="User image" width="70px"></img><br>
									<p><a href="#"><?php echo $r->firstname;?></a></p>
									<p><?php echo $r->user_address;?></p>
								</div>
								<div class="col-md-10">
									<div class="panel panel-default">
										<div class="panel-body">
											<?php 
											$star_src = base_url() . "assets/img/reviewpage/star-blue1.png";
											for($i = 0; $i < $r->review_rate; $i++) {  
												echo "<img src='{$star_src}' alt='Star Rating' width='23px' />&nbsp;";
											}
											?>
											<p class="review-date">Posted: <?php echo date("M. j, Y",strtotime($r->date_review));?></p>
											<h4><b>"<?php echo ucwords($r->title_review);?>"</b></h4>
											<p><?php echo $r->review;?></p><br>
											<p class="review-useful">Was this Review useful? <button type="button" class="btn btn-default btn-xs">Yes</button> <button type="button" class="btn btn-default btn-xs">No</button></p>

										</div>
									</div>
								</div>
							</div>
						<?php endforeach;?>
						<?php else:?>
						<p>there are currently no reviews</p>
						<?php endif;?>
						<center><?php echo $this->pagination->create_links(); ?></center>
						</div>
					</div><!-- end of col-md-9 -->
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<i class="glyphicon glyphicon-comment"></i>
									Take a Public Poll
								</h4>
							</div>
							<div class="panel-body">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="good">Good
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="Excellent">Excellent
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="Needs to Improve">Needs to Improve
									</label>
								</div>
								<button type="submit" class="btn btn-primary pull-right">Vote</button>
							</div>
						</div>	
					</div>
					
				</div><!-- end of container -->
			</div><!-- end of container-fluid -->
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

<script type="text/javascript">
	$('.carousel').carousel()
	
</script>

</body>
</html>